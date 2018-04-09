<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/4/9
 * Time: 21:42
 */

namespace app\admin\model;

use think\Model;
use think\Db;

class Member extends Model
{

    /**
     * usernameFindUserinfo [根据用户名查询用户信息]
     *
     * @author dear
     * @param $username
     */
    function usernameFindUserinfo($username)
    {
        $res = Db::name('user')->where('username', $username)->find();
        return $res;
    }




}