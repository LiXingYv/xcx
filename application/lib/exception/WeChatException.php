<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/27
 * Time: 15:55
 */

namespace app\lib\exception;


class WeChatException extends BaseException
{
    public $code = 400;
    public $msg = '微信服务器接口调用失败';
    public $errorCode = 999;
}