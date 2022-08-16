<?php

namespace Larapress\Facebook\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'larapress');
        $this->publishes([
            __DIR__.'/../../config/facebook.php' => config_path('larapress/facebook.php'),
        ], ['config', 'larapress', 'larapress-facebook']);
    }
}
