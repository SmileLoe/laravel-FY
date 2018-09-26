<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 登录控制器
    |--------------------------------------------------------------------------
    |
    | 此控制器处理应用程序的用户身份验证并将其重定向到主屏幕。
    | 控制器使用特征来方便地为您的应用程序提供其功能。
    |
    */

    use AuthenticatesUsers;

    /**
     * 用户登录后重定向到哪里
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * 创建一个新的控制器实例
     *
     * @return void
     */
    public function __construct()
    {
        /**
         * 执行中间件 guest 但是除了 logout 方法
         */
        $this->middleware('guest')->except('logout');
    }
}
