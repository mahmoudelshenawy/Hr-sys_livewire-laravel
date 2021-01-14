<?php

namespace App\Http\Controllers\HR\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('hr.employees.index');
    }
    public function getProfile($code)
    {
        $employee = Employee::find($code);
        return view('hr.employees.profile.index', compact('employee'));
    }
}
