<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollOverTime;

class AddPayrollOverTime extends Component
{
    public $overtime;


    public function mount()
    {
        $this->overtime = new PayrollOverTime();
    }

    protected $rules = [
        'overtime.employee_code' => 'required',
        'overtime.month' => 'required',
        'overtime.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->overtime->save();
        $this->overtime = new PayrollOverTime();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $overtime = PayrollOverTime::find($id);
        $this->overtime = $overtime;
    }
    public function clearance()
    {
        $this->overtime = new PayrollOverTime();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-over-time');
    }
}
