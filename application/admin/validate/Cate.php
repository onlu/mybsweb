<?php
namespace app\admin\validate;

use think\Validate;
class Cate extends Validate{
    protected $rule = [
      'catename' => 'require|max:15',
    ];
    protected $message =[
      'username.require' => '栏目名称必须填写',
      'username.max' => '栏目名称长度不得大于15位',
    ];
    protected $scene =[
        'add' => ['catename'],
        'editlanmu' => ['catename'=>'max:15'],
    ];
}
?>