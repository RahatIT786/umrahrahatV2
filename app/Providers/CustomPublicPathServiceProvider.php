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
            return base_path('public_html/public');
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
