<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/26
 * Time: 22:41
 */

namespace app\api\model;


class User extends BaseModel
{
    public function address(){
        return $this->hasOne('UserAddress','user_id','id');
    }

    public static function getByOpenID($openid){
        $user = self::where('openid','=',$openid)
            ->find();
        return $user;
    }


}