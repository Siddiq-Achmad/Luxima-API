<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Unsplash\HttpClient;
use Carbon\Carbon;

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



        //init unsplash
        HttpClient::init([
            'applicationId'    => env('UNSPLASH_ACCESS_KEY'),
            'secret'    => env('UNSPLASH_SECRET_KEY'),
            'callbackUrl'    => '',
            'utmSource' => 'LUXIMA-API'
        ]);
    }
}
