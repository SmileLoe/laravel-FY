<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * 指示是否应将XSRF令牌cookie设置在响应上。
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * 应该从CSRF验证中排除的URI。
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
