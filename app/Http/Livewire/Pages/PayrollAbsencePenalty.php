<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class PayrollAbsencePenalty extends Component
{
    public function render()
    {
        return view('livewire.pages.payroll-absence-penalty')
            ->extends('layouts.app')
            ->section('content');
    }
}
