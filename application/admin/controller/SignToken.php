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
use \think\Request;

class SignToken extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    /**
     * start [开始]
     *
     * Author dear
     * @param \think\Request $request
     */
    public function start(Request $request)
    {
        $param = $request->post();
        if(!isset($param['token']) || !isset($param['key'])){
            return json_encode(['code' => 1001, 'msg' => '参数错误']);
        }

        // 验证token和key
        $this->paramCheck($param);

        $map = '';
        $map = 'status = 1';
        $data = Db::name('media')->where($map)->order('rand()')->limit(10)->select();
        $count = Db::name('media')->where('status', 1)->count();

        $res = [
            'code' => 200,
            'data' => $data,
            'count' => $count
        ];
        return $res;
    }


    public function lottery(Request $request)
    {
//        print_r(222222);die;
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
        // 检查cache是否开启
        if(!checkRedis()){
            $result = ['code' => '1001', 'msg' => 'Cache未启用'];
            response($result);
        }

        $data = json_decode(\Cache::get($param['token']), true);

        // 判断token值是否存在
        if(!$data){
            $result = ['code' => '1002', 'msg' => 'token值不存在'];
            response($result);
        }

        if($param['key'] !== $data['key']){
            $result = ['code' => 1002, 'msg' => '签名错误'];
            response($result);
        }

        // 设置过期时间
        if(\Cache::ttl($param['token']) < 0){
            Db::startTrans();
            // 修改token使用状态
            $update['status'] = 1;
            $tokenUp = Db::name('token')->where('token', $param['token'])->update($update);

            $time = time();
            $addData = [
                'order_num' => orderNumber(),
                'token' => $param['token'],
                'time' => $time,
                'end_time' => $time + config('_tokenExpiration'),
            ];
            $orderAdd = Db::name('order')->insert($addData);

            if(!$tokenUp || !$orderAdd){
                Db::rollback();
                $result = ['code' => '1003', 'msg' => '操作失败，请稍后再试'];
                response($result);
            }
            Db::commit();
            \Cache::setExpire($param['token'], config('_tokenExpiration'));
        }
    }



}