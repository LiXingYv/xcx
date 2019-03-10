<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/3/2
 * Time: 19:08
 */

namespace app\api\behavior;


class CORS
{
    public function appInit(&$params){
        //跨域解决办法
        header('Access-Control-Allow-Origin: *');//允许所有域访问
        header("Access-Control-Allow-Headers: token,Origin, X-Requested-With, Content-Type, Accept");//允许携带的键值对
        header('Access-Control-Allow-Methods: POST,GET');
        if(request()->isOptions()){
            exit();
        }
    }
}