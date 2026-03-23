<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about', 'about');

// Route::redirect('about-us', 'about', 301);
Route::permanentRedirect('abut-me', 'about');
Route::get('/user/{id}', function (string $id){
return "User id: $id";
});

