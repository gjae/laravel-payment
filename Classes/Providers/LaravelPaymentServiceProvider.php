<?php

namespace Gjae\LaravelPayment\Classes\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelPaymentServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-payment.php'    => config_path('laravel-payment.php')
        ]);
    }

    /**
     * Register any application services
     *
     * @return void
     */
    public function register()
    {
        //
    }

}