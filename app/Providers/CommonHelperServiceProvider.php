<?php

namespace App\Providers;

use App\Helpers\CommonHelper;
use Illuminate\Support\ServiceProvider;

class CommonHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("CommonHelper", function ($app) {
            return new CommonHelper();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
