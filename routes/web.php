<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/rooms', function(){
    return view('pages.rooms-list');
})->name('rooms');

Route::get('/team', function(){
    return view('pages.team');
})->name('team');

Route::get('/gallery', function(){
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact', function(){
    return view('pages.contact');
})->name('contact');

Route::get('/about', function(){
    return view('pages.about');
})->name('contact');


// Middleware for authentification, if the person is not authentified she cannot have access to dashboard

Route::group(['middleware'=>['auth']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // if user is not admin he wont get access to these routes

    Route::group(["middleware"=>['is_admin']], function () {

        Route::resource('/nav', NavController::class);
        Route::resource('/users', UserController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/rooms', RoomController::class);
        Route::resource('/video', VideoController::class);
        Route::resource('/services', ServiceController::class);
        Route::resource('/restaurant', RestaurantController::class);
        Route::resource('/slider', SliderController::class);
        Route::resource('/news', PostController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/testimonials', TestimonialController::class);
        Route::resource('/footer', FooterController::class);
    });



});









require __DIR__.'/auth.php';


// // Fallback page error 404

Route::fallback(FallbackController::class);
