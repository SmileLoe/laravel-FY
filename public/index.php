<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));
//define() 检查该名称的常量是否已定义,这里用来设置常量
//microtime() get_as_float 可选。当设置为 TRUE 时，规定函数应该返回浮点数，否则返回字符串。默认为 FALSE。

/*
|--------------------------------------------------------------------------
| 注册自动加载
|--------------------------------------------------------------------------
|
| Composer为我们的应用程序提供了方便的，自动生成的类加载器。
| 我们只需要利用它！ 我们只需要将它放入脚本中，
| 这样我们就不必担心以后手动加载任何类了。
| 放松一下感觉很棒。
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
|我们需要阐明PHP开发，所以让我们打开灯。
|这将引导框架并准备好使用它，然后它将加载此应用程序，
|以便我们可以运行它并将响应发送回浏览器并使我们的用户满意。
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| 运行应用程序
|--------------------------------------------------------------------------
|
| 一旦我们有了应用程序，我们就可以通过内核处理传入的请求，
| 并将相关的响应发送回客户端的浏览器，让他们享受创意。
| 我们为他们准备的精彩应用。...
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
