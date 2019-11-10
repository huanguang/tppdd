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
            throw new PinduoduoException(['msg' => '商品地址['.$goods_url.']格式错误']);
        }
		unset($userModel);
        $userModel = new UserModel();

        $user = $userModel->match(0);

        if (! $user) {
            throw new PinduoduoException(['msg' => '没匹配到有效账号,请先添加账号']);
        }
		unset($mobileClient);
        $mobileClient = new MobileClient($user);
        $html = $mobileClient->goods_detial($goods_id);

        $data = [
            'goods_id' => $goods_id
        ];
        if (preg_match('/(?<="groupID":)(\d+)/', $html, $matches)) {
            $data['group_id'] = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到group_id,请检查商品地址是否正确']);
        }

        if (preg_match("/<span class=\"_1fdrZL9O\"><span class=\"enable-select\">([^<]*)<\\/span><\\/span>/", $html, $matches)) {
            $data['goods_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到goods_name,请检查商品地址是否正确']);
        }

        if (preg_match('/(?<="skuID":)\d+/', $html, $matches)) {
            $data['sku_id'] = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到sku_id,请检查商品地址是否正确']);
        }

        if (preg_match('/"normalPrice":"(\d+)"/', $html, $matches)) {
            $data['normal_price'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到normal_price,请检查商品地址是否正确']);
        }

        if (preg_match('/"mallName":"([^"]*?)"/', $html, $matches)) {
            $data['stores_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址['.$goods_url.']获取不到店铺名,请检查商品地址是否正确']);
        }

        return $data;
    }


  public static function getGoods2($user,$goods_url, $c_id)
    {
        if (preg_match('/(?<=goods_id=)\d+/', $goods_url, $matches)) {
            $goods_id = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '商品地址['.$goods_url.']格式错误']);
        }
        unset($mobileClient);
        $mobileClient = new MobileClient($user);
        $html = $mobileClient->goods_detial($goods_id);
        dump($html);die;
        $data = [
            'goods_id' => $goods_id
        ];
        if (preg_match('/(?<="groupID":)(\d+)/', $html, $matches)) {
            $data['group_id'] = $matches[0];
        } else {
            echo $html;
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到group_id,请检查商品地址是否正确']);
        }

        if (preg_match("/<span class=\"_1fdrZL9O\"><span class=\"enable-select\">([^<]*)<\\/span><\\/span>/", $html, $matches)) {
            $data['goods_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到goods_name,请检查商品地址是否正确']);
        }

        if (preg_match('/(?<="skuID":)\d+/', $html, $matches)) {
            $data['sku_id'] = $matches[0];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到sku_id,请检查商品地址是否正确']);
        }

        if (preg_match('/"normalPrice":"(\d+)"/', $html, $matches)) {
            $data['normal_price'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址<span style="color: red;font-size: 20px;">'.$goods_url.'</span>获取不到normal_price,请检查商品地址是否正确']);
        }

        if (preg_match('/"mallName":"([^"]*?)"/', $html, $matches)) {
            $data['stores_name'] = $matches[1];
        } else {
            throw new PinduoduoException(['msg' => '您提供的地址['.$goods_url.']获取不到店铺名,请检查商品地址是否正确']);
        }

        return $data;
    }
	

  public static function notify($url, $params=[], $secret='')
    {
        $sign = Encryption::sign($params, $secret);
        $params['sign'] = $sign;
        for ($i = 0; $i < 2; $i++) {
            \Log::record('notify: ' . $params['order_sn'] . ' ' . $url);
            $result = Net::post($url, $params);
          	file_put_contents('request.txt', date('Y-m-d H:i:s')."=======订单号".$params['api_order_sn']."\n".$result."\n",FILE_APPEND);
            if ($result == 'success') {
                db('orders')->where(['order_sn'=>$params['order_sn']])->update(['notify_status'=>'1']);
            }else{
              db('orders')->where(['order_sn'=>$params['order_sn']])->update(['notify_status'=>'2']);
            }
          	db('orders')->where(['order_sn'=>$params['order_sn']])->update(['notify_time'=>time(),'is_notify'=>'1']);
            db('orders')->where(['order_sn'=>$params['order_sn']])->setInc('notify_number');
            \Log::record('notify result: ' . $result);
            break;
            if ($result == 'success') {
                \Log::record('notify success');
                break;
            }
        }
    }


}
