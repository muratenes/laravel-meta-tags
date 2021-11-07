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
        // views
        $this->loadViewsFrom(__DIR__ . '/views', 'laravel-meta-tags');
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
        // publishes
        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/muratenes/laravel-meta-tags'),
        ], ['laravel-meta-tags-view']);
    }
}
