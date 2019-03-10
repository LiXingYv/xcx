<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/2/11
 * Time: 21:08
 */

namespace app\api\model;


class ProductImage extends BaseModel
{
    protected $hidden = ['img_id','delete_time','product_id'];

    public function imgUrl(){//1对1
        return $this->belongsTo('Image','img_id','id');
    }
}