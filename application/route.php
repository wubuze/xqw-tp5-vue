<?php
use think\Route;

// 注册路由到index模块的News控制器的read操作
Route::rule('/','index/index/index');

Route::rule('/test1','index/index/test1');
//Route::rule('/jsonTest','index/index/jsonTest');
Route::rule('api/jsonTest','index/index/jsonTest');

//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],

//];
