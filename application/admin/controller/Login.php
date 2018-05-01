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
    public function index(Request $request)
    {
        if($request->ispost()){
            // 检查环境
            if(!checkRedis()){
                return ['code' => 1, 'msg' => 'Cache未启用'];
            }

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
}
