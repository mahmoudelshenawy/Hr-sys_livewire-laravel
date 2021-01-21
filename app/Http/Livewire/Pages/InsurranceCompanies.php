<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class InsurranceCompanies extends Component
{
    public function render()
    {
        return view('livewire.pages.insurrance-companies')
            ->extends('layouts.app')
            ->section('content');
    }
}
