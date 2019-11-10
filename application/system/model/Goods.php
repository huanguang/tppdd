<?php
/**
 * Created by PhpStorm.
 * User: yin
 * Date: 2019/5/3
 * Time: 9:17 PM
 */

namespace app\system\model;


use app\lib\pinduoduo\MobileClient;
use think\model\concern\TimeStamp;
use think\Facade\Cache;


class Goods extends BaseModel
{
    public function admin()
    {
        return $this->belongsTo('SystemUser', 'admin_uid')->bind(['nick']);
    }

    public function stores()
    {
        return $this->belongsTo('Stores', 'stores_id')->bind(['stores_name' => 'name']);
    }

    /**
     * 匹配商品
     */
    public function match($total, $c_id = 0, $user = [])
    {
        $where = [
            'Goods.status' => 1,
            'Goods.is_upper' => 1,
        ];
        if ($c_id) {
            $where['Goods.c_id'] = $c_id;
        }
        $page_size               = 10;
        $goods_list              = self::getAllCache();
        $goods_list_total        =  count($goods_list);
        $goods_list_page_num     = ceil($goods_list_total / $page_size);
        $goods_list_page_num_arr = array_unique(range(0,$goods_list_page_num - 1));
        while ($goods_list_page_num_arr) {
            $page = array_rand($goods_list_page_num_arr);
            $list_index = range( ($page * $page_size), ($page * $page_size + $page_size) );
            $list = [];
            foreach ($list_index as $index){
                if(isset($goods_list[$index])){
                    $list[] = $goods_list[$index];
                };
            }
            $list = array_values($list);
            if (!$list) {
                break;
            }
            foreach ($list as $goods) {
//                $mobileClient = new MobileClient($user);
//                $html = $mobileClient->goods_detial($goods['goods_id']);
//                //商品已下架不匹配
//                if (preg_match('/"statusExplain":"原商品已下架，为你推荐相似商品"/', $html)) {
//                    $goods['is_upper'] = 0;
//                    $this->update($goods,['id'=>$goods['goods_id']]);
//                    \Log::record(sprintf('[goods match] 商品已下架 [goods_id] %d', $goods['goods_id']), 'error');
//                    continue;
//                }
//
                //商品价格不整除，不匹配
                if ($total % $goods['normal_price'] != 0) {
                    \Log::record(sprintf('[goods match] 价格不整除 total=%d normal_price=%d', $total, $goods['normal_price']), 'match');
                    continue;
                }

                //超出店铺限额，不匹配
                $stores = $goods['stores'];
                if ($stores['store_remain_total'] > 0) {
                    if ($total > ($stores['store_remain_total'] - $stores['cur_total'])) {
                        \Log::record(sprintf('[goods match] 店铺限额 [stores_id] %d [store_remain_total] %f [cur_total] %f', $stores->id, $stores->store_remain_total, $stores->cur_total), 'match');
                        continue;
                    }
                }

                //店铺禁用不匹配
                if ($stores['status'] == 0) {
                    \Log::record(sprintf('[goods match] 店铺禁用 [stores_id] %d', $stores['id']), 'match');
                    continue;
                }
//
//                $goods['last_use_time'] = time();
//                $this->update($goods,['id'=>$goods['goods_id']]);
                return $goods;
            }
            unset($goods_list_page_num_arr[$page]);
        }
        die;
    }

    public function goods_match($goods_id,$c_id = 0)
    {
//        $goods_list              = self::getAllCache();
//        if($goods_list){
//            foreach ($goods_list as $goods){
//                if($goods['id'] == $goods_id && $goods['c_id'] == $c_id){
//                    return $goods;
//                }
//            }
//        }
          return $this->where('is_upper',1)->where('status','1')->where('id',$goods_id)->where('c_id',$c_id)->find();

//        return false;
    }


    /**
     * 缓存所有的用户信息
     */
    public static function setAllCache(){
        $where = [
            'Goods.status' => 1,
            'Goods.is_upper' => 1,
        ];
        $goods_list = self::hasWhere('stores', ['Stores.status' => 1])
            ->where('Stores.cur_total < Stores.store_remain_total')
            ->where($where)
            ->order('Goods.last_use_time', 'asc')
            ->select();
        Cache::set('goods_all_cache',$goods_list);
        return $goods_list;
    }

    public static function getAllCache(){
        $goods_list =  Cache::get('goods_all_cache');
        if(!$goods_list){
            $goods_list = self::setAllCache();
        }
        return $goods_list;
    }




}