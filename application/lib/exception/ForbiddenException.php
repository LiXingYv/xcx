<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/12
 * Time: 21:28
 */

namespace app\lib\exception;


class ForbiddenException extends BaseException
{
    public $code = 403;
    public $msg = '权限不够';
    public $errorCode = 10001;
}