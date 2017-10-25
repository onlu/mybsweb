<?php
namespace app\admin\controller;

//引入系统controller类
use app\admin\controller\Base;
//引入Db类
use think\Db;
//引入Model
use app\admin\model\Article as ArticleModel;
class Article extends Base{
    public function index(){
        return view();
    }
    public function add(){
        if(request()->isPost()){
//            dump($_POST);die;
            $data=[
                'title'=>input('title'),
                'author'=>input('author'),
                'descc'=>input('descc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
                'time' =>time(),
            ];
            if(input('state')=='on'){
                $data['state']=1;
            }
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH.'public'. DS . 'static/uploads');
                $data['pic'] ='uploads/'.$info->getSaveName();
            }
            //validate进行验证
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(Db::name('article')->insert($data)){
                return $this->success('添加文章成功','lst');
            }else{
                return $this->error('添加文章失败');
            }
        }
        $cateres = db('cate')->select();
        $this->assign('cateres',$cateres);
        return view();
    }
    public function editArticle(){
//dump(input('id'));
        //获取“编辑”按钮传递的id值
        $id = input('id');
        //数据库查询数据
        $articles = db('article')->find($id);
        //判断是否为post传递过来的(当鼠标点击之后，即提交之后才会执行，重新执行editadmin这个方法，从而执行到if语句)
        if(request()->isPost()){
            $data = [
                'id' =>input('id'),
                'title' => input('title'),
                'author' => input('author'),
                'descc' =>input('descc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
                'time' =>time(),
            ];
            if(input('state')=='on'){
                $data['state']=1;
            }else{
                $data['state']=0;
            }
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH.'public'. DS . 'static/uploads');
                $data['pic'] ='uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Article');
            if(!$validate->scene('editArticle')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('article')->update($data)){
                $this->success('修改文章成功','lst');
            }else{
                $this->error('修改文章失败');
            }
            return;
        }
        //给模板页面分配数据
        $this->assign('article',$articles);
        $cateres = db('cate')->select();
        $this->assign('cateres',$cateres);
        return view();
    }
    public function lst(){
// 查询状态为1的用户数据 并且每页显示10条数据
        //①第一种方法查询数据
//        $list = Db::name('article')->paginate(5);
        //②第二种方法查询（连接查询）
//        $list = db('article')->alias('a')->join('cate c','c.id=a.cateid')->field('a.id,a.title,a.author,a.state,a.pic,c.catename')->paginate(5);
        //③第三种方法查询（关联查询）
        $list =ArticleModel::paginate('5');
// 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }
    public function login(){

    }
    public function del(){
        $id = input('id');
            if(db('article')->delete(input('id'))){
                $this->success('删除文章成功！','lst');
            }else{
                $this->error('删除文章失败！');
            }

    }
}
?>