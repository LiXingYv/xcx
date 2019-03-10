<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/5
 * Time: 21:02
 */

namespace app\lib\exception;


class TokenException extends BaseException
{
    public $code = 401;
    public $msg = 'Token已过期或无效Token';
    public $errorCode = 10001;
}