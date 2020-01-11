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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('lmdn-registration', function () {
    return view('lmdn-registration');
});

Route::get('little-miss-damsel-nigeria', function () {
    return view('lmdn');
});

Route::get('contact-us', function () {
    return view('contact');
});

Route::post('submit-contact', 'WebsiteController@contactForm');

Route::post('lmdn-signup', 'ApplicationController@lmdnSignupForm');


Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

// Dashboard Page
Route::get('admin/dashboard', 'AdminController@index')->name('admin-dashboard');

// LMDN Admin Dashboard Page
Route::get('lmdn-admin/dashboard', 'AdminController@index')->name('lmdn-admin-dashboard');


// Manage Applications
// Application Resource Controller
Route::resource('admin/applications', 'ApplicationController');

// Fund User Form
Route::post('/admin/applications/approve/{id}', ['uses' => 'ApplicationController@approve']);

// Paid Applications
Route::get('applications/paid-applications', 'ApplicationController@paidApplications')->name('paid-applications');

// Pending Applications
Route::get('applications/pending-applications', 'ApplicationController@pendingApplications')->name('pending-applications');

Route::get('registration-complete', function () {
    return view('registration-complete');
});


//Manage LMDN Applications
// LMDN Application Resource Controller
Route::resource('admin/lmdn-applications', 'LMDNapplicationController');

// Fund User Form
Route::post('/admin/lmdn-applications/approve/{id}', ['uses' => 'LMDNapplicationController@approve']);

// Paid Applications
Route::get('lmdn-applications/paid-applications', 'LMDNapplicationController@paidApplications')->name('lmdn-paid-applications');

// Pending Applications
Route::get('lmdn-applications/pending-applications', 'LMDNapplicationController@pendingApplications')->name('lmdn-pending-applications');

Route::get('registration-complete', function () {
    return view('registration-complete');
});


