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
    return view('welcome');
});

Route::get('hello',function (){
    return "你好，欢迎！您输入的hello为路由控制哟！";
});

Route::get('/user', 'UsersController@index');