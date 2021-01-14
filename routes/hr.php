<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'hr/master', 'middleware' => 'auth'], function () {

    Route::resource('branches', App\Http\Controllers\HR\Master\BranchesController::class);
    Route::resource('administrations', App\Http\Controllers\HR\Master\AdministrationsController::class);
    Route::resource('departments', App\Http\Controllers\HR\Master\DepartmentsController::class);
    Route::resource('jobs', App\Http\Controllers\HR\Master\JobsController::class);
    Route::get('employment-status', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfEmploymentStatus']);
    Route::get('skills', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfSkills']);
    Route::get('educations', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfEducations']);
    Route::get('languages', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfLanguages']);
    Route::get('certifications', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfCertifications']);

    Route::get('banks', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfBanks']);
    Route::get('sponsors', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfSponsors']);
    Route::get('insurrance_companies', [App\Http\Controllers\HR\Master\HRMasterCollectorController::class, 'indexOfInsurrance']);
});
Route::group(['prefix' => 'hr', 'middleware' => 'auth'], function () {

    Route::get('employees', [App\Http\Controllers\HR\Employee\EmployeesController::class, 'index']);
    Route::get('employees/{id}/profile', [App\Http\Controllers\HR\Employee\EmployeesController::class, 'getProfile']);
});
