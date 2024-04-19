<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/home', 'home')->name('home');
Route::view('/casa', 'casa')->name('casa');
Route::view('/fotos', 'fotos')->name('fotos');
Route::view('/contacto', 'contacto')->name('contacto');
