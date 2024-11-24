<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Unsplash\HttpClient;
use Carbon\Carbon;
use Laravel\Passport\Passport;

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
        //
        Passport::tokensExpireIn(now()->addDays(15));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
        Passport::enablePasswordGrant();



        //init unsplash
        HttpClient::init([
            'applicationId'    => env('UNSPLASH_ACCESS_KEY'),
            'secret'    => env('UNSPLASH_SECRET_KEY'),
            'callbackUrl'    => '',
            'utmSource' => 'LUXIMA-API'
        ]);
    }
}
