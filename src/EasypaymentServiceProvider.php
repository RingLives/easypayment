<?php

namespace Ringlives\Easypayment;

use Illuminate\Support\ServiceProvider;

class EasypaymentServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if (! app()->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/easypayment.php', 'easypayment');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (app()->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/easypayment.php' => config_path('easypayment.php'),
            ], 'easypayment-config');
        }
    }
}
