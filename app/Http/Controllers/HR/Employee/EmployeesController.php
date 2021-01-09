<?php

namespace App\Http\Controllers\HR\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('hr.employees.index');
    }
}
