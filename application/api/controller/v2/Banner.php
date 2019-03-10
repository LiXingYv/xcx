<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/9
 * Time: 22:23
 */

namespace app\api\controller\v2;

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
    public function getBanner($id){
        return 'this is V2 version';
    }
}