<?php
return[
    'template'               => [
        // 模板后缀
        'view_suffix'  => 'htm',
    ],
    // 视图输出字符串内容替换
    'view_replace_str'       => [
        '__ADMIN__' =>SITE_URL.'/public/static/admin',
        '__STATIC__' =>SITE_URL.'/public/static',
    ],
];

?>