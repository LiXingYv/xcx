<?php

namespace app\api\model;

use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden=['id','img_id','banner_id','update_time','delete_time'];
    //1对1关联
    public function img(){
        return $this->belongsTo('Image','img_id','id');
    }
}
