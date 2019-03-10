<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/15
 * Time: 20:12
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $errorCode = 10000;
}