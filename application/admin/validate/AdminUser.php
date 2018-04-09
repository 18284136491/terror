<?php
namespace app\common\validate;

use think\Validate;

class AdminUser extends Validate
{
    protected $rule = [
        'id'  => 'require|number|length:1,10',
        'username|用户名'  => 'require|alphaNum|length:4,20',
        'nickname|昵称'  => 'require|chsAlphaNum|length:2,10',
        'roleid|所属角色'  => 'require|number|length:1,10',
        'password|密码'  => 'require|alphaNum|length:6,32',
        'repassword|确认密码'  => 'require|alphaNum|confirm:password',
        'status|是否启用'  => 'require|number|length:1',
    ];

    protected $message = [
        ''  =>  '',
    ];

    protected $scene = [
        'login'   =>  ['username', 'password'],
        'add'   =>  ['username','nickname','roleid','password','repassword','status'],
        'edit'  =>  ['id','username','nickname','roleid','password','repassword','status'],
        'infoedit'  =>  ['id','username','nickname','password','repassword'],
    ];
}