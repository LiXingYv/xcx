<?php
/**
 * Created by PhpStorm.
 * User: Lee
 * Date: 2019/1/8
 * Time: 22:22
 */

namespace app\sample\controller;

use think\Request;

class Test
{
    //获取变量方法1
    /*public function hello($id,$name,$age){
        echo $id;
        echo $name;
        echo $age;
    }*/
    //获取变量方法2
    /*public function hello(){
        //param方法不区分请求类型
        $id = Request::instance()->param('id');
        $name = Request::instance()->param('name');
        $age = Request::instance()->param('age');
        echo $id;
        echo $name;
        echo $age;
    }*/
    //获取变量方法3
    /*public function hello(){
        //param方法不区分请求类型
        $all = Request::instance()->param();
        var_dump($all);
        $getAll = Request::instance()->get();//只获取get的参数
        var_dump($getAll);
        $postAll = Request::instance()->get();//只获取post的参数
        var_dump($postAll);
        $routeAll = Request::instance()->route();//只获取路由中的参数
        var_dump($routeAll);
    }*/
    //获取变量方法4
    public function hello(){
        //使用助手函数获取
        $all = input('param.');//获取全部
        $age = input('param.age');//获取age
        var_dump($all);
    }
    //知识点依赖注入的方式获取Request对象
    /*public function hello(Request $request){
        $all= $request->param();
    }*/
}