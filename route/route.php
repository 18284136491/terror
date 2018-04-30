<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});


// 后台
Route::get('signtoken', 'admin/sign_token/index');
Route::post('start', 'admin/sign_token/start');



// 前台
Route::post('index', 'index/index/index');
Route::post('gettoken', 'index/token/getToken');// 获取token

Route::post('signup', 'index/login/signup');// 注册
Route::post('sendcode', 'index/login/sendcode');// 发送验证码
Route::post('signin', 'index/login/signin');// 登录

Route::post('memberinfo', 'index/member/getmemberinfo');// 获取用户信息
Route::post('signout', 'index/member/signout');// 退出登录

