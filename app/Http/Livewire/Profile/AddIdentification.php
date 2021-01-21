<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeIdentification;

class AddIdentification extends Component
{

    public $employee;
    public  $identify;

    public function mount()
    {
        $identify = EmployeeIdentification::where('employee_code', '=', $this->employee->code)->first();
        if ($identify == null) {
            $this->identify = new EmployeeIdentification();
        } else {
            $this->identify = $identify;
        }
    }
    protected $rules = [
        'identify.passport_number' => 'required',
        'identify.passport_release_date' => 'required',
        'identify.passport_expire_date' => 'required',
        'identify.id_number' => 'nullable',
        'identify.id_release_date' => 'nullable',
        'identify.id_expire_date' => 'nullable',
        'identify.residency_number' => 'nullable',
        'identify.residency_release_date' => 'nullable',
        'identify.residency_expire_date' => 'nullable',
        'identify.deriving_license_number' => 'nullable',
        'identify.license_release_date' => 'nullable',
        'identify.license_expire_date' => 'nullable',
        'identify.health_certification_number' => 'nullable',
        'identify.health_certification_release_date' => 'nullable',
        'identify.health_certification_expire_date' => 'nullable',
        'identify.health_certification_cancel_date' => 'nullable',
        'identify.country_id' => 'nullable',
        'identify.sponsor_id' => 'nullable',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $this->validate();
        $this->identify->employee_code = $this->employee->code;
        $this->identify->save();
        return session('success', 'success');
    }
    public function render()
    {
        return view('livewire.profile.add-identification');
    }
}
