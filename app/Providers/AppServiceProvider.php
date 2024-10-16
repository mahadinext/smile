<?php

namespace App\Providers;

use App\Models\PersonalAccessToken;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use Illuminate\Support\Facades\Blade;


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
        // Use our customized personal access token model
        Sanctum::usePersonalAccessTokenModel(
            PersonalAccessToken::class
        );

        view()->composer('*', function ($view) {
            $view->with('timeZone',
                config("app.timezone_utc"));
        });
    }
}
