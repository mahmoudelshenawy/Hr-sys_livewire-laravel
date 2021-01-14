<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeContract;

class AddContract extends Component
{
    public $employee;
    public $contract;
    public  $attendable = false;
    public  $hasAnnualVacation = false;
    public $hasTerminalBonus = false;
    protected $rules = [
        'contract.employment_status_id' => 'required|numeric',
        'contract.branch_id' => 'required',
        'contract.administration_id' => 'required',
        'contract.department_id' => 'required',
        'contract.job_id' => 'required',
        'contract.supervisor_id' => 'nullable',
        'contract.attendable' => 'nullable|boolean',
        'contract.has_annual_vacation' => 'nullable|boolean',
        'contract.has_terminal_bonus' => 'nullable|boolean',
        'contract.date_of_hiring' => 'nullable',
        'contract.start_of_contract' => 'nullable',
        'contract.end_of_contract' => 'nullable',
        'contract.days_of_annual_vacation' => 'nullable',
        'contract.days_of_terminal_bonus' => 'nullable',
    ];
    public function mount()
    {
        $contract = EmployeeContract::where('employee_code', '=', $this->employee->code)->first();
        if ($contract == null) {
            $this->contract = new EmployeeContract();
        } else {
            $this->contract = $contract;
            $this->hasAnnualVacation = $this->contract->has_annual_vacation;
            $this->attendable = $this->contract->attendable;
            $this->hasTerminalBonus = $this->contract->has_terminal_bonus;
        }
    }

    public function updatedAttendable()
    {
        $this->attendable != $this->attendable;
        switch ($this->attendable) {
            case true:
                $this->contract->attendable = 1;
                break;
            case false:
                $this->contract->attendable = 0;
            default:
                $this->contract->attendable = null;
                break;
        }
    }
    public function updatedHasTerminalBonus()
    {
        $this->hasTerminalBonus != $this->hasTerminalBonus;
        $this->contract->has_terminal_bonus = $this->hasTerminalBonus;
    }
    public function updatedHasAnnualVacation()
    {
        $this->hasAnnualVacation != $this->hasAnnualVacation;
        $this->contract->has_annual_vacation = $this->hasAnnualVacation;
    }

    public function save()
    {
        $this->validate();
        $this->contract->employee_code = $this->employee->code;
        $this->contract->save();
        session()->flash('message', 'documnet has saved');
    }
    public function render()
    {
        return view('livewire.profile.add-contract');
    }
}
