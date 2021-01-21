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
    public $showModal = false;

    protected $listeners = [
        'clearance' => 'clearance',
        'findValue' => 'findValue',
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
        'employee.gender' => 'required|string',
        'employee.birth_date' => 'nullable|date',
        'employee.marital_status' => 'required',
        'employee.military_service' => 'required',
        'employee.profile' => 'nullable|image',
        'profile' => 'nullable|image',
    ];

    public function save()
    {
        $this->validate();
        if ($this->profile !== null) {
            $filename = $this->profile->store('/public/employees/images/' . $this->employee->code);
            $url = Storage::url($filename);
            if ($this->employee->profile !== null) {
                Storage::delete($this->employee->profile_path);
            }
            $this->employee->profile = $url;
            $this->employee->profile_path = $filename;
        }
        $this->employee->save();
        $this->employee = new Employee();
        $this->emit('EmployeeAdded');
    }

    public function findValue($code)
    {
        $employee = Employee::find($code);
        $this->employee = $employee;
    }

    public function clearance()
    {
        $this->employee = new Employee();
    }

    public function changeModal()
    {
        $this->showModal = true;
    }
    public function hideModal()
    {
        $this->showModal = false;
    }
    public function render()
    {
        return view('livewire.crud.add-employee');
    }
}
