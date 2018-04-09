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
//class Index extends \think\Controller
{
    public function index()
    {
        return $this->fetch();
    }

}