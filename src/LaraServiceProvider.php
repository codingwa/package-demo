<?php

namespace Xiaohai\Lara;

use Illuminate\Support\ServiceProvider;

class LaraServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/lara.php' => config_path('lara.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('lara', function () {
            return new Lara;
        });
    }
}
