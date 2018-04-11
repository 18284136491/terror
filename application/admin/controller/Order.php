<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/11
 * Time: 22:01
 */

namespace app\admin\controller;

use app\common\controller\adminBase;

class Order extends adminBase
{
    public function index()
    {

        return $this->fetch();
    }



}