<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/15
 * Time: 1:30
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Token extends Controller
{

    public function index()
    {
        $data = model('token')->getToken();
        $data = $data->each(function($val){
            if($val['status'] == 0){
                $val['status'] = '禁用';
            }else{
                $val['status'] = '启用';
            }
            $val['time'] = $val['time'] ? date('Y-m-d H:i:s',$val['time']) : 0;
            return $val;
        });

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
        $token = \Ramsey\Uuid\Uuid::uuid4()->toString();

        $key = uniqid();
        $data = [
            'uid' => 0,
            'key' => $key,
            'ip' => null,
        ];
        $url = $_SERVER['HTTP_HOST'] . PUBLIC_PATH . 'index.php/index/token/' . $token;

//        \Cache::set($token, json_encode($data));

        $result = [
            'token' => $token,
            'key' => $key
        ];

        // 入库操作
        $insData = [
            'token' => $token,
            'key' => $key,
            'url' => $url,
            'status' => 1,
            'time' => time(),
        ];
        $insRes = model('token')->addToken($insData);
        if(!$insRes){
            return ['code' => 1, 'msg' => '操作失败'];
        }
        return ['code' => 200, 'msg' => '操作成功', 'data' => $result];
    }

}