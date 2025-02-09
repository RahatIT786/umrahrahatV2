<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ZiyaratCity;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('user.layouts.app', 'app-layout');
        View::composer('user.includes.navbar', function ($view) {
            $Ziyaratcities = ZiyaratCity::where('delete_status', 1)->get();
            $view->with('Ziyaratcities', $Ziyaratcities);
        });
    }
}
