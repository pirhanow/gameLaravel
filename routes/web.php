<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about', 'about');

// Route::redirect('about-us', 'about', 301);
Route::permanentRedirect('abut-me', 'about');

use App\Http\Controllers\UserController;
Route::get('/user/{id}', [App\Http\Controllers\UserController::class,'show']);

Route::get('profile', [App\Http\Controllers\UserController::class,'profile']);

