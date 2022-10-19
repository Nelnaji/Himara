<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Nav;
use App\Models\Title;
use App\Models\Slider;
use App\Models\Team;
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

// this sends data from the slider model, to the slider view component.

        view()->composer('components.index.slider', function ($view) {
            $view->with('sliders',
            Slider::all());
        });

// Seding data to the different components for titles

        view()->composer('components.index.about', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.contact', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.gallery', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.news', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.restaurant', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.rooms', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.services', function ($view) {
            $view->with('titles',
            Title::all());
        });
        view()->composer('components.index.testimonials', function ($view) {
            $view->with('titles',
            Title::all());
        });

        // sending team data to the team page
        view()->composer('pages.team', function($view) {
            $view->with('teammembers', Team::all());
        });

        // Sending data to gallery
        view()->composer('pages.gallery', function($view) {
            $view->with('items', Gallery::all());
        });
        
        // Sending data to gallery limit it to 5 only
        view()->composer('components.index.gallery', function($view) {
        $view->with('items', Gallery::all());
});
    }
}
