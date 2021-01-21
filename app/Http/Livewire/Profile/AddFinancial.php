<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeFinancial;

class AddFinancial extends Component
{
    protected $rules = [
        'financial.basic_salary' => 'required|numeric',
        'financial.unfixed_salary' => 'required|numeric',
        'financial.basic_insurance' => 'required|numeric',
        'financial.unfixed_insurance' => 'required|numeric',
    ];

    public $financial;
    public $employee;
    public function mount()
    {
        $financial = EmployeeFinancial::where('employee_code', '=', $this->employee->code)->first();
        if ($financial == null) {
            $this->financial = new EmployeeFinancial();
        } else {
            $this->financial = $financial;
        }
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.profile.add-financial');
    }
}
