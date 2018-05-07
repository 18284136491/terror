<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/15
 * Time: 1:30
 */

namespace app\admin\controller;

use app\common\controller\AdminBase;

class Token extends AdminBase
{

    public function index()
    {
        $data = model('token')->getToken();
        foreach($data as &$val){
            $val['status'] = $val['status'] ? '已使用' : '未使用';
        }

        $this->assign('list', $data);
        return $this->fetch();
    }

    /**
     * add [token生成]
     *
     * @author dear
     * @return array
     */
    public function add()
    {
        // token生成
        $token = getUuid();

        $key = uniqid();
        $data = [
            'key' => $key,
            'ip' => null,
        ];
        $url = config('_signtoken') . 'token/' . $token . '/key/' . $key;

        \Cache::set($token, json_encode($data));

        $result = [
            'token' => $token,
            'key' => $key
        ];

        // 入库操作
        $insData = [
            'token' => $token,
            'key' => $key,
            'url' => $url,
            'status' => 0,
            'time' => time(),
        ];
        $insRes = model('token')->addToken($insData);
        if(!$insRes){
            return ['code' => 1, 'msg' => '操作失败'];
        }
        return ['code' => 200, 'msg' => '操作成功', 'data' => $result];
    }

}