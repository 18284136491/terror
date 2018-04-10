<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/8
 * Time: 22:05
 */

namespace app\admin\controller;

use app\common\controller\adminBase;

class Index extends adminBase
{
    public function index()
    {

        // 菜单数据
        $menuData = arrayToTree(model('Menu')->getMenu());

        $this->assign('menu', $menuData);
        return $this->fetch();
    }

}