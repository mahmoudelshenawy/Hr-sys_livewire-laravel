<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollAllowance extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-allowance')
            ->extends('layouts.app')
            ->section('content');
    }
}
