<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollDelayPenalty extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-delay-penalty')
            ->extends('layouts.app')
            ->section('content');
    }
}
