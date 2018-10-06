<?php namespace Houdunwang\WeChat;

use Illuminate\Support\ServiceProvider;

class WeChatProvider extends ServiceProvider
{
    //延迟加载
    public $defer = true;

    public function boot()
    {
        //配置文件
        $this->publishes([
            __DIR__ . '/Config.php' => config_path('hd_wechat.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WeChat::class, function () {
            return new WeChat();
        });
    }
}
