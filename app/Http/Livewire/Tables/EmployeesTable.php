<?php

namespace App\Http\Livewire\Tables;

use App\Models\Employee;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class EmployeesTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public Employee $employee;
    public $hide = 'show';
    protected $listeners = [
        'EmployeeAdded' => 'RefreshTable',
        'EmployeeUpdated' => 'refresh'
    ];


    public function builder()
    {
        return Employee::query();
    }

    public function remove($code)
    {
        Employee::where('code', '=', $code)->delete();

        $this->builder();
    }

    public function RefreshTable()
    {
        $this->builder();
    }
    public function refresh($employee)
    {
        $this->builder($employee = $employee);
    }
    public function columns()
    {
        return [
            NumberColumn::name('code')->filterable(),

            Column::name('name')->filterable()->searchable(),

            Column::name('email')->truncate()->filterable()->searchable(),
            Column::name('religion')->filterable(),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['code', 'name'], function ($code, $name) {
                return view('hr.employees.btn.table-actions', ['code' => $code, 'name' => $name, 'hide' => $this->hide]);
            })
        ];
    }
}
