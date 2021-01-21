<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollAdvance extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-advance')
            ->extends('layouts.app')
            ->section('content');
    }
}
