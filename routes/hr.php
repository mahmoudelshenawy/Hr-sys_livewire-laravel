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

    Route::get('banks', App\Http\Livewire\Pages\Banks::class);
    Route::get('sponsors', App\Http\Livewire\Pages\Sponsors::class);
    Route::get('insurrance_companies', App\Http\Livewire\Pages\InsurranceCompanies::class);
    Route::get('shifts', App\Http\Livewire\Pages\Shifts::class);
});
Route::group(['prefix' => 'hr', 'middleware' => 'auth'], function () {

    Route::get('employees', [App\Http\Controllers\HR\Employee\EmployeesController::class, 'index']);
    Route::get('employees/{employee}/profile', App\Http\Livewire\Pages\EmployeeProfile::class);
    Route::get('employees/companions', App\Http\Livewire\Pages\Companions::class);
    Route::get('reports/employees_reports', App\Http\Livewire\Pages\EmployeeReports::class);
});
Route::group(['prefix' => 'payroll', 'middleware' => 'auth'], function () {
    Route::get('overtime', App\Http\Livewire\Pages\PayrollOverTime::class);
    Route::get('allowance', App\Http\Livewire\Pages\PayrollAllowance::class);
    Route::get('advance', App\Http\Livewire\Pages\PayrollAdvance::class);
    Route::get('commission', App\Http\Livewire\Pages\PayrollCommission::class);
    Route::get('delay_penalty', App\Http\Livewire\Pages\PayrollDelayPenalty::class);
    Route::get('absence_penalty', App\Http\Livewire\Pages\PayrollAbsencePenalty::class);
});
