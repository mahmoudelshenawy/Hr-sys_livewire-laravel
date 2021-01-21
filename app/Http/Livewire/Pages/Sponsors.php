<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Sponsors extends Component
{
    public function render()
    {
        return view('livewire.pages.sponsors')
            ->extends('layouts.app')
            ->section('content');
    }
}
