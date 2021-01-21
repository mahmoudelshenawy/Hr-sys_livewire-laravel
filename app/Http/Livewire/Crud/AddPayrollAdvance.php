<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollAdvance;

class AddPayrollAdvance extends Component
{
    public $advance;


    public function mount()
    {
        $this->advance = new PayrollAdvance();
    }

    protected $rules = [
        'advance.employee_code' => 'required',
        'advance.month' => 'required',
        'advance.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->advance->save();
        $this->advance = new PayrollAdvance();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $advance = PayrollAdvance::find($id);
        $this->advance = $advance;
    }
    public function clearance()
    {
        $this->advance = new PayrollAdvance();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-advance');
    }
}
