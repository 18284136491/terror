<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/10
 * Time: 21:40
 */

namespace app\admin\model;

use think\Model;
use think\Db;

class Menu extends Model
{

    /**
     * getMenu [获取菜单]
     *
     * @author dear
     * @return array|false|\PDOStatement|string|\think\Collection
     */
    public function getMenu()
    {
        $menuRes = Db::name('menu')->where("status", 1)->select();
        return $menuRes;
    }




}