<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeEducation;

class AddEducation extends Component
{
    public $employee;
    public $educations = [];
    public $education;
    protected $rules = [
        'educations' => 'required',
    ];

    public function mount()
    {
        $education = EmployeeEducation::where('employee_code', '=', $this->employee->code)->first();
        if ($education == null) {
            $this->education = new EmployeeEducation();
        } else {
            $this->education = $education;
            $this->educations = explode(',', $this->education->educations_name);
        }
    }
    public function save()
    {
        $this->validate();
        $educations = implode(',', $this->educations);
        $this->education->employee_code = $this->employee->code;
        $this->education->educations_name = $educations;
        $this->education->save();
    }
    public function render()
    {
        return view('livewire.profile.add-education');
    }
}
