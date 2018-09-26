<?php

/*
|--------------------------------------------------------------------------
| WEB路由
|--------------------------------------------------------------------------
|
| 您可以在此处为您的应用程序注册Web路由。
| 这些路由由包含“web”中间件组的组中的RouteServiceProvider加载。
| 现在创造伟大的东西！
|
*/

Route::get('/', function () {
    return view('welcome',['website'=>'laravel']);
});

Route::view('view','welcome',['website'=>'laravel学习']);


Route::get('user/{id}','UserController@show');




//路由重定向 其中 here 表示原路由，there 表示重定向之后的路由，301 是一个 HTTP 状态码，用于标识重定向。
Route::redirect('/here', '/there', 301);

