<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Shifts extends Component
{
    public function render()
    {
        return view('livewire.pages.shifts')
            ->extends('layouts.app')
            ->section('content');
    }
}
