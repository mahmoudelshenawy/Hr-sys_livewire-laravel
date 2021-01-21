<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeSkill;

class AddSkill extends Component
{
    public $employee;
    public $skills = [];
    public $skill;
    protected $rules = [
        'skills' => 'required',
    ];

    public function mount()
    {
        $skill = EmployeeSkill::where('employee_code', '=', $this->employee->code)->first();
        if ($skill == null) {
            $this->skill = new EmployeeSkill();
        } else {
            $this->skill = $skill;
            $this->skills = explode(',', $this->skill->skills_name);
        }
    }
    public function save()
    {
        $this->validate();
        $skills = implode(',', $this->skills);
        $this->skill->employee_code = $this->employee->code;
        $this->skill->skills_name = $skills;
        $this->skill->save();
    }
    public function render()
    {
        return view('livewire.profile.add-skill');
    }
}
