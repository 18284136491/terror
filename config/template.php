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

// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

// 获取入口目录
$base_file = request()->baseFile();
$base_dir  = substr($base_file, 0, strripos($base_file, '/') + 1);
define('PUBLIC_PATH', $base_dir. '');
return [
    // 模板引擎类型 支持 php think 支持扩展
    'type'         => 'Think',
    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写
    'auto_rule'    => 1,
    // 模板路径
    'view_path'    => '',
    // 模板后缀
    'view_suffix'  => 'html',
    // 模板文件名分隔符
    'view_depr'    => DIRECTORY_SEPARATOR,
    // 模板引擎普通标签开始标记
    'tpl_begin'    => '{',
    // 模板引擎普通标签结束标记
    'tpl_end'      => '}',
    // 标签库标签开始标记
    'taglib_begin' => '{',
    // 标签库标签结束标记
    'taglib_end'   => '}',
    // 视图输出字符串内容替换
    'tpl_replace_string' => [
        // 静态资源目录
        '__STATIC__'    => PUBLIC_PATH. 'static',
        // H+框架静态资源目录
        '__LAYER__'    => PUBLIC_PATH. 'static/layer',
        // H+框架静态资源目录
        '__HPLUSSTATIC__'    => PUBLIC_PATH. 'static/Hplus-v.4.1.0',
        // 文件上传目录
        '__UPLOADS__'   => PUBLIC_PATH. 'uploads',
        // JS插件目录
        '__LIBS__'      => PUBLIC_PATH. 'static/Hplus-v.4.1.0/libs',
        // 后台CSS目录
        '__ADMIN_CSS__' => PUBLIC_PATH. 'static/Hplus-v.4.1.0/admin/css',
        // 后台JS目录
        '__ADMIN_JS__'  => PUBLIC_PATH. 'static/Hplus-v.4.1.0/admin/js',
        // 后台IMG目录
        '__ADMIN_IMG__' => PUBLIC_PATH. 'static/Hplus-v.4.1.0/admin/img',
//        // 前台CSS目录
//        '__HOME_CSS__'  => PUBLIC_PATH. 'static/Hplus-v.4.1.0/home/css',
//        // 前台JS目录
//        '__HOME_JS__'   => PUBLIC_PATH. 'static/Hplus-v.4.1.0/home/js',
//        // 前台IMG目录
//        '__HOME_IMG__'  => PUBLIC_PATH. 'static/Hplus-v.4.1.0/home/img',
    ],
];
