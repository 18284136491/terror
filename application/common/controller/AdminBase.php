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
        $this->baseData();// 基础数据赋值
        $this->_init();// 初始化
    }

    /**
     * baseData [基础数据赋值]
     *
     * @author dear
     */
    private function baseData()
    {
        // 检查环境
        if(!checkRedis()){
            $this->error('Cache未启用', url('login/index'));
        }

        // 登录验证
        if(!checkAdminLogin()){
            $this->redirect(url('login/index'));
        }

        // 登录时间增加
        if(!\Cache::setExpire('adminUid'.cookie('userId'), config('_adminExpiration'))){
            return false;
        }

        // 菜单数据
        $menuData = arrayToTree(model('Menu')->getMenu());
        $this->assign('menu', $menuData);
    }

    protected function _init()
    {
    }

}
