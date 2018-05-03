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

/**
 * getUuid [生成uuid]
 *
 * author dear
 * @param $input_pwd
 * @param $pwd
 * @return bool
 */
function getUuid(string $prefix='') : string
{
    $str = md5(uniqid(mt_rand(), true));
    $uuid  = substr($str,0,10) . '-';
    $uuid .= substr($str,10,6) . '-';
    $uuid .= substr($str,16,6) . '-';
    $uuid .= substr($str,20);
    return $prefix . $uuid;
}

/**
 * checkRedis [检查cache是否启用]
 *
 * @author dear
 * @return bool
 */
function checkRedis()
{
    // 检查redis是否启用
    try{
        \Cache::get('token');
    } catch(\Exception $e){
        return false;
    }
    return true;
}

/**
 * checkAdminLogin [检查是否登录]
 *
 * @author dear
 * @return bool
 */
function checkAdminLogin()
{
    // 登录验证
    if(!\Cache::get('adminUid'.cookie('userId'))){
        return false;
    }
    return true;
}


function orderNumber()
{//订购日期


    //订单号码主体（YYYYMMDDHHIISSNNNNN）
    $order_id_main = date('YmdHis') . rand(10000,99999);
    //订单号码主体长度
    $order_id_len = strlen($order_id_main);
    $order_id_sum = 0;
    for($i=0; $i<$order_id_len; $i++){
        $order_id_sum += (int)(substr($order_id_main,$i,1));
    }
    //唯一订单号码（YYYYMMDDHHIISSNNNNNCC）
    $orderNum = $order_id_main . str_pad((100 - $order_id_sum % 100) % 100,2,'0',STR_PAD_LEFT);
    return $orderNum;
}


/**
 * arraySequence [二维数组根据字段进行排序]
 *
 * author dear
 * @$array 要排序的数组
 * @$field 排序字段名
 * @$sort 顺序还是倒序
 * @return bool
 */
function arraySequence($array, $field, $sort = 'SORT_DESC')
{
    $arrSort = array();
    foreach ($array as $uniqid => $row) {
        foreach ($row as $key => $value) {
            $arrSort[$key][$uniqid] = $value;
        }
    }
    array_multisort($arrSort[$field], constant($sort), $array);
    return $array;
}

/**
 * xmlToArray [xml转为array]
 *
 * author dear
 * @$xml xml对象
 * @return bool
 */
function xmlToArray($xml){
    //将XML转为array
    $array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
    return $array_data;
}

/**
 * arrayToXml [数组转xml对象]
 *
 * author dear
 * @$xml 数组
 * @return bool
 */
function arrayToXml($arr){
    $xml = "<xml>";
    foreach ($arr as $key=>$val){
        if (is_numeric($val)){
            $xml.="<".$key.">".$val."</".$key.">";
        }else{
            $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
        }
    }
    $xml.="</xml>";
    return $xml;
}

/**
 * bubble_sort [二维数组冒泡排序]
 *
 * author dear
 * @$xml 数组
 * @return bool
 */
function bubble_sort($sort,$a,$type='asc'){//默认为正序排列
    $len = count($a);
    for($i=1;$i<$len;$i++){
        for($j=$len-1;$j>=$i;$j--){
            if($type === 'asc'){
                if($a[$j] < $a[$j-1]){
                    $x=$a[$j];
                    $a[$j]=$a[$j-1];
                    $a[$j-1]=$x;

                    $y = $sort[$j];
                    $sort[$j] = $sort[$j-1];
                    $sort[$j-1] = $y;
                }
            }else{
                if($a[$j] > $a[$j-1]){
                    $x=$a[$j];
                    $a[$j]=$a[$j-1];
                    $a[$j-1]=$x;

                    $y = $sort[$j];
                    $sort[$j] = $sort[$j-1];
                    $sort[$j-1] = $y;
                }
            }
        }
    }
    return $sort;
}


