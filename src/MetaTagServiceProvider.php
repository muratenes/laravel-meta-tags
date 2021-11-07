<?php

namespace MuratEnes\LaravelMetaTags;

use Illuminate\Support\ServiceProvider;

class MetaTagServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // controllers
//        $this->app->make('MuratEnes\LaravelMetaTags\RegionController');
        // views
//        $this->loadViewsFrom(__DIR__ . '/views', 'laravel-meta-tags');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
//        // routes
//        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
