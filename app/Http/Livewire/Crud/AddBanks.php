<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Bank;

class AddBanks extends Component
{
    public $bank;


    public function mount()
    {
        $this->bank = new Bank();
    }

    protected $rules = [
        'bank.name' => 'required|string',
        'bank.address' => 'nullable|string',
        'bank.contact_number' => 'nullable|string',
        'bank.code' => 'nullable|numeric',
    ];

    protected $listeners = [
        'findBank' => 'findBank',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->bank->save();
        $this->bank = new Bank();

        $this->emit('refreshAfterSubmit');
    }

    public function findBank($id)
    {
        $bank = Bank::find($id);
        $this->bank = $bank;
    }
    public function clearance()
    {
        $this->bank = new Bank();
    }
    public function render()
    {
        return view('livewire.crud.add-banks');
    }
}
