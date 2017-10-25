<?php
/**
 * Created by PhpStorm.
 * User: struggleme
 * Date: 2017/10/18
 * Time: 23:29
 */
namespace app\admin\controller;
//导入系统控制器类
use \think\Controller;
//导入Request类
use \think\Request;
//导入Db类
use \think\Db;
class Plan extends Controller{
    public function index(){

            //查询plan_con表
            $data = Db::query("select * from plan_con");
//            dump($data);
            //分配数据
            $this->assign("data",$data);
            //渲染页面
            return view();

    }
    public function create(){
        return view();
    }
    public function save(){

    }
    public function addplan(){

    }

}