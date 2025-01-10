<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomPublicPathServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('path.public',function(){
            return 'https://umrahrahat.com/public';
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
