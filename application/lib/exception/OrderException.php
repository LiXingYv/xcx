<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/17
 * Time: 20:06
 */

namespace app\lib\exception;


class OrderException extends BaseException
{
    public $code = 404;
    public $msg = '订单不存在，请检查ID';
    public $errorCode = 80000;
}