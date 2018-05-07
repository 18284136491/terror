<?php
/**
 * Created by PhpStorm.
 * Author: Administrator
 * Date: 2018/3/20
 * Time: 13:55
 */

namespace app\common\behavior;


class Config
{
    public function run()
    {

        config('_pwd', 'weixin520');// 密码加盐

        config('_phoneCodeExpiration', 300);// 短信验证码生存时间

        config('_tokenExpiration', 7200);// token生存时间

        config('_adminExpiration', 1800);// 后台登录过期时间

        config('_originalKey', md5('dears'));// 原始key

        config('_signtoken',$_SERVER['HTTP_HOST'] . PUBLIC_PATH . 'signtoken/');// token生成url前缀地址

        config('_picPath', __ROOTPATH__ . '\\static\\img');// 图片文件上传目录

        config('_musicPath', __ROOTPATH__ . '\\static\\music');// 图片文件上传目录

    }

}
