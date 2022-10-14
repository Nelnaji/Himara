<?php

namespace App\Providers;

use App\Models\Nav;
use Illuminate\Support\ServiceProvider;

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

        // this sends that from the Nav model to the view I want !
        view()->composer('partials.nav', function ($view) {

            $view->with('navlinks', Nav::all());
        });




    }
}
