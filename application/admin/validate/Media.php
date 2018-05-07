<?php
namespace app\common\validate;

use think\Validate;

class Media extends Validate
{
    protected $rule = [
        'title|标题'  => 'require|alphaDash|length:4,20',
        'type|类型'  => 'require|number|length:1',
        'content|描述内容'  => 'require|chsAlphaNum',
        'status|是否启用'  => 'require|number|length:1',
    ];

    protected $message = [
        ''  =>  '',
    ];

    protected $scene = [
        'add'   =>  ['name','type','content','status'],
        'edit'  =>  ['id','username','nickname','roleid','password','repassword','status'],
        'infoedit'  =>  ['id','username','nickname','password','repassword'],
    ];
}