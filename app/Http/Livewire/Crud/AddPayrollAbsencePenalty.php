<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\PayrollAbsencePenalty;

class AddPayrollAbsencePenalty extends Component
{
    public $absence;


    public function mount()
    {
        $this->absence = new PayrollAbsencePenalty();
    }

    protected $rules = [
        'absence.employee_code' => 'required',
        'absence.month' => 'nullable',
        'absence.days' => 'nullable',
        'absence.amount' => 'required',
    ];

    protected $listeners = [
        'findValue' => 'findValue',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->absence->save();
        $this->absence = new PayrollAbsencePenalty();

        $this->emit('refreshAfterSubmit');
    }

    public function findValue($id)
    {
        $absence = PayrollAbsencePenalty::find($id);
        $this->absence = $absence;
    }
    public function clearance()
    {
        $this->absence = new PayrollAbsencePenalty();
    }
    public function render()
    {
        return view('livewire.crud.add-payroll-absence-penalty');
    }
}
