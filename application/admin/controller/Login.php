<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/8
 * Time: 22:24
 */

namespace app\admin\controller;

use think\Controller;
use \think\Request;

class Login extends Controller
{
    /**
     * login [后台用户登录]
     *
     * @author dear
     * @param Request $request
     * @return array|mixed
     */
    public function login(Request $request)
    {
        $this->checkLogin();// 登录验证
        if($request->ispost()){
            $this->environmentAuth();// 检查环境
            $param = $request->post();

            // 参数验证
            $validate = $this->validate($param,'AdminUser.login');
            if(true !== $validate){
                return ['code' => 1, 'msg' => $validate];
            }

            // 用户验证
            $uData = model('member')->usernameFindUserinfo($param['username']);
            if(!$uData){
                return ['code' => 1, 'msg' => '用户不存在'];
            }

            // 秘密验证
            if(!checkPwd($param['password'], $uData['password'])){
                return ['code' => 1, 'msg' => '密码错误'];
            }

            cookie('userId', $uData['id'], config('_tokenExpiration'));// 本地保存用户uid
            \Cache::set('adminUid'.$uData['id'], json_encode($uData), config('_tokenExpiration'));// 服务端保存用户信息
            return ['code' => 200, 'msg' => '操作成功'];
        }

        return $this->fetch();
    }


    /**
     * environmentAuth [环境检查]
     *
     * author dear
     */
    private function environmentAuth()
    {
        // 检查redis是否启用
        try{
            \Cache::get('username');
        } catch(\Exception $e){
            $result = ['code' => '1001', 'msg' => 'Cache未启用'];
            response($result);
        }
    }

    /**
     * checkLogin [登录验证]
     *
     * @author dear
     */
    private function checkLogin()
    {
        // 登录验证
        if(cookie('userId')){
            $this->redirect(url('admin/index/index'));
        }
    }

}