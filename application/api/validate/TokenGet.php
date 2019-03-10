<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/26
 * Time: 22:23
 */

namespace app\api\validate;


class TokenGet extends BaseValidate
{
    protected $message=[
        'code'=>'没有code无法获取Token'
    ];
    protected $rule = [
        'code'=>'require|isNotEmpty'
    ];
}