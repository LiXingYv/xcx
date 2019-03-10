<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/14
 * Time: 19:12
 */

namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends BaseModel
{
//    protected $table = '';//对应的表名；默认用类名对应
    protected $hidden = ['update_time','delete_time'];
    //关联函数
    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }

    public static function getBannerByID($id){
        /**原生sql方式**/
        //$result = Db::query('select * from banner_item where banner_id=?',[$id]);
        /**查询构造器方式**/
        //where('字段名','表达式','查询条件');//where的表达式法
        //;//where的数组法
        //where(function($query) use ($id){$query->where('banner_id','=',$id)});//where的闭包法
//        $result = Db::table('banner_item')
//            ->where('banner_id','=',$id)
//            ->select();//最后调用的方法是查询方法，前面的为辅助方法（链式方法），不相同的辅助方法没有前后顺序的限制，其他查询方法还有find(),update(),delete(),insert(),只有查询方法是真正的去查询数据库
//        $result = Db::table('banner_item')
//            ->fetchSql()//得到sql语句
//            ->where('banner_id','=',$id)
//            ->select();
//        return $result;
        /**ORM方式**/
        //模型关联
        $banner = self::with(['items','items.img'])
            ->find($id);
        return $banner;
    }
}