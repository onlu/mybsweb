<?php
namespace app\admin\validate;

use think\Validate;
class Links extends Validate{
    protected $rule = [
      'title' => 'require|max:35',
      'url' => 'require',
      'descc' => 'require',
    ];
    protected $message =[
      'title.require' => '链接名称必须填写',
      'url.max' => '链接长度不得大于35位',
      'descc.require' => '链接描述必须填写',
    ];
    protected $scene =[
        'add' => ['title','url'],
        'editLinks' => ['title','url'],
    ];
}
?>