<?php

namespace App\Http\Livewire\Tables;

use App\Models\PayrollAllowance;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;

class PayrollAllowancesTable extends LivewireDatatable
{
    public $exportable = true;
    public $hide = 'show';
    // public $hideable = "select";
    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];
    public function builder()
    {
        return PayrollAllowance::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function delete($id)
    {
        PayrollAllowance::where('id', '=', $id)->delete();

        $this->builder();
    }
    public function columns()
    {
        return [
            Column::checkbox('id'),
            NumberColumn::name('employee_code')->filterable()->label('Employee Code'),

            Column::name('name')->callback(['employee.name', 'employee.profile'], function ($name, $value) {
                return view('components.employee-avatar', ['value' => $value, 'name' => $name]);
            })->filterable($this->employees)->searchable()->label('Employee'),
            Column::name('month')->callback(['month'], function ($month) {
                $dateObj   = \DateTime::createFromFormat('!m', $month);
                $monthName = $dateObj->format('F');
                return  $monthName;
            })->filterable($this->month)->searchable()->label('Month'),
            NumberColumn::name('amount')->filterable()->searchable(),
            Column::callback(['id'], function ($id) {
                return view('components.edit-table-btn', ['key' => $id, 'name' => 'Value', 'for' => 'addPayrollAllowance']);
            })->label('Edit'),
            Column::delete('id')->alignRight()->label('Delete')
        ];
    }
    public function getEmployeesProperty()
    {
        return Employee::pluck('name');
    }
    public function getMonthProperty()
    {
        // return config('enums.months');
        return ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
    }
}
