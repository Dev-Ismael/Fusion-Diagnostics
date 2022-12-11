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
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');





/*===========================================================================
========== Admin Routes =====================================================
===========================================================================*/

Route::group([ "prefix" => "admin" , "as" => "admin." ] , function(){


    // Locations
    Route::resource('location', App\Http\Controllers\Admin\LocationController::class);
    Route::post('location/search' , [App\Http\Controllers\Admin\LocationController::class, 'search'])->name("location.search");
    Route::post('location/multiAction' , [App\Http\Controllers\Admin\LocationController::class, 'multiAction'])->name("location.multiAction");

});
