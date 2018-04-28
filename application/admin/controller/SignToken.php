<?php
/**
 * Created by PhpStorm.
 * User: wanghan
 * Date: 2018/4/28
 * Time: 14:19
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class SignToken extends Controller
{
    public function index(\think\Request $request)
    {
        // 验证token和key
        $this->paramCheck($request->param());

        $map = '';
        $map = 'status = 1';
        $data = Db::name('commodity')->where($map)->paginate(1);

        $this->assign('list', $data);
        return $this->fetch();
    }

    /**
     * paramCheck [参数校验]
     *
     * Author dear
     * @param $param
     */
    private function paramCheck($param)
    {
        $data = json_decode(\Cache::get($param['token']), true);

        // 判断token值是否存在
        if(!$data){
            $result = ['code' => '1001', 'msg' => 'token值不存在'];
            response($result);
        }

        if($param['key'] !== $data['key']){
            $result = ['code' => 1002, 'msg' => '签名错误'];
            response($result);
        }
    }



}