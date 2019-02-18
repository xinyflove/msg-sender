<?php

namespace PeakXin\MsgSender;

use Illuminate\Support\ServiceProvider;

class MsgSenderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // 加载路由文件
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        // 加载视图文件
        $this->loadViewsFrom(__DIR__.'/../views', 'msg-sender');
        
        $this->publishes([__DIR__.'/../assets' => public_path('packages/msg-sender')], 'msg-sender');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
