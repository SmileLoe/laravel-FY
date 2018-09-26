<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 应用名称
    |--------------------------------------------------------------------------
    |
    | 此值是应用程序的名称。
    | 当框架需要将应用程序的名称放置在应用程序或其包所需的其他位置的通知中时，
    | 将使用此值。
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | 应用环境
    |--------------------------------------------------------------------------
    |
    | 此值确定应用程序当前运行的“环境”。
    | 这可能决定您希望如何配置应用程序使用的各种服务。
    | 在“.env”文件中设置此项。
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | 应用程序调试模式
    |--------------------------------------------------------------------------
    |
    | 当您的应用程序处于调试模式时，
    | 带有堆栈跟踪的详细错误消息将显示在应用程序中发生的每个错误上。
    | 如果禁用，则会显示一个简单的通用错误页面。
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | 应用程序 URL
    |--------------------------------------------------------------------------
    |
    | 使用Artisan命令行工具时，控制台使用此URL来正确生成URL。
    | 您应该将其设置为应用程序的根目录，以便在运行Artisan任务时使用它。
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | 应用程序时区
    |--------------------------------------------------------------------------
    |
    | 在这里，您可以指定应用程序的默认时区，它将由PHP日期和日期时间函数使用。
    | 我们已经开始为您提供开箱即用的明智默认设置。
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | 应用程序区域设置配置
    |--------------------------------------------------------------------------
    |
    | 应用程序区域设置确定将由翻译服务提供程序使用的默认区域设置。
    | 您可以自由地将此值设置为应用程序将支持的任何语言环境。
    |
    */

    'locale' => 'zh-CN',

    /*
    |--------------------------------------------------------------------------
    | 应用程序后备区域设置
    |--------------------------------------------------------------------------
    |
    | 后备区域设置确定当前区域设置不可用时使用的区域设置。
    | 您可以更改该值以对应于通过您的应用程序提供的任何语言文件夹。
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | 加密密钥
    |--------------------------------------------------------------------------
    |
    | 此密钥由Illuminate encrypter服务使用，
    | 应设置为随机的32个字符的字符串，否则这些加密的字符串将不安全。
    | 请在部署应用程序之前执行此操作！
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers 自动加载的服务提供商
    |--------------------------------------------------------------------------
    |
    | 此处列出的服务提供商将自动加载到您的应用程序的请求中。
    | 您可以随意将自己的服务添加到此阵列，以便为您的应用程序授予扩展功能。
    |
    */

    'providers' => [

        /*
         * Laravel框架服务提供器...
         * 应用程序的所有服务提供器都在 config/app.php 配置文件的 providers 数组中配置。
         *
         * 首先，所有提供器都会调用 register 方法，
         * 接着，由 boot 方法负责调用所有被注册提供器。
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package 服务供应商...
         */

        /*
         * Application 服务供应商...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases   类别名
    |--------------------------------------------------------------------------
    |
    | 启动此应用程序时，将注册此类别名数组。
    | 但是，可以随意注册任意多个，因为别名是“懒惰”加载的，因此它们不会妨碍性能。
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
