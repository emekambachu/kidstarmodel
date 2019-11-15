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
    return view('homepage');
});

Route::get('about-us', function () {
    return view('about');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('registration', function () {
    return view('register');
});

Route::get('little-miss-damsel-nigeria', function () {
    return view('lmdn');
});

Route::get('contact-us', function () {
    return view('contact');
});

Route::post('submit-contact', 'WebsiteController@contactForm');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

// Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')->name('admin-dashboard');

//Manage Applications
// Application Resource Controller
Route::resource('admin/applications', 'ApplicationController');


