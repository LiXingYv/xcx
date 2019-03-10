<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/11
 * Time: 21:12
 */

namespace app\api\model;


class ProductProperty extends BaseModel
{
    protected $hidden = ['product_id','delete_time','id'];
}