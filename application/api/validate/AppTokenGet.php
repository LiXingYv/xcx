<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/3/2
 * Time: 11:39
 */

namespace app\api\validate;


class AppTokenGet extends BaseValidate
{
    protected $rule = [
        'ac' => 'require|isNotEmpty',
        'se' => 'require|isNotEmpty'
    ];
}