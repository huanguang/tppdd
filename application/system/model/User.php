<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/3
 * Time: 9:17 PM
 */

namespace app\system\model;



use app\lib\exception\PinduoduoException;
use app\lib\pinduoduo\MobileClient;
use app\system\model\Goods as GoodsModel;
use think\Facade\Cache;
use think\Exception;

class User extends BaseModel
{

    // 定义时间戳字段名
    protected $createTime = 'ctime';
    protected $updateTime = false;

    // 自动写入时间戳
    protected $autoWriteTimestamp = 'datetime';

    //自动写入时间格式
    protected $dateFormat = 'Y-m-d H:i:s';

    public function admin()
    {
        return $this->belongsTo('SystemUser', 'admin_uid')->bind(['admin_name'=>'nick']);
    }

    public function match($c_id = 0)
    {
        $where = [
            'status' => 1,
            'is_expired' => 0,
        ];
        if ($c_id) {
            $where['c_id'] = $c_id;
        }
        $page_size              = 10;
        $user_list              = self::where('is_expired',0)->where('status','1')->select();

        $user_list_total        =  count($user_list);
        $user_list_page_num     = ceil($user_list_total / $page_size); // 1
        $user_list_page_num_arr = array_unique(range(0,$user_list_page_num - 1));   // 0-1

        // 获取 用户订单

        while ($user_list_page_num_arr) {
            $page = array_rand($user_list_page_num_arr);
            $list_index = range( ($page * $page_size), ($page * $page_size + $page_size) );
            $list = [];
            foreach ($list_index as $index){
                if(isset($user_list[$index])){
                    $list[] = $user_list[$index];
                };
            }
            $list = array_values($list);
            if (!$list) {
                break;
            }

            foreach ($list as $user) {
                if ($user['address_id'] == 0) {
                    $user['expired_limit_noaddr'] = '<span style="color:red">未填收货地址</span>';
                    //$user->status = 0;
                    $user['is_expired'] = 2;
                    $user['use_time'] = time();
                    $this->update($user,['id'=>$user['id']]);
                    \Log::record(sprintf('[user match] 用户未添加收货地址 [user_id] %d', $user->id), 'error');
                    continue;
                }
               $mobileClient = new MobileClient($user);
               try {
                   $mobileClient->getaddresstpl(9999);
                   $user['expired_limit_noaddr'] = '<span style="color:green">正常</span>';
                   $user['status'] = 1;
                   $user['is_expired'] = 0;
                   $user['use_time'] = time();
                   $this->update($user,['id'=>$user['id']]);
               } catch(Exception $e) {
                   if ($e instanceof PinduoduoException) {
                       $user['expired_limit_noaddr'] = '<span style="color:red">超时</span>';
                       //$user->status = 0;
                       $user['is_expired'] = 1;
                       $user['use_time'] = time();
                       $this->update($user,['id'=>$user['id']]);
                       \Log::record(sprintf('[user match] 用户已超时 [user_id] %d', $user['id']), 'error');
                       continue;
                   } else {
                       throw $e;
                   }
               }
                return $user;
            }
            unset($user_list_page_num_arr[$page]);
        }
        die;
    }

    public function user_match($user_id,$c_id = 0)
    {
//        $user_list              = self::getAllCache();
//        if($user_list){
//            foreach ($user_list as $user){
//                if($user['id'] == $user_id && $user['c_id'] = $c_id){
//                    return $user;
//                }
//            }
//        }
        return $this->where('is_expired',0)->where('status','1')->where('id',$user_id)->where('c_id',$c_id)->find();
    }



    /**
     * 缓存所有的用户信息
     */
    public static function setAllCache(){
        $list = self::where('is_expired',0)->where('status','1')->select();

        Cache::set('user_all_cache',$list);
        return $list;
    }



    public static function getAllCache(){
        $list =  Cache::get('user_all_cache');
        if(!$list){
            $list = self::setAllCache();
        }
        return $list;
    }


    
}