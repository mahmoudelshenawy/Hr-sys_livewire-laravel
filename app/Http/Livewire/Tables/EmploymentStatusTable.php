<?php

namespace App\Http\Livewire\Tables;

use App\Models\EmploymentStatus;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class EmploymentStatusTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public EmploymentStatus $status;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return EmploymentStatus::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function remove($id)
    {
        EmploymentStatus::where('id', '=', $id)->delete();

        $this->builder();
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            NumberColumn::name('id')->filterable(),

            Column::name('name')->filterable()->searchable(),
            Column::name('description'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('hr.master.employment-status.btn.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
