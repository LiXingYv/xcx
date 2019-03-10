<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/10
 * Time: 20:29
 */

namespace app\api\validate;

use think\Validate;

class TestValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:10',
        'email' => 'email'
    ];
}