<?php
namespace app\admin\controller;

//引入系统controller类
use app\admin\controller\Base;
//引入Db类
use think\Db;
//引入Model
use app\admin\model\Index as IndexModel;
class Index extends Base{
    public function index(){
        return view();
    }
    public function add(){
        if(request()->isPost()){
            $data=[
              'username'=>input('username'),
              'password'=>md5(input('password')),
            ];
            //validate进行验证
            $validate = \think\Loader::validate('index');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(Db::name('admin')->insert($data)){
                return $this->success('添加管理员成功','lst');
            }else{
                return $this->error('添加管理员失败');
            }
        }
        return view();
    }
    public function editadmin(){
//dump(input('id'));
        //获取“编辑”按钮传递的id值
        $id = input('id');
        //数据库查询数据
        $admins = db('admin')->find($id);
        //判断是否为post传递过来的(当鼠标点击之后，即提交之后才会执行，重新执行editadmin这个方法，从而执行到if语句)
        if(request()->isPost()){
            $data = [
                'id' =>input('id'),
                'username' => input('username'),
            ];
                if(input('password')){
                    $data['password'] = md5(input('password'));
                }
                $validate = \think\Loader::validate('Index');
                if(!$validate->scene('editadmin')->check($data)){
                    $this->error($validate->getError());
                    die;
                }
                $save = db('admin')->update($data);
                if($save !== false){
                    $this->success('修改管理员信息成功','lst');
                }else{
                    $this->error('修改管理员信息失败');
                }
                return;
        }
        //给模板页面分配数据
        $this->assign('admins',$admins);
        return view();
    }
    public function lst(){
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('admin')->paginate(3);
// 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }
    public function logout(){
        session(null);
        $this->success('退出成功','login/index');
    }
    public function del(){
        $id = input('id');
        if($id !=1){
            if(db('admin')->delete(input('id'))){
                $this->success('删除管理员成功！','lst');
            }else{
                $this->error('删除管理员失败！');
            }
        }else{
            $this->error('初始化管理员不能删除！');
        }
    }
    //---------------------对前台Vip进行管理-----------------------
    public function addVip(){
        if(request()->isPost()){
            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password')),
            ];
            //validate进行验证
            $validate = \think\Loader::validate('index');
            if(!$validate->scene('addVip')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(Db::name('vip')->insert($data)){
                return $this->success('添加Vip成功','listVip');
            }else{
                return $this->error('添加Vip失败');
            }
        }
        return view();

    }
    public function delVip(){
        $id = input('id');
        if($id !=1){
            if(db('vip')->delete(input('id'))){
                $this->success('删除Vip成功！','listVip');
            }else{
                $this->error('删除Vip失败！');
            }
        }else{
            $this->error('初始化Vip不能删除！');
        }
        return view();
    }
    public function editVip(){
        //获取“编辑”按钮传递的id值
        $id = input('id');
        //数据库查询数据
        $vips = db('vip')->find($id);
        //判断是否为post传递过来的(当鼠标点击之后，即提交之后才会执行，重新执行editadmin这个方法，从而执行到if语句)
        if(request()->isPost()){
            $data = [
                'id' =>input('id'),
                'username' => input('username'),
            ];
            if(input('password')){
                $data['password'] = md5(input('password'));
            }
            $validate = \think\Loader::validate('Index');
            if(!$validate->scene('editVip')->check($data)){
                $this->error($validate->getError());
                die;
            }
            $save = db('vip')->update($data);
            if($save !== false){
                $this->success('修改Vip信息成功','listVip');
            }else{
                $this->error('修改Vip信息失败');
            }
            return;
        }
        //给模板页面分配数据
        $this->assign('vips',$vips);
        return view();

    }
    public function listVip(){
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('vip')->paginate(3);
// 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }
    }

?>