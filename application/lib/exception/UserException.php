<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/12
 * Time: 19:37
 */

namespace app\lib\exception;


class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户不存在';
    public $errorCode = 60000;
}