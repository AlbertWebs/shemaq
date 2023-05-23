<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/sectors', function () {
    return view('front.sectors');
});


Route::get('/sectors/{slung}', [App\Http\Controllers\HomeController::class, 'sector'])->name('sector');
Route::get('/expertises/{slung}', [App\Http\Controllers\HomeController::class, 'expertises'])->name('expertises');

Route::get('/expertises', function () {
    return view('front.expertise');
});



Route::get('/contact-us', function () {
    return view('front.contact');
});
