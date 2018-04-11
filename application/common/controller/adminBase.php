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
        $this->baseData();// 基础数据赋值
    }

    /**
     * checkLogin [登录验证]
     *
     * @author dear
     */
    private function checkLogin()
    {
        // 登录验证
        if(!cookie('userId')){
            $this->redirect(url('login/login'));
        }
    }

    /**
     * baseData [基础数据赋值]
     *
     * @author dear
     */
    private function baseData()
    {
        // 菜单数据
        $menuData = arrayToTree(model('Menu')->getMenu());
        $this->assign('menu', $menuData);
    }


    protected function _init()
    {
    }

}
