<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * 定义路径模型绑定，模式过滤器等。
     *
     * @return void
     */
    public function boot()
    {
        //全局约束
        Route::pattern("id",'[0-9]+'); //定义id只能为数字
        Route::pattern('name', '[A-Za-z]+');//定义name为字符
        parent::boot();
    }

    /**
     * 定义应用程序的路由。
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * 定义应用程序的“Web”路由。
     *
     * 这些路由都接收会话状态，CSRF保护等。
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * 为应用程序定义“api”路由。
     *
     * 这些路由组通常是无状态的。
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
