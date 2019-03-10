<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/10
 * Time: 20:59
 */

namespace app\api\validate;

use app\api\validate\BaseValidate;

/**
 * Class IDMustBePostiveInt
 * @package app\api\validate
 * 判断id是否是正整数
 */
class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];
    protected $message=[
        'id' => 'id必须是正整数'
    ];
}