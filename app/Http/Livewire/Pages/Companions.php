<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Companions extends Component
{
    public function render()
    {
        return view('livewire.pages.companions')
            ->extends('layouts.app')
            ->section('content');
    }
}
