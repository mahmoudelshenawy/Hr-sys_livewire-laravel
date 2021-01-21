<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Employee;

class EmployeeProfile extends Component
{
    public $employee;
    public function mount(Employee $employee)
    {
        $this->employee = $employee;
    }
    public function render()
    {
        return view('livewire.pages.employee-profile')
            ->extends('layouts.app')
            ->section('content');
    }
}
