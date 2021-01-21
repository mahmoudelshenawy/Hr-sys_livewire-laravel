<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollCommission;

class AddPayrollCommission extends Component
{
    public $commission;


    public function mount()
    {
        $this->commission = new PayrollCommission();
    }

    protected $rules = [
        'commission.employee_code' => 'required',
        'commission.month' => 'required',
        'commission.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->commission->save();
        $this->commission = new PayrollCommission();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $commission = PayrollCommission::find($id);
        $this->commission = $commission;
    }
    public function clearance()
    {
        $this->commission = new PayrollCommission();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-commission');
    }
}
