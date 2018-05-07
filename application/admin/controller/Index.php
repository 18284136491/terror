<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/8
 * Time: 22:05
 */

namespace app\admin\controller;

use app\common\controller\AdminBase;

class Index extends AdminBase
{
    public function index()
    {
        return $this->fetch();
    }

    public function index_v1()
    {
        return $this->fetch();
    }

}