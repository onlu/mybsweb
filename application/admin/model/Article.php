<?php
namespace app\admin\Model;

use think\Model;

class Article extends Model{
    public function cate(){
        return $this->belongsTo('cate','cateid');
    }
}
?>