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

class Token extends Model
{

    /**
     * getOderList [获取订单列表]
     *
     * @author dear
     * @return array|false|\PDOStatement|string|\think\Collection
     */
    public function getToken($map = '')
    {
        $res = Db::name('token')->order('status,time desc')->where($map)->select();
        return $res;
    }

    /**
     * addToken [添加token数据]
     *
     * @author dear
     * @param $insData
     * @return int|string
     */
    public function addToken($insData)
    {
        $res = Db::name('token')->insert($insData);
        return $res;
    }


}