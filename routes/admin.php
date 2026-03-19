<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(RegisterController::class)->group(function(){
    Route::get('register','showRegistrationForm')->name('register');
    Route::post('register','register')->name('register');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login','showLoginForm')->name('login');
    Route::post('login','login')->name('login');
});


Route::middleware('admin')->controller(HomeController::class)->group(function(){
    Route::get('dashboard','index')->name('dashboard');
    Route::post('logout','logout')->name('logout');
});
