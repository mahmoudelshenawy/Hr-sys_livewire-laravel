<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollAllowance;

class AddPayrollAllowance extends Component
{
    public $allowance;


    public function mount()
    {
        $this->allowance = new PayrollAllowance();
    }

    protected $rules = [
        'allowance.employee_code' => 'required',
        'allowance.month' => 'required',
        'allowance.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->allowance->save();
        $this->allowance = new PayrollAllowance();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $allowance = PayrollAllowance::find($id);
        $this->allowance = $allowance;
    }
    public function clearance()
    {
        $this->allowance = new PayrollAllowance();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-allowance');
    }
}
