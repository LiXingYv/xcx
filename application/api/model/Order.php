<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/18
 * Time: 20:03
 */

namespace app\api\model;


class Order extends BaseModel
{
    protected  $hidden = ['user_id','delete_time','update_time'];
    protected $autoWriteTimestamp = true;
//    protected $createTime = 'create_timestamp';//自定义时间戳字段名

    public function getSnapItemsAttr($value){
        if(empty($value)){
            return null;
        }
        return json_decode($value);
    }

    public function getSnapAddressAttr($value){
        if(empty($value)){
            return null;
        }
        return json_decode($value);
    }

    public static function getSummaryByUser($uid, $page = 1, $size=15){
//        Paginator::
        $pagingData = self::where('user_id','=',$uid)
            ->order('create_time desc')
            ->paginate($size,true,['page'=>$page]);
        return $pagingData;
//        find select;

    }

    public static function getSummaryByPage($page=1,$size=20){
        $pagingData = self::order('create_time desc')
            ->paginate($size,true,['page'=>$page]);
        return $pagingData;
    }
}