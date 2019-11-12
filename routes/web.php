<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('about-us', function () {
    return view('about');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('register', function () {
    return view('register');
});

Route::get('little-miss-damsel-nigeria', function () {
    return view('lmdn');
});

Route::get('contact-us', function () {
    return view('contact');
});
