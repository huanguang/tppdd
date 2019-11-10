<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/6
 * Time: 3:09 AM
 */

namespace app\lib\command;

use app\system\model\Goods as GoodsModel;
use app\lib\exception\PinduoduoException;
use app\lib\pinduoduo\MobileClient;
use think\Facade\Cache;
use think\Exception;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class UpdGoodsStatus extends Command
{
    protected function configure()
    {
        $this->setName('UpdGoodsStatus')->setDescription('Here is the UpdGoodsStatus');
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
            foreach ($list as $goods) {
                unset($mobileClient);
                $mobileClient = new MobileClient($goods);
                $html = $mobileClient->goods_detial($goods->goods_id);
                //商品已下架不匹配
                if (preg_match('/"statusExplain":"原商品已下架，为你推荐相似商品"/', $html)) {
                    $goods->is_upper = 0;
                    $goods->last_use_time = time();
                    $goods->save();
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