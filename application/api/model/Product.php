<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/23
 * Time: 21:51
 */

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = [
        'delete_time','main_img_id','pivot','from','category_id','create_time','update_time'
    ];

    public function getMainImgUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }

    public function imgs(){//1对多
        return $this->hasMany('ProductImage','product_id','id');
    }

    public function properties(){
        return $this->hasMany('ProductProperty','product_id','id');
    }

    public static function getMostRecent($count){
        $products = self::limit($count)
            ->order('create_time desc')
            ->select();
        return $products;
    }

    public static function getProductsByCategoryID($id){
        $products = self::where('category_id','=',$id)
            ->select();
        return $products;
    }

    public static function getProductDetail($id){
//        $products = self::with('imgs.imgUrl,properties')
//            ->find($id);
        $products = self::with([
            'imgs' => function($query){
                $query->with(['imgUrl'])
                    ->order('order','asc');
            }
        ])
            ->with(['properties'])
            ->find($id);
        return $products;
    }
}