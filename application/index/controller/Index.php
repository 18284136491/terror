<?php

namespace app\index\controller;

use \app\common\controller\UserBase;

class Index extends UserBase
{

    public function _init()
    {
    }

    public function index()
    {
        return 'index';
    }



}
