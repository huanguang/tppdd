<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/6
 * Time: 5:26 AM
 */

namespace app\index\home;


use app\lib\exception\AjaxException;
use app\lib\exception\ParameterException;
use app\lib\pinduoduo\MobileClient;
use app\lib\tools\Server;
use app\system\model\Cash;
use app\system\model\Client;
use app\system\model\Goods as GoodsModel;
use app\system\model\SystemUser;
use app\system\model\User as UserModel;
use app\system\model\Orders as OrdersModel;
use app\system\model\Stores as StoresModel;


/**
 * 支付平台接口
 * Class Api
 * @package app\index\home
 */
class Api extends ApiBase
{

    protected $beforeActionList = [
        'is_post' => ['except' => 'wepay_h5'],
        'is_get' => ['only' => 'wepay_h5']
    ];

     /**
     * 下单
     * @return \think\response\Json
     * @throws AjaxException
     * @throws ParameterException
     * @throws \think\Exception
     */
    public function order()
    {
        ini_set("max_execution_time", 0);
        $type = input('post.type/s', '');
        $total = input('post.total/d', 0);
        $staff_id = input('post.staff_id/d', 0);
        $api_order_sn = input('post.api_order_sn/s', '');
        $notify_url = input('post.notify_url/s', '');
        //file_put_contents('request.txt',date('Y-m-d H:i:s')."\n".var_export($_POST,true)."\n",FILE_APPEND);
        if (! in_array($type, OrdersModel::$payments)) {
            throw new ParameterException(['msg' => 'type参数错误']);
        }
        if ($api_order_sn) {
            $ordersModel = OrdersModel::get(['api_order_sn' => $api_order_sn]);
            if ($ordersModel) {
                throw new AjaxException(['msg' => '不要重复下订单哦']);
            }
        }
        switch ($type) {
            case OrdersModel::$payments[OrdersModel::WECHAT] :
                $pay_code = OrdersModel::WECHAT;
                break;
            case OrdersModel::$payments[OrdersModel::ALIPAY] :
                $pay_code = OrdersModel::ALIPAY;
                break;
        }

        $user   = [];
        $goods  = [];
        for ($i = 0; $i < 3; $i++) {
            unset($userModel);
            unset($goodsModel);
            $userModel = new UserModel();
            $goodsModel = new GoodsModel();
            $where = [
                'status' => 1,
                'is_expired' => 0,
            ];
      //  if ($this->c_id) {
        //        $where['c_id'] = $this->c_id;
         //   }
           
            $goods_where = [
                'status' => 1,
                'is_upper' => 1,
                'c_id'=>$this->c_id,
                'normal_price'=>$total
            ];

            $goods_list  = $goodsModel->where($goods_where)->select();
           
            $goods_num = count($goods_list);
            if(!$goods_num){
               throw new AjaxException(['msg' => '没匹配对应金额'.$total.'商品']);
            }
            $goods_arr = array_unique(range(0,$goods_num-1));
	    $timeDate =  date('Y-m-d',time());
	    $begin = $timeDate." 00:00:00";
	    $end = $timeDate." 23:59:59";
	    $order_where=[
		['status','gt',OrdersModel::UNPAY],
		['ctime','between',$begin.','.$end]
	    ];
            $order_list = OrdersModel::where($order_where)->select();
	    //echo OrdersModel::getLastSql();
            $page_size = 50;
            $count = $userModel->where($where)->count();
          file_put_contents('request2.txt',date('Y-m-d H:i:s')."\n-------------------------------".$count."\n",FILE_APPEND);
            $page_num = ceil($count / $page_size);
            $page_arr = range(1,$page_num);
            while ($page_arr) {
                $index = array_rand($page_arr);
                $page = $page_arr[$index];
                $user_list = $userModel->where($where)->order('use_time', 'asc')->page($page)->limit($page_size)->select();
                if ($user_list->isEmpty()) {
                    unset($page_arr[$index]);
                    continue;
                }
                $user_num = count($user_list);
                $user_arr = range(0,$user_num-1);
                while ($user_arr) {
                    $user_index = array_rand($user_arr);
                    $user = $user_list[$user_index];
                    if (!$user) {
                        unset($user_arr[$user_index]);
                        continue;
                    }
                    unset($user_arr[$user_index]);
                  	break;
                }

                if(!$user){
                    unset($page_arr[$index]);
                    continue;
                }

                $goods_index = array_rand($goods_arr);
              	
                $goods = $goods_list[$goods_index];
                
                if($order_list)
                {
                    $num = 0;
                    foreach ($order_list as $order)
                    {
                        if($order['store_id'] == $goods['stores_id'] && $order['user_id'] == $user['id'] && $order['status'] > 0 && $order['status'] < 4 )
                        {
                            if($num > 30){
                                break;
                            }
                            $num++;
                        }
                    }
                    if($num > 30)
                    {
                        unset($page_arr[$index]);
                        $user = $goods = [];
                        continue;
                    }
                }
                break;
            }

            if (!$user) {
                throw new AjaxException(['msg' => '没匹配到账号']);
            }
            if (!$goods) {
                throw new AjaxException(['msg' => '没匹配到商品']);
            }
            $mobileClient = new MobileClient($user);
            $mobileClient->goods_detial($goods->goods_id);
            $result = $mobileClient->order($user, $goods, $total, $pay_code);
            if (isset($result['error_code']) && $result['error_code'] > 0) {
                $user_update['expired_limit_noaddr'] = '<span style="color:red">下单失败</span>';
                $user_update['is_expired'] = 3;
		$user_update['status'] = 0;
                //$userModel->save($user,['id'=>$user['id']]);
		//$userModel->where(['id'=>$user['id']])->update($user_update);
                \Log::record(sprintf('拼多多下单失败 [error_code] %d [user_id] %d [goods_id] %d', $result['error_code'], $user['id'], $goods->goods_id), 'error');
                if ($i == 2) {
                    throw new AjaxException(['msg' => '拼多多下单失败']);
                }
            } else {
                if (intval($result['order_amount'] / 100) == $total) {
                    break;
                } else {
                    $goods['is_upper'] = 0;
                    $goodsModel->save($goods,['id'=>$goods['goods_id']]);
                    \Log::record(sprintf('商品价格不对 [goods_id] %d', $goods['goods_id']), 'error');
                }
            }
        }
        if (!$user) {
            throw new AjaxException(['msg' => '没匹配到账号']);
        }
        if (!$goods) {
            throw new AjaxException(['msg' => '没匹配到商品']);
        }
        \Db::startTrans();
        try{

            $data = [
                'admin_uid' => $goods['admin_uid'],
                'staff_id' => $staff_id,
                'order_sn' => $result['order_sn'],
                'api_order_sn' => $api_order_sn,
                'ip' => $this->request->ip(),
                'fp_id' => $result['fp_id'],
                'total' => $total,
                'is_pay' => 0,
                'notify_url' => $notify_url,
                'is_notify' => 0,
                'pay_type' => $pay_code,
                'from_platform' => $this->platform,
                'status' => 0,
                'do' => 0,
                'g_id' => $goods['id'],
                'user_id' => $user['id'],
                'c_id' => $this->c_id,
                'store_id'=> $goods['stores_id'],
            ];

            $ordersModel = new OrdersModel($data);

            $ordersModel->save();

            StoresModel::where(['id' => $goods->stores_id])->inc('order_total', $total)->update();

            // 提交事务
            \Db::commit();

            $pay_url = $mobileClient->pay($type, $result);

            if ($type == OrdersModel::$payments[OrdersModel::WECHAT]) {
                $h5_url = $mobileClient->wepay_h5_url($result['order_sn']);
            }
            if ($type == OrdersModel::$payments[OrdersModel::ALIPAY]) {
                $h5_url = $pay_url;
            }

            return $this->ajax_success('下单成功', [
                'order_sn' => $result['order_sn'],
                'api_order_sn' => $api_order_sn,
                'type' => $type,
                'fp_id' => $result['fp_id'],
                'qr_url' => $pay_url,
                'h5_url' => $h5_url,
            ]);

        } catch (\Exception $e) {
            // 回滚事务
            \Db::rollback();
            throw $e;
        }
    }


    /**
     * 查询订单
     * @return \think\response\Json
     * @throws AjaxException
     * @throws \think\Exception
     */
    public function queryorder()
    {

        $order_sn = input('post.order_sn/s', '');

        $ordersModel = new OrdersModel();

        $order = $ordersModel->getANdUpdateOrderByOrderSN($order_sn);

        return $this->ajax_success('查询成功', [
            'order_sn' => $order->order_sn,
            'total' => $order->total,
            'is_pay' => $order->is_pay,
            'status' => OrdersModel::$status[$order->status],
        ]);

    }

    /**
     * 查询余额
     * @return \think\response\Json
     */
    public function querybalance()
    {

        $client = Client::get(['admin_uid' => $this->admin_uid]);

        if (! $client) {
            return $this->ajax_error('查询失败');
        } else {
            $cash_fee_c = $client->cash_fee * 0;
            $max_cash_fee = sprintf('%.2f', $client->total * $cash_fee_c);
            $max_cash = intval($client->total - $max_cash_fee);
            return $this->ajax_success('查询成功', [
                'total' => $client->total,
                'max_cash_fee' => $max_cash_fee,
                'max_cash' => $max_cash,
            ]);
        }

    }

    /**
     * 申请提现
     * @return \think\response\Json
     */
    public function cash_add()
    {

        $total = input('param.total/d', 0);
        $bank_title = input('param.bank_title/s', '');
        $bank_name = input('param.bank_name/s', '');
        $bank_address = input('param.bank_address/s', '');

        if (! $total) {
            return $this->ajax_error('提现金额不能为空');
        }

        if (! $bank_title) {
            return $this->ajax_error('机构名称不能为空');
        }

        if (! $bank_name) {
            return $this->ajax_error('收款姓名不能为空');
        }

        if (! $bank_address) {
            return $this->ajax_error('收款账号不能为空');
        }

        $client = Client::get(['admin_uid' => $this->admin_uid]);

        if (! $client) {
            return $this->ajax_error('查询失败');
        }

        $cash_fee_c = $client->cash_fee * 0;
        $cash_fee = sprintf('%.2f', $total * $cash_fee_c);

        if (($total + $cash_fee) > $client->total) {
            return $this->ajax_error('提现余额不足');
        }

        $admins = SystemUser::getFinance($this->c_id);

        if ($admins) {
            $f_id = $admins->id;
            $admins->mtime = time();
            $admins->save();
        } else {
            $f_id = 0;
        }

        \Db::startTrans();
        try {
            $pre_balance = $client->total;
            $client->total = $client->total - ($total + $cash_fee);
            $cashModel = new Cash([
                'total' => $total,
                'fee' => $cash_fee,
                'cash_value' => $total,
                'pre_balance' => $pre_balance,
                'balance' => $client->total,
                'bank_title' => $bank_title,
                'bank_name' => $bank_name,
                'bank_address' => $bank_address,
                'admin_uid' => $client->admin_uid,
                'f_id' => $f_id,
            ]);
            $cashModel->save();
            $result = $client->where(['id' => $client->id])->dec('total', $total)->update();
            if ($result) {
                \Db::commit();
                return $this->ajax_success('申请成功', [
                    'cash_id' => $cashModel->id,
                    'total' => $total,
                    'fee' => $cash_fee,
                    'pre_balance' => $pre_balance,
                    'balance' => $client->total,
                    'bank_title' => $bank_title,
                    'bank_name' => $bank_name,
                    'bank_address' => $bank_address,
                ]);
            } else {
                \Db::rollback();
                return $this->ajax_error('申请失败');
            }
        } catch (Exception $e) {
            \Db::rollback();
            throw $e;
        }

    }

    /**
     * 提现状态
     * @return \think\response\Json
     */
    public function cash_status()
    {

        $cash_id = input('param.cash_id/d', 0);

        if (! $cash_id) {
            return $this->ajax_error('提现id不能为空');
        }

        $cash = Cash::get(['admin_uid' => $this->admin_uid, 'id' => $cash_id]);

        if (! $cash) {
            return $this->ajax_error('查询失败');
        }

        $msg = '';

        if ($cash->status == 1) {
            $msg = '已下发';
        } else if ($cash->status == 2) {
            $msg = '已取消';
        } else {
            $msg = '未下发';
        }

        return $this->ajax_success($msg, [
            'status' => $cash->status
        ]);

    }

}
