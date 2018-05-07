<?php
/**
 * Created by PhpStorm.
 * User: dear
 * Date: 2018/5/3
 * Time: 22:29
 */

namespace app\admin\controller;

use app\common\controller\AdminBase;
use think\Db;

class Media extends AdminBase
{
    public function index()
    {
        $post = $this->request->post();
        $map = [];
        if($post){
            $type = $post['type'];
            if($type){
                $map[] = ['type.id', 'eq', $type];
            }
        }

        $map[] = ['media.status', 'eq', 1];
        $map[] = ['type.status', 'eq', 1];
        $data = Db::name('media')->field('media.*,type.name typeName')
            ->join('type','media.type = type.id')
            ->where($map)->limit(10)->order('id')->select();

        $typeList = Db::name('type')->where('status', 1)->select();

        $this->assign('typeList', $typeList);
        $this->assign('list', $data);
        return $this->fetch();
    }

    public function add()
    {
        $files = $this->request->file();
        $param = $this->request->post();
        if($param){
            // 参数验证
            $validate = validate('Media');
            $vali_res = $validate->scene('add')->check($param);
            if(!$vali_res){
                return ['code' => 1, 'msg' => $validate->getError()];
            }
            $data = [];
            $data['pic'] = $data['music'] = [];
            if($files){
                foreach($files as $type=>$file){
                    if($type == 'pic'){
                        $validata = ['ext'=>'jpg,jpeg,gif,png'];
                        $filePath = config('_picPath');
                        $fileDir = 'img';
                    }else{
                        $validata = ['ext'=>'mp3'];
                        $filePath = config('_musicPath');
                        $fileDir = 'music';
                    }
                    $validata = [];

                    $fileName = md5($file->getInfo()['name']);// 文件名
                    $info = $file->validate($validata)->move($filePath, $fileName);
                    if($info){
                        // 文件名
                        $data[$type] = $fileDir . '/' .$info->getFilename();
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
            // 上传结果确认
            /*if(!$data ||!$data['pic'] || !$data['music']){
                return ['code' => 1, 'msg' => '请选择文件'];
            }*/

            $insData = [
                'title' => $param['title'],
                'pic' => $data['pic'],
                'music' => $data['music'],
                'type' => $param['type'],
                'content' => $param['content'],
                'status' => $param['status'],
                'time' => time(),
            ];
            $insRes = Db::name('media')->insert($insData);
            if(!$insRes){
                return ['code' => 3, 'msg' => '操作失败，请稍后再试'];
            }
            return ['code' => 200, 'msg' => '操作成功'];
        }

        $typeList = Db::name('type')->where('status', 1)->select();
        $this->assign('typeList', $typeList);
        return $this->fetch();
    }
}