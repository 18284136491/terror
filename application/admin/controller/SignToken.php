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
        return $this->fetch();
    }

    /**
     * start [开始]
     *
     * Author dear
     * @param \think\Request $request
     */
    public function start(\think\Request $request)
    {

        // 验证token和key
        $this->paramCheck($request->param());

        $map = '';
        $map = 'status = 1';
        $data = Db::name('commodity')->where($map)->order('rand()')->limit(10)->select();
        $count = Db::name('commodity')->where('status', 1)->count();

        $res = [
            'code' => 200,
            'data' => $data,
            'count' => $count
        ];

        return $res;
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