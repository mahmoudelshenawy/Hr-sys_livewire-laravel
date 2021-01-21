<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollDelayPenalty;

class AddPayrollDelayPenalty extends Component
{
    public $delay;


    public function mount()
    {
        $this->delay = new PayrollDelayPenalty();
    }

    protected $rules = [
        'delay.employee_code' => 'required',
        'delay.month' => 'nullable',
        'delay.duration' => 'nullable',
        'delay.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->delay->save();
        $this->delay = new PayrollDelayPenalty();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $delay = PayrollDelayPenalty::find($id);
        $this->delay = $delay;
    }
    public function clearance()
    {
        $this->delay = new PayrollDelayPenalty();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-delay-penalty');
    }
}
