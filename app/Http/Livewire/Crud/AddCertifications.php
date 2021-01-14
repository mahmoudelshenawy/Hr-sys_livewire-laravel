<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Certification;

class AddCertifications extends Component
{
    public $certification;


    public function mount()
    {
        $this->certification = new Certification();
    }

    protected $rules = [
        'certification.name' => 'required|string',
        'certification.description' => 'nullable|string',
    ];

    protected $listeners = [
        'findCertification' => 'findCertification',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->certification->save();
        $this->certification = new Certification();

        $this->emit('refreshAfterSubmit');
    }

    public function findCertification($id)
    {
        $certification = Certification::find($id);
        $this->certification = $certification;
    }
    public function clearance()
    {
        $this->certification = new Certification();
    }
    public function render()
    {
        return view('livewire.crud.add-certifications');
    }
}
