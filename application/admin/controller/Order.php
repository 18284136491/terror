<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/11
 * Time: 22:01
 */

namespace app\admin\controller;

use app\common\controller\adminBase;

class Order extends adminBase
{
    public function index()
    {

        // 条件查询
        $map = '1 = 1';
        $post = $this->request->post();
        if($post){
            $time = time();
            $status = $post['status'] ?? '' ?? $post['status'];
            $start = $post['start'] ?? '' ?? strtotime($post['start']);
            $end = $post['end'] ?? '' ?? strtotime($post['end']) + 86399;
            $token = $post['token'] ?? '';

            // 状态查询
            if($status == 1){
                // 未使用
                $map .= ' && time = 0';
                $map .= ' && end_time = 0';
            }elseif($status == 2){
                // 使用中
                $map .= ' && time <= '.$time;
                $map .= ' && end_time >= '.$time;
            }elseif($status == 3){
                // 已使用
                $map .= ' and end_time != 0';
                $map .= ' && end_time <= '.$time;
            }

            // 时间查询
            if($start && $end){
                $map .= ' && time <= ' . $time;
                $map .= ' && end_time >= ' . $time;
            }elseif($end){
                $map .= ' && end_time >= ' . $time;
            }elseif($start){
                $map .= ' && time >=' . $time;
            }

            // 模糊查询
            if($token){
                $map .= ' && token like "%'. $token .'%"';
            }

        }


        print_r($map);
        $data = model('order')->getOrderList($map);
        foreach($data as &$val){
            $val['status'] = time() >= $val['end_time'] ? '已过期' : '未过期';
        }
//        $data = $data->each(function($val, $key){
//            $time = time();
//            if(!$val['time'] && !$val['end_time']){
//                $val['status'] = '未使用';
//            }elseif($val['time'] <= $time && $val['end_time'] >= $time){
//                $val['status'] = '使用中';
//            }else{
//                $val['status'] = '已使用';
//            }
//
//            $val['time'] = $val['time'] ? date('Y-m-d H:i:s',$val['time']) : 0;
//            $val['end_time'] = $val['end_time'] ? date('Y-m-d H:i:s',$val['end_time']) : 0;
//            return $val;
//        });

        $this->assign('list', $data);
        return $this->fetch();
    }



}