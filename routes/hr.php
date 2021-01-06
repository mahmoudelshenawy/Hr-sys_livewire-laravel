<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'hr/master', 'middleware' => 'auth'], function () {

    Route::resource('branches', App\Http\Controllers\HR\Master\BranchesController::class);
    Route::resource('administrations', App\Http\Controllers\HR\Master\AdministrationsController::class);
    Route::resource('departments', App\Http\Controllers\HR\Master\DepartmentsController::class);
    Route::resource('jobs', App\Http\Controllers\HR\Master\JobsController::class);
});
