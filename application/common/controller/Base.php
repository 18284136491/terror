<?php

namespace app\common\controller;

use \think\Cache;
use think\Db;

class Base extends \think\Controller
{
    public function initialize()
    {
        $this->crossDomain();// 允许跨域
        $this->checkToken();// token验证
        $this->_initialize();// 初始化
    }

    /**
     * crossDomain [允许跨域]
     *
     * author dear
     */
    private function crossDomain()
    {
        header('Access-Control-Allow-Origin:*');
        header('Access-Control-Allow-Methods:GET,POST,OPTIONS');
        header('Access-Control-Allow-Headers:origin,x-requested-with,content-type');
        header('Access-Control-Max-Age:3600');
        header('X-Frame-Options:deny');
    }

    /**
     * checkToken [token验证]
     *
     * @author dear
     */
    private function checkToken()
    {
        // 检查cache是否开启
        if(!checkRedis()){
            $result = ['code' => '1001', 'msg' => 'Cache未启用'];
            response($result);
        }

        $param = $this->request->param();// 获取参数
        // 参数验证
        if(!$param['key'] || !$param['platform'] || !$param['random'] || !$param['token'] || !$param['sign']){
            $result = ['code' => '1000', 'msg' => '非法的请求参数'];
            response($result);
        }

        $data = json_decode(\Cache::get($param['token']), true);

        // 判断token值是否存在
        if(!$data){
            $result = ['code' => '1002', 'msg' => 'token值不存在'];
            response($result);
        }

        // 签名数据
        $check_arr = [
            'platform' => $param['platform'],
            'random' => $param['random'],
            'token' => $param['token'],
            'key' => $data['key']
        ];

        // 签名验证
        if(!checkSign($check_arr,$param['sign'])){
            $result = ['code' => 10032, 'msg' => '签名错误'];
            response($result);
        };

        // token生存时间
        \Cache::set($param['token'], json_encode($data), config('_tokenExpiration'));
    }

    /**
     * _initialize [初始化]
     *
     * author dear
     */
    protected function _initialize()
    {
    }

}
