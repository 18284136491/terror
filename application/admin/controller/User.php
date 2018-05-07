<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/11
 * Time: 23:10
 */

namespace app\admin\controller;


use app\common\controller\AdminBase;

class User extends AdminBase
{

    public function index()
    {

        return $this->fetch();
    }

}