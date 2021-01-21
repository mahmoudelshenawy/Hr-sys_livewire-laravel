<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Banks extends Component
{
    public function render()
    {
        return view('livewire.pages.banks')
            ->extends('layouts.app')
            ->section('content');
    }
}
