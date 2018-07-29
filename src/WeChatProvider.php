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
            __DIR__.'/Config.php' => config_path('hd_wechat.php'),
        ]);
    }

    public function register()
    {
        $this->app->single('HDWeChat', function () {
            return new WeChat();
        });
    }
}
