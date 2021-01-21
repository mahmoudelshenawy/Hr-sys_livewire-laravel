<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollCommission extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-commission')
            ->extends('layouts.app')
            ->section('content');
    }
}
