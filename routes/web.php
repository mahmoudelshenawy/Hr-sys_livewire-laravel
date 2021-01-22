<?php

use App\Http\Livewire\Layout\BanksPage;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::resource('users', App\Http\Controllers\UsersController::class);
    Route::resource('app_settings', App\Http\Controllers\AppSettingsController::class);
    Route::resource('business_settings', App\Http\Controllers\MainOfficeSettingController::class);
});
Auth::routes();

// Route::get('/test', function () {
//     return view('home');
// });
