<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/5
 * Time: 3:52 PM
 */

namespace app\lib\pinduoduo;


use app\lib\exception\PinduoduoException;
use app\lib\tools\Encryption;
use app\system\model\User as UserModel;

/**
 * 拼多多辅助工机具
 * Class Tools
 * @package app\lib\pinduoduo
 */
class Tools
{

    public static function getGoods($goods_url, $c_id)
    {

        if (preg_match('/(?<=goods_id=)\d+/', $goods_url, $matches)) {
            $goods_id = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '商品地址格式错误']);
        }

        $userModel = new UserModel();

        $user = $userModel->match($c_id);

        if (! $user) {
            throw new PinduoduoException(['msg' => '没匹配到有效账号,请先添加账号']);
        }

        $mobileClient = new MobileClient($user);

        $html = $mobileClient->goods_detial($goods_id);

        $data = [
            'goods_id' => $goods_id
        ];

        if (preg_match('/(?<="groupID":)(\d+)/', $html, $matches)) {
            $data['group_id'] = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址获取不到group_id,请检查商品地址是否正确']);
        }

        if (preg_match("/<span class=\"g-n-goods-title\"><span class=\"enable-select\">([^<]*)<\\/span><\\/span>/", $html, $matches)) {
            $data['goods_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址获取不到goods_name,请检查商品地址是否正确']);
        }

        if (preg_match('/(?<="skuID":)\d+/', $html, $matches)) {
            $data['sku_id'] = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址获取不到sku_id,请检查商品地址是否正确']);
        }

        if (preg_match('/"normalPrice":"(\d+)"/', $html, $matches)) {
            $data['normal_price'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址获取不到normal_price,请检查商品地址是否正确']);
        }

        if (preg_match('/"mallName":"([^"]*?)"/', $html, $matches)) {
            $data['stores_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址获取不到店铺名,请检查商品地址是否正确']);
        }

        return $data;
    }

    public static function notify($url, $params=[], $secret='')
    {
      
    
        $sign = Encryption::sign($params, $secret);
        $params['sign'] = $sign;
 
        for ($i = 0; $i < 5; $i++) {
            \Log::record('notify: ' . $params['order_sn'] . ' ' . $url);
             writeLog('请求参数：'.json_encode($params),'notify');
          
            $result = Net::post($url, $params);
            if ($result == 'success') {
                db('orders')->where(['order_sn'=>$params['order_sn']])->update(['notify_status'=>'1']);
            }
            db('orders')->where(['order_sn'=>$params['order_sn']])->update(['notify_time'=>time()]);
            db('orders')->where(['order_sn'=>$params['order_sn']])->setInc('notify_number');
            \Log::record('notify result: ' . $result);
            break;
            if ($result == 'success') {
                \Log::record('notify success');
                break;
            }
        }
    }
  public function writeLog($word, $name = null) {
    if ($name) {
        $dir = '../runtime/log/' . $name;
        if (!file_exists($dir)) { //检查是否有该文件夹，如果没有就创建，并给予最高权限
            mkdir("$dir", 0777, true);
        }
        $logfile = '../runtime/log/' . $name . '/' . date('Y-m-d') . '.txt';
    } else {
        $logfile = '../runtime/log/' . date('Y-m-d') . '.txt';
    }
    if (!file_exists($logfile)) {
        $fp = fopen($logfile, "a+");
        chmod($logfile, 0777);
    } else {
        $fp = fopen($logfile, "a+");
    }
    flock($fp, LOCK_EX);
    fwrite($fp, "执行日期：" . date('Y-m-d H:i:s') . "：" . var_export($word, true) . "\n");
    flock($fp, LOCK_UN);
    fclose($fp);
}

}