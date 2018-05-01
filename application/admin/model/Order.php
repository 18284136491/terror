<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/14
 * Time: 14:27
 */

namespace app\admin\model;

use think\Model;
use think\Db;

class Order extends Model
{

    /**
     * getOderList [获取订单列表]
     *
     * @author dear
     * @return array|false|\PDOStatement|string|\think\Collection
     */
    public function getOrderList($map = '')
    {
        $res = Db::name('order')->order('time desc')->where($map)->select();
        return $res;
    }


}