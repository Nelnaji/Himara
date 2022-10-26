<?php

namespace App\Providers;

use App\Models\Nav;
use App\Models\Team;
use App\Models\About;
use App\Models\Title;
use App\Models\Video;
use App\Models\Slider;
use App\Models\Gallery;
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

        // this only sends the housekeeper
        view()->composer('pages.team', function($view) {
            $view->with('housekeeper', Team::where('is_housekeeper', true)->get());
        });

        // this only sends non housekeepers, limit them to 8 and randomises them
        view()->composer('pages.team', function($view) {
            $view->with('teammembers', Team::where('is_housekeeper', false)->limit(7)->inRandomOrder()->get());
        });

        // Sending data to gallery
        view()->composer('pages.gallery', function($view) {
            $view->with('items', Gallery::all());
        });

        // Sending data to gallery limit it to 5 only
        view()->composer('components.index.gallery', function($view) {
        $view->with('items', Gallery::inRandomOrder()->get());
        });

        view()->composer('components.index.about', function($view) {
        $view->with('about', About::all());
        });


        // Sending data to videos.

        view()->composer('components.index.video', function($view) {
            $view->with('video', Video::all());
            });


    }
}
