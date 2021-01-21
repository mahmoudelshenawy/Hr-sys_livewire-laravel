<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Shift;

class AddShifts extends Component
{
    public $shift;
    public $weekend = [];


    public function mount()
    {
        $this->shift = new Shift();
    }

    protected $rules = [
        'shift.name' => 'required|string',
        'shift.check_in' => 'required|string',
        'shift.check_out' => 'required|string',
        'weekend' => 'required',
    ];

    protected $listeners = [
        'findShift' => 'findShift',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $days = implode(',', $this->weekend);
        $this->shift->weekend = $days;
        $this->shift->save();
        $this->shift = new shift();

        $this->emit('refreshAfterSubmit');
    }

    public function findShift($id)
    {
        $shift = Shift::find($id);
        $this->weekend = explode(',', $shift->weekend);
        $this->shift = $shift;
    }
    public function clearance()
    {
        $this->shift = new Shift();
    }
    public function render()
    {
        return view('livewire.crud.add-shifts');
    }
}
