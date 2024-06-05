<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/','Index')->name('index');
Route::view('/about','About')->name('about');
Route::view('/services','Services')->name('services');
Route::view('/contact','Contact')->name('contact');