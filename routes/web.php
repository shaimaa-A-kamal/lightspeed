<?php

use App\Http\Controllers\GuestControllers\IndexController;
use App\Http\Controllers\GuestControllers\AboutController;
use App\Http\Controllers\UserControllers\ContactController;
use App\Http\Controllers\UserControllers\pricingController;
use App\Http\Controllers\UserControllers\TrackController;
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

Route::get('/',[IndexController::Class,'index'])->name('index');
Route::get('/about',[AboutController::Class,'about'] )->name('about');
Route::get('/pricing',[pricingController::Class,'pricing'] )->name('pricing');
Route::get('/track',[TrackController::class,'track'] )->name('track');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/sign', function () {
    return view('GuestPages.sign');
})->name('sign');
