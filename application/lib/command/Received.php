<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/6
 * Time: 3:09 AM
 */

namespace app\lib\command;


use app\lib\exception\PinduoduoException;
use app\lib\pinduoduo\MobileClient;
use app\system\model\Orders;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\Exception;

class Received extends Command
{
    protected function configure()
    {
        $this->setName('Received')->setDescription('Here is Received');
    }

    public function execute(Input $input, Output $output)
    {
        $page = 1;
        while (true) {

            $list = Orders::with('User')->where(['status' => [Orders::UNSHOPING, Orders::UNRECEIVED]])->order('id', 'desc')->page($page)->limit(50)->select();
            if ($list->isEmpty()) break;
            foreach ($list as $order) {
                unset($orderModel);
                $orderModel = new Orders();
                $newOrder = $orderModel->getAndUpdateOrderByOrderSN($order->order_sn, true);
              	echo "\n订单号:".$order->order_sn."\n";
              	dump($newOrder);
                //file_put_contents("address_order.txt","\n订单号:".$order->order_sn,FILE_APPEND);
                //file_put_contents("address_order.txt","\n返回数据:".var_export($newOrder,true),FILE_APPEND);
                if ($newOrder->status == Orders::UNRECEIVED) {
                    $mobileClient = new MobileClient($newOrder, true);
                    \Log::record('received: ' . $newOrder->order_sn);
                    try {
                        $mobileClient->received($newOrder->order_sn);
                        \Log::record('received success');
                        $orderModel->getAndUpdateOrderByOrderSN($order->order_sn, true);
                    } catch (PinduoduoException $e) {
                        \Log::record('received fail');
                    }
                }
            }

            sleep(1);
            $page++;
        }
    }
}