<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/11
 * Time: 22:01
 */

namespace app\admin\controller;

use app\common\controller\AdminBase;

class Order extends AdminBase
{
    public function index()
    {
        // 条件查询
        $map = '1 = 1';
        $data = model('order')->getOrderList($map);
        foreach($data as &$val){
            $val['status'] = time() >= $val['end_time'] ? '已过期' : '未过期';
        }

        $this->assign('list', $data);
        return $this->fetch();
    }



}