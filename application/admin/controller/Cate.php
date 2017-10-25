<?php
namespace app\admin\controller;

//引入系统controller类
use app\admin\controller\Base;
//引入Db类
use think\Db;
//引入Model
use app\admin\model\Index as IndexModel;
class Cate extends Base{
    public function index(){
        return view();
    }
    public function add(){
        if(request()->isPost()){
            $data=[
                'catename'=>input('catename'),
            ];
            //validate进行验证
            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(Db::name('cate')->insert($data)){
                return $this->success('添加栏目成功','lst');
            }else{
                return $this->error('添加栏目失败');
            }
        }
        return view();
    }
    public function editlanmu(){
//dump(input('id'));
        //获取“编辑”按钮传递的id值
        $id = input('id');
        //数据库查询数据
        $admins = db('cate')->find($id);
        //判断是否为post传递过来的(当鼠标点击之后，即提交之后才会执行，重新执行editlanmu这个方法，从而执行到if语句)
        if(request()->isPost()){
            $data = [
                'id' =>input('id'),
                'catename' => input('catename'),
            ];

            $validate = \think\Loader::validate('Cate');
            if(!$validate->scene('editlanmu')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('cate')->update($data)){
                $this->success('修改栏目信息成功','lst');
            }else{
                $this->error('修改栏目信息失败');
            }
            return;
        }
        //给模板页面分配数据
        $this->assign('admins',$admins);
        return view();
    }
    public function lst(){
        // 查询状态为1的用户数据 并且每页显示10条数据
        $list = Db::name('cate')->paginate(3);
// 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }
    public function del(){
        //只需要传递主键即可删除整行
        $id = input('id');
            if(db('cate')->delete(input('id'))){
                $this->success('删除栏目成功！','lst');
            }else{
                $this->error('删除栏目失败！');
            }
        }

}
?>