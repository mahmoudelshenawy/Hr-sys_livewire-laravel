<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Education;

class AddEducations extends Component
{
    public $education;


    public function mount()
    {
        $this->education = new Education();
    }

    protected $rules = [
        'education.name' => 'required|string',
        'education.description' => 'nullable|string',
    ];

    protected $listeners = [
        'findEducation' => 'findEducation'
    ];

    public function save()
    {

        $this->validate();
        $this->education->save();
        $this->education = new Education();

        $this->emit('refreshAfterSubmit');
    }

    public function findEducation($id)
    {
        $education = Education::find($id);
        $this->education = $education;
    }
    public function render()
    {
        return view('livewire.crud.add-educations');
    }
}
