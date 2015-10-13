<?php

namespace Eloquent\Commentable;
use Illuminate\Support\ServiceProvider;

class CommentsServiceProvider extends ServiceProvider {

    /**
     * Publish resources.
     */
    public function boot() {
        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . '../migrations/' => database_path('migrations'),
        ], 'migrations');
    }

    /**
     * Register to Ioc .
     */
    public function register() {

    }

}