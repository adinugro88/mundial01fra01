<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Initialize session language if not set
        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            if (!session()->has('language')) {
                session(['language' => 'id']);
            }
            \Illuminate\Support\Facades\App::setLocale(session('language', 'id'));
        });
    }
}
