<?php

namespace Aammui\LaravelTaggable;

use Illuminate\Support\ServiceProvider;

class LaravelTaggableServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
