<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollOverTime extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-over-time')
            ->extends('layouts.app')
            ->section('content');
    }
}
