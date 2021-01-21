<?php

namespace App\Http\Livewire\Widgets;

use Livewire\Component;

class AddModal extends Component
{
    public $name;
    public $title;
    public $sectedKey;
    public $allowexcel = false;

    public function render()
    {
        return view('livewire.widgets.add-modal');
    }
}
