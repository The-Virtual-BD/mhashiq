<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
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
        /// Share a variable named 'site_name' with all views
        View::composer('*', function ($view) {
            $profile = User::first();
            $view->with('profile', $profile);
        });
    }
}
