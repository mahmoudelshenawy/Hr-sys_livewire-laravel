<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\EmploymentStatus;

class AddEmploymentStatus extends Component
{
    public $status;


    public function mount()
    {
        $this->status = new EmploymentStatus();
    }

    protected $rules = [
        'status.name' => 'required|string',
        'status.description' => 'nullable|string',
    ];

    protected $listeners = [
        'findEmpStatus' => 'findEmpStatus'
    ];

    public function save()
    {

        $this->validate();
        $this->status->save();
        $this->status = new EmploymentStatus();

        $this->emit('refreshAfterSubmit');
    }

    public function findEmpStatus($id)
    {
        $status = EmploymentStatus::find($id);
        $this->status = $status;
    }
    public function render()
    {
        return view('livewire.crud.add-employment-status');
    }
}
