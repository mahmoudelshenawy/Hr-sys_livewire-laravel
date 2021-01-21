<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Companion;

class AddCompanion extends Component
{
    public $person;


    public function mount()
    {
        $this->person = new Companion();
    }

    protected $rules = [
        'person.name' => 'required|string',
        'person.employee_code' => 'required|string',
        'person.relation_level' => 'required|string',
        'person.national_id' => 'nullable|string',
        'person.residence_number' => 'nullable|numeric',
        'person.medical_insurance_number' => 'nullable|numeric',
        'person.birth_date' => 'nullable|string',
    ];

    public function save()
    {
        $this->validate();
        $this->person->save();
        $this->person = new Companion();
        $this->emit('refreshAfterSubmit');
    }
    public function render()
    {
        return view('livewire.crud.add-companion');
    }
}
