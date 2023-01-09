<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

// Service
Route::get('/service/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');

// Location
Route::get('/location', [App\Http\Controllers\LocationController::class, 'search'])->name('location.search');
Route::get('/location/{slug}', [App\Http\Controllers\LocationController::class, 'show'])->name('location.show');


// Opening Hours
Route::get('/opening-hours', [App\Http\Controllers\LocationController::class, 'opening_hours'])->name('opening_hours');


// Subscriber
Route::post('/subscriber', [App\Http\Controllers\SubscriberController::class, 'store'])->name('subscriber.store');

// Test
Route::get('/tests', [App\Http\Controllers\TestController::class, 'search'])->name('test.search');

// Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');



/*===========================================================================
========== Admin Routes =====================================================
===========================================================================*/


Route::group([ "prefix" => "admin",  "middleware" => "auth", "as" => "admin." ] , function(){


    // Locations
    Route::resource('location', App\Http\Controllers\Admin\LocationController::class);
    Route::post('location/search' , [App\Http\Controllers\Admin\LocationController::class, 'search'])->name("location.search");
    Route::post('location/multiAction' , [App\Http\Controllers\Admin\LocationController::class, 'multiAction'])->name("location.multiAction");


    // Service
    Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
    Route::post('service/search' , [App\Http\Controllers\Admin\ServiceController::class, 'search'])->name("service.search");
    Route::post('service/multiAction' , [App\Http\Controllers\Admin\ServiceController::class, 'multiAction'])->name("service.multiAction");


    // Test
    Route::resource('test', App\Http\Controllers\Admin\TestController::class);
    Route::post('test/search' , [App\Http\Controllers\Admin\TestController::class, 'search'])->name("test.search");
    Route::post('test/multiAction' , [App\Http\Controllers\Admin\TestController::class, 'multiAction'])->name("test.multiAction");


    // Testimonial
    Route::resource('testimonial', App\Http\Controllers\Admin\TestimonialController::class);
    Route::post('testimonial/search' , [App\Http\Controllers\Admin\TestimonialController::class, 'search'])->name("testimonial.search");
    Route::post('testimonial/multiAction' , [App\Http\Controllers\Admin\TestimonialController::class, 'multiAction'])->name("testimonial.multiAction");


    // Messege
    Route::resource('messege', App\Http\Controllers\Admin\MessegeController::class);
    Route::post('messege/search' , [App\Http\Controllers\Admin\MessegeController::class, 'search'])->name("messege.search");
    Route::post('messege/multiAction' , [App\Http\Controllers\Admin\MessegeController::class, 'multiAction'])->name("messege.multiAction");


    // Subscriber
    Route::resource('subscriber', App\Http\Controllers\Admin\SubscriberController::class);
    Route::post('subscriber/search' , [App\Http\Controllers\Admin\SubscriberController::class, 'search'])->name("subscriber.search");
    Route::post('subscriber/multiAction' , [App\Http\Controllers\Admin\SubscriberController::class, 'multiAction'])->name("subscriber.multiAction");


    // Newsletter
    Route::resource('newsletter', App\Http\Controllers\Admin\NewsletterController::class);
    Route::post('newsletter/search' , [App\Http\Controllers\Admin\NewsletterController::class, 'search'])->name("newsletter.search");
    Route::post('newsletter/multiAction' , [App\Http\Controllers\Admin\NewsletterController::class, 'multiAction'])->name("newsletter.multiAction");


    // SeoManagement
    Route::resource('seo-management', App\Http\Controllers\Admin\SeoManagementController::class)->except('index','show','create','store','destroy');


    // Setting
    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class)->except('index','show','create','store','destroy');

    // Dashboard
    Route::get('dashboard' , [App\Http\Controllers\Admin\AdminController::class, 'index'])->name("dashboard");


});
