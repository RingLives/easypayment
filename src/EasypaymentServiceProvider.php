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
            $this->mergeConfigFrom(__DIR__.'/../config/esaypayment.php', 'esaypayment');
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
                __DIR__.'/../config/esaypayment.php' => config_path('esaypayment.php'),
            ], 'esaypayment-config');
        }
    }
}
