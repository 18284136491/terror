<?php

namespace app\index\controller;

class Token extends \think\Controller
{
    public function initialize()
    {
        $this->crossDomain();// 允许跨域
    }

    /**
     * getToken [获取token]
     *
     * author dear
     * @param \think\Request $request
     * @return string
     */
    public function getToken(\think\Request $request) : string
    {
        checkRedis();// 环境验证

        $param = $this->request->param();
        // 参数验证
        if(!$param['machine_model'] || !$param['access_type'] || !$param['key'] || !$param['sign']){
            $result = ['code' => 10031, 'msg' => '参数错误'];
            response($result);
        }

        // 签名数据
        $check_data = [
            'machine_model' => $param['machine_model'],
            'access_type' => $param['access_type'],
            'key' => config('_originalKey')
        ];

        // 签名验证
        if(!checkSign($check_data, $param['sign'])){
            $result = ['code' => 10032, 'msg' => '签名错误'];
            response($result);
        };

        // token生成
//        $token = \Ramsey\Uuid\Uuid::uuid4()->toString();
        $token = getUuid();

        $key = uniqid();
        $data = [
            'uid' => 0,
            'machine_model' => $param['machine_model'],
            'access_type' => $param['access_type'],
            'key' => $key,
            'ip' => $request->ip(),
        ];
        \Cache::set($token, json_encode($data), config('_tokenExpiration'));
        $result = [
            'token' => $token,
            'key' => $key
        ];
        return json_encode(['code' => 200, 'msg' => '操作成功', 'data' => $result]);
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
}
