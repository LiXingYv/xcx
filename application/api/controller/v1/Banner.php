<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/9
 * Time: 22:23
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id banner的id号
     */
    /*public function getBanner($id){
        $data = [
            'name' => 'vendor111111',
            'email' => 'vendorqq.com'
        ];

        //独立验证
//        $validate = new Validate([
//            'name' => 'require|max:10',
//            'email' => 'email'
//        ]);

        //验证器
        $validate = new TestValidate();

//        $result = $validate->check($data);//单个验证
        $result = $validate->batch()->check($data);//批量验证
        var_dump($validate->getError());
    }*/
    public function getBanner($id){
        //AOP面向切面编程
        (new IDMustBePostiveInt())->goCheck();
//        $banner = BannerModel::with(['items','items.img'])->find($id);
//        $banner = BannerModel::get($id);
        //查询方法：get、find查询的是一条记录，all、select查询的是一组记录，get、all是model类特有的方法，find、select是Db类所有的方法，但是model是可以使用find和select的
        $banner = BannerModel::getBannerByID($id);
//        $banner->hidden(['update_time']);//隐藏一部分字段
        if(!$banner){
            throw new BannerMissException();
        }
        return $banner;
//        return json($banner);
    }
}