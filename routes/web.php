<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('home');
    });
    Route::get('/vertical', function () {
        return view('vertical');
    });

    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::resource('app_settings', App\Http\Controllers\AppSettingsController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
