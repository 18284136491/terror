<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * resopnse [抛出异常]
 *
 * author dear
 * @param $data
 * @param string $type
 */
function response($data, $type='json')
{
    $response = \think\Response::create($data, $type);
    throw new \think\Exception\HttpResponseException($response);
}

/**
 * checkSin [description]
 *
 * author dear
 * @param $check_data [要验证的数据]
 * @param $sign [原签名]
 */
function checkSign($check_data, $sign)
{
    ksort($check_data);
    $check_data = http_build_query($check_data);
    if(md5($check_data) !== $sign){
        return false;
    }
    return true;
}

/**
 * encryptPwd [密码加密]
 *
 * author dear
 * @param $pwd
 * @return string
 */
function encryptPwd(string $pwd) : string
{
    $res = strtoupper($pwd).config('_pwd');
    return md5($res);
}

/**
 * checkPwd [密码验证]
 *
 * author dear
 * @param $input_pwd
 * @param $pwd
 * @return bool
 */
function checkPwd(string $input_pwd, $pwd) : bool
{
    if(encryptPwd($input_pwd) !== $pwd){
        return false;
    }
    return true;
}

/**
 * arrayToTree [树形化数组]
 *
 * @author dear
 * @param array $data
 * @param string $pid
 * @return array
 */
function arrayToTree(array $data, $pid='0') : array
{
    $res = [];
    foreach($data as $key => $val){
        if($val['pid'] == $pid){
            $val['child'] = arrayToTree($data, $val['id']);
            $res[] = $val;
        }
    }
    return $res;
}
