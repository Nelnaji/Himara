<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/nav', NavController::class);




// // Fallback page error 404

Route::fallback(FallbackController::class);
