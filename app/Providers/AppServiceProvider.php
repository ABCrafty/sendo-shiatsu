<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Witness;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.partials._footer', function ($view)
        {
            $view->with('witnesses', Witness::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
