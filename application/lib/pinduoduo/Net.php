<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/2
 * Time: 11:52 PM
 */

namespace app\lib\pinduoduo;

/**
 * 网络请求工具
 * Class Net
 * @package app\lib\pinduoduo
 */
class Net
{

    /**
     * 原生post请求
     * @param $url //请求链接
     * @param array $params 请求参数
     * @param array $headers 请求头
     * @param $cookieJar cookie文件
     * @return mixed
     */
    public static function post($url, $params=[], $headers=[], $cookieJar='')
    {
        $ch = curl_init();
        $arrip = [
            '113.65.232.163',
            '12463',
        ];
//        113.65.232.163:12463
//121.32.70.179:17302
//116.22.28.64:42703
//113.65.232.229:13478
//59.42.30.107:44685
//116.22.74.212:39809
//116.22.28.22:18727
//113.109.20.248:51950
//113.65.154.88:30858
//116.22.49.41:12407
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
//        curl_setopt($ch, CURLOPT_PROXYAUTH, CURLAUTH_BASIC); //代理认证模式
//        curl_setopt($ch, CURLOPT_PROXY, "113.65.232.163"); //代理服务器地址
//        curl_setopt($ch, CURLOPT_PROXYPORT, 12463); //代理服务器端口
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
//        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 1);
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        if ($cookieJar) curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**
     * 原生get请求
     * @param $url //请求链接
     * @param array $headers 请求头
     * @param $cookieJar cookie文件
     * @return mixed
     */
    public static function get($url, $headers=[], $cookieJar='')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        if ($cookieJar) curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieJar);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}