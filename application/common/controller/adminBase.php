<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/8
 * Time: 22:15
 */

namespace app\common\controller;

use \think\Controller;

class adminBase extends Controller
{
    public function initialize()
    {
        $this->checkLogin();// 登录验证
        $this->_init();// 初始化
    }


    private function checkLogin()
    {
        // 登录验证
        if(!cookie('userId')){
            $this->redirect(url('login/login'));
        }


    }


    protected function _init()
    {
    }

}
