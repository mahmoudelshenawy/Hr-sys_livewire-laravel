<?php

namespace App\Http\Livewire\Tables;

use App\Models\Employee;
use App\Models\Branch;
use App\Models\Department;
use App\Models\Administration;
use App\Models\Job;
use Illuminate\Support\Carbon;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\DB;

class EmployeesReport extends LivewireDatatable
{
    // public $afterTableSlot = 'components.selected';
    public $exportable = true;
    public function builder()
    {
        return Employee::query();
    }

    public function columns()
    {
        return [
            Column::checkbox('code'),
            Column::name('profile')->view('components.employee-image'),
            NumberColumn::name('code')->filterable()->label('Code'),
            Column::name('name')->filterable()->searchable(),
            Column::callback(['contract.supervisor_code'], function ($id) {
                return DB::table('employees')->where('code', $id)->value('name') ?? 'NO Supervisor';
            })->label('Supervisor'),
            Column::name('identification.nationality')->filterable()->searchable(),
            Column::name('contract.branch.name')->filterable($this->branchs)->label('Branch'),
            Column::name('contract.department.name')->filterable($this->departments)->label('Department'),
            Column::name('contract.administration.name')->filterable($this->administrations)->label('Administration'),
            Column::name('contract.job.name')->filterable($this->jobs)->label('Job'),
        ];
    }

    public function getBranchsProperty()
    {
        return Branch::pluck('name');
    }
    public function getAdministrationsProperty()
    {
        return Administration::pluck('name');
    }
    public function getDepartmentsProperty()
    {
        return Department::pluck('name');
    }
    public function getJobsProperty()
    {
        return Job::pluck('name');
    }
    public function getEmployeesProperty()
    {
        return Employee::pluck('name');
    }
}
