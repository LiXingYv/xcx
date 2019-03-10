<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/14
 * Time: 19:39
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;

}