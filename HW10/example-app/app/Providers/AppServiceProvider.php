<?php

namespace App\Providers;

use App\Services\ParserService;
use App\Services\SocialiteService;
use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ParserService::class, function () {
            return new ParserService();
        });

        $this->app->bind(SocialiteService::class, function () {
            return new SocialiteService();
        });
    }
}
