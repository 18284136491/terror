<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/5/3
 * Time: 22:29
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Media extends Controller
{
    public function index()
    {

        $map = '';
        $map = 'status = 1';
        $data = Db::name('media')->where($map)->limit(10)->select();

        $this->assign('list', $data);
        return $this->fetch();
    }

    public function add()
    {
        $files = $this->request->file();
        $request = $this->request->post();
        if($files){
            $data = [];
            foreach($files as $type=>$file){
                // 移动到框架应用根目录/uploads/ 目录下

                if($type == 'pic'){
                    $validata = ['ext'=>'jpg,jpeg,gif,png'];
                    $filePath = config('_picPath');
                    $fileDir = 'img/';
                }else{
                    $validata = ['ext'=>'mp3'];
                    $filePath = config('_musicPath');
                    $fileDir = 'music/';
                }
                $validata = [];

                $fileName = md5($file->getInfo()['name']);// 文件名
                $info = $file->validate($validata)->move( $filePath, $fileName);
                if($info){
                    // 文件名
                    $data[] = $fileDir.$info->getFilename();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }

            if(!$data[0] || !$data[1]){
                return ['code' => 1, 'msg' => '上传失败'];
            }

            $datas = [
//                'name' => $request['name'],
//                'content' => $request['content'],
//                'type' => $request['type'],
                'img' => $data[0],
                'music' => $data[1],
                'status' => 1
            ];
            print_R($datas);
            die;
        }

        return $this->fetch();
    }
}