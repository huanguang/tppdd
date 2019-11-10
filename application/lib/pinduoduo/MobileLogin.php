<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/2
 * Time: 11:56 PM
 */

namespace app\lib\pinduoduo;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * 移动端登录
 * Class MobileLogin
 * @package app\lib\pinduoduo
 */
class MobileLogin extends PinduoduoBase
{


    protected static $is_command = false;

    /**
     * 手机验证码登录
     * @param $mobile 手机号码
     * @param $code 验证码
     * @return mixed
     */
    public static function login($mobile, $code)
    {
        $params = [
            'app_id'=> 5,
            //'anti_content'=> '0aoAfxndmscYY9TMko0v42i9DUvG1FSLDzN75OdgES4tkZYS0EShU7jAVlDjsL6u-Zp9yR0fR9hZ0RCoSYD_G2BvtzS_gZInNGHAjNBDyS9C030COEX66wztJ9iPMVRlr-GeD86wXpDYQItsv9Y2vSQLyDGXgh1h72eyxfh9NIr2fHSzJ2UW7r1gTsKg6ySd4UkD0iTN-oOLkQoAhOhRLpWj-iyY7q3P3LIJKsVe4fXd13hCMojbNs_3gaUwZK-_kL6ueEiMKEZ3qvmqAbIyF4i3a_x7W4xgM-TRKfKNI0UdyblZ-0Bf8-TmmyiUcTwQNmHiHuQgH-iZpBjf1D5jO5j4GzPkYR3or6fCWc3lMBh41IrTI0NyJ0AaTGDvRaL0u-rutAEJX-HW9Oo23zapXFpJ4D9sUIJQzPLytdlKH_VfhkHhmcuQBG2GwpGO0m9L1XHv_YkwebIgrPHTUa-dVJxoO-dElqeKghC2F1oyU1zu_0G25KWnXWN9COdriaPIfXY0Ta6ajKMGfXwebv3QsfnIlnNuWaxpX-ljZitFPNbAf5dV-lLcU8vqcBqYuBG7pvnbFoNJBocuOw2GBRg0uWdHzJLI1u8QWdY-9eFrFHscjVvuWoZrMaMfQq4sqJAGWq2V6veqnLTERDllL7xb3rE07U-jmh3hNUR9zdJY_s',
            'mobile'=> $mobile,
            'code'=> $code
        ];
//        $headers = ['Content-Type' => 'application/json'];
//        $body =json_encode($params, JSON_UNESCAPED_UNICODE);
//        $request = new Request('POST', 'https://api.pinduoduo.com/login', $headers, $body);
//        dump($request->getHeaders());die;
//        $client =new Client();
//        $api='https://mobile.yangkeduo.com/proxy/api/login?pdduid=0';
//        $response=$client->request('POST',$api,[
//            'body'=>json_encode($params, JSON_UNESCAPED_UNICODE),
//            'headers' => [
//                'Content-type'=> 'application/json;charset=UTF-8']
//
//        ]);
//        dump($response);die;
//        $response= $client ->post($api);
//        $Client = new Client();
//        $res = $Client->request('POST', 'https://api.pinduoduo.com/login', ['body' => json_encode($params, JSON_UNESCAPED_UNICODE),'']
//        );
//        $client = new \GuzzleHttp\Client(['verify' => false]);
//        $res = $client->request('POST', 'https://api.pinduoduo.com/login', [
////            'proxy' => [
////                'http'  => 'tcp://localhost:8125', // Use this proxy with "http"
////                'https' => 'tcp://localhost:9124', // Use this proxy with "https",
////                'no' => ['.mit.edu', 'foo.com']    // Don't use a proxy with these
////            ],
//            'body'=>json_encode($params, JSON_UNESCAPED_UNICODE),
//            'headers'=>['Content-Type'=>'application/json','User-Agent' => 'Mozilla/5.0(Windows;U;Windows NT 5.1;en-US;rv:0.9.4)','Referer'=>'http://api.pinduoduo.com/login']
//        ]);
        //echo $res->getStatusCode();
//        echo $res->getStatusCode();
        $result = Net::post(
            Constant::login_url(),
            json_encode($params, JSON_UNESCAPED_UNICODE),
            [
                'Content-Type:application/json;charset=UTF-8',
//                'Referer: http://mobile.yangkeduo.com/login.html?from=http%3A%2F%2Fmobile.yangkeduo.com%2Fpersonal.html%3Frefer_page_name%3Dindex%26refer_page_id%3D10002_1573038462473_AFCRG7UsR7%26refer_page_sn%3D10002&refer_page_name=personal&refer_page_id=10001_1573038466040_grvwoJBGaL&refer_page_sn=10001',

            ]
        );
        return self::check_result($result, true);
    }

}