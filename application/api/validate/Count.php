<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/25
 * Time: 22:38
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}