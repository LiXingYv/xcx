<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/19
 * Time: 21:01
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\service\WxNotify;
use app\api\validate\IDMustBePostiveInt;
use app\api\service\Pay as PayService;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id=''){
        (new IDMustBePostiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function redirectNotify(){
        $notify = new WxNotify();
        $notify->Handle();
    }

    public function receiveNotify(){
        //微信支付回调通知频率为15/15/30/180/1800/1800/1800/1800/3600,单位：秒

        //1.检查库存量，超卖
        //2.更新这个订单的status状态
        //3.减库存
        //如果成功处理，我们返回微信成功处理的信息，否则，我们需要返回没有成功处理

        //特点：post；xml格式；不会携带参数

        $notify = new WxNotify();
        $notify->Handle();

        //通过转发的方式做断点调试
//        $xmlData = file_get_contents('php://input');
//        $result = curl_post_raw('http://localhost:82/api/v1/pay/re_notify?XDEBUG_SESSION_START=12400',$xmlData);
//        return $result;
    }
}