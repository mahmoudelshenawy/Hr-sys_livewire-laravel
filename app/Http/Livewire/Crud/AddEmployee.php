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
        'clearance' => 'clearance'
    ];
    function mount()
    {
        $this->employee = new Employee();
    }
    protected $rules = [
        'employee.code' => 'required|string',
        'employee.name' => 'required|string',
        'employee.en_name' => 'nullable|string',
        'employee.short_name' => 'nullable|string',
        'employee.email' => 'nullable|string',
        'employee.phone' => 'nullable|string',
        'employee.alt_phone' => 'nullable|string',
        'employee.address' => 'nullable|string',
        'employee.religion' => 'nullable|string',
        'employee.gender' => 'nullable|string',
        'employee.birth_date' => 'nullable|date',
        'employee.marital_status' => 'nullable',
        'employee.military_service' => 'nullable',
        'employee.profile' => 'nullable|image',
        'profile' => 'nullable|image',
    ];

    public function save()
    {
        $this->validate();
        if ($this->profile !== null) {
            $filename = $this->profile->store('/public/employees');
            if ($this->employee->profile !== null) {
                Storage::delete($this->employee->profile);
            }
            $this->employee->profile = $filename;
        }
        $this->employee->save();
        $this->employee = new Employee();
        $this->emit('EmployeeAdded');
    }

    public function findEmployee($code)
    {
        $employee = Employee::find($code);
        $this->employee = $employee;
        $this->toUpdate = true;
    }

    public function clearance()
    {
        $this->employee = new Employee();
    }
    public function render()
    {
        return view('livewire.crud.add-employee');
    }
}
