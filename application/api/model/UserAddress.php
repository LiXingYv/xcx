<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/12
 * Time: 20:35
 */

namespace app\api\model;


class UserAddress extends BaseModel
{
    protected $hidden = ['id','delete_time','user_id'];
}