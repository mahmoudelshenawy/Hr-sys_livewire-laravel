<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class EmployeeReports extends Component
{
    public function render()
    {
        return view('livewire.pages.employee-reports')
            ->extends('layouts.app')
            ->section('content');
    }
}
