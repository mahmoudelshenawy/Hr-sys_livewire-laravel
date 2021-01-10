<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Employee;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AddEmployee extends Component
{
    use WithFileUploads;
    public $employee;
    public $toUpdate = false;
    public $profile;
    protected $listeners = [
        'findEmployee' => 'findEmployee',
        'clearEmployee' => 'clearEmployee'
    ];
    function mount()
    {
        $this->employee = new Employee();
    }
    protected $rules = [
        'employee.name' => 'required|string',
        'employee.en_name' => 'nullable|string',
        'employee.short_name' => 'nullable|string',
        'employee.email' => 'nullable|string',
        'employee.phone' => 'nullable|string',
        'employee.alt_phone' => 'nullable|string',
        'employee.address' => 'nullable|string',
        'employee.religion' => 'nullable|string',
        'employee.country_id' => 'nullable|numeric',
        'employee.birth_date' => 'nullable|string',
        'employee.passport_number' => 'nullable|numeric',
        'employee.id_number' => 'nullable|numeric',
        'employee.profile' => 'nullabel|image',
        'profile' => 'image',
    ];

    public function save()
    {

        $this->validate();
        if ($this->profile !== null) {
            $filename = $this->profile->store('/public/employees');
            $this->employee->profile = $filename;
        }

        $this->employee->save();
        $this->employee = new Employee();
        $this->emit('EmployeeAdded', $this->employee);
    }

    public function findEmployee($code)
    {
        $employee = Employee::find($code);
        $this->employee = $employee;
        $this->toUpdate = true;
    }
    public function ClearEmployee()
    {
        $this->employee = new Employee();
    }
    public function render()
    {
        return view('livewire.crud.add-employee');
    }
}
