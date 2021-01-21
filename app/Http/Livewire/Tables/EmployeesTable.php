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
    public $hide = 'show';
    public $hideable = "select";
    protected $listeners = [
        'EmployeeAdded' => 'RefreshTable',
    ];


    public function builder()
    {
        return Employee::query();
    }


    public function RefreshTable()
    {
        $this->builder();
    }

    public function delete($code)
    {
        Employee::where('code', '=', $code)->delete();

        $this->builder();
    }
    public function columns()
    {
        return [
            Column::checkbox('code'),
            NumberColumn::name('profile')->view('components.employee-image'),
            NumberColumn::name('code')->filterable(),
            Column::name('name')->filterable()->searchable(),
            Column::name('email')->truncate()->filterable()->searchable(),
            Column::name('address')->filterable()->searchable(),
            Column::name('marital_status'),
            Column::name('military_service'),
            Column::name('phone'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['code'], function ($code) {
                return view('components.edit-table-btn', ['key' => $code, 'name' => 'Value', 'for' => 'addEmployee']);
            })->label('Edit'),
            Column::delete('code')->alignRight()->label('Delete')
        ];
    }
}
