<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\InsurranceCompany;

class AddInsurranceCompanies extends Component
{
    public $insurrance;


    public function mount()
    {
        $this->insurrance = new InsurranceCompany();
    }

    protected $listeners = [
        'findCompany' => 'findCompany',
        'clearance'   => 'clearance'

    ];
    protected $rules = [
        'insurrance.name' => 'required|string',
        'insurrance.address' => 'nullable|string',
        'insurrance.contact_number' => 'nullable|string',
        'insurrance.code' => 'nullable|numeric',
    ];



    public function save()
    {

        $this->validate();
        $this->insurrance->save();
        $this->insurrance = new InsurranceCompany();

        $this->emit('refreshAfterSubmit');
    }
    public function findCompany($id)
    {
        $insurrance = InsurranceCompany::find($id);
        $this->insurrance = $insurrance;
    }

    public function clearance()
    {
        $this->insurrance = new InsurranceCompany();
    }
    public function render()
    {
        return view('livewire.crud.add-insurrance-companies');
    }
}
