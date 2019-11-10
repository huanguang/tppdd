<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/6
 * Time: 3:09 AM
 */

namespace app\lib\command;

use app\system\model\User as UserModel;
use app\lib\exception\PinduoduoException;
use app\lib\pinduoduo\MobileClient;
use think\Facade\Cache;
use think\Exception;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class UpdUserStatus extends Command
{
    protected function configure()
    {
        $this->setName('UpdUserStatus')->setDescription('Here is the UpdUserStatus');
    }

    public function execute(Input $input, Output $output)
    {
        $result  = $this->limitTime();
        if(!$result) return;
        $page = 1;
        while (true) {
          	unset($UserModel);
          	$UserModel = new UserModel();
            $list = $UserModel->page($page)->limit(10)->select();
            if ($list->isEmpty()) break;
            foreach ($list as $user) {
                if ($user->address_id == 0) {
                    $user->expired_limit_noaddr = '<span style="color:red">未填收货地址</span>';
                    //$user->status = 0;
                    $user->is_expired = 2;
                    $user->use_time = time();
                    $user->save();
                    continue;
                }
                unset($mobileClient);
                $mobileClient = new MobileClient($user);
                try {
                    $result = $mobileClient->getaddresstpl(9999);
                    dump($result);
                    $user->expired_limit_noaddr = '<span style="color:green">正常</span>';
                    $user->status = 1;
                    $user->is_expired = 0;
                    $user->use_time = time();
                    $user->save();
                } catch(Exception $e) {
                    if ($e instanceof PinduoduoException) {
                        $user->expired_limit_noaddr = '<span style="color:red">超时</span>';
                        $user->status = 0;
                        $user->is_expired = 1;
                        $user->use_time = time();
                        $user->save();
                    }
                }
            }
            $page++;
        }
    }



    public function limitTime(){
        $hour = intval(date('His'));
        $hours = [20000,40000,60000,80000,100000,120000,140000,160000,180000,200000,220000,240000];
        if(in_array($hour,$hours)){
            return true;
        }
        return false;
    }
}