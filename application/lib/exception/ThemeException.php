<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/25
 * Time: 19:35
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '请求的主题不存在';
    public $errorCode = 30000;

}