<?php

use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => 'auth'], function () {

//     Route::get('/', function () {
//         return view('home');
//     });
// });
Auth::routes();
Route::get('/', function () {
    return view('home');
});
