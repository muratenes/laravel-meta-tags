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

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // migrations
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            // views
            $this->loadViewsFrom(__DIR__ . '/Views', 'laravel-meta-tags');
            // publishes
            $this->publishes([
                __DIR__ . '/Views' => base_path('resources/views/muratenes/laravel-meta-tags'),
            ], ['laravel-meta-tags-view']);
        }
    }
}
