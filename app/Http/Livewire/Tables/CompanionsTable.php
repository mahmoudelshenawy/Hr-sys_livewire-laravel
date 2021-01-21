<?php

namespace App\Http\Livewire\Tables;

use App\Models\Companion;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CompanionsTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public $hide = 'show';
    public $hideable = "select";
    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];


    public function builder()
    {
        return Companion::query();
    }

    public function remove($id)
    {
        Companion::where('id', '=', $id)->delete();

        $this->builder();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function delete($id)
    {
        Companion::where('id', '=', $id)->delete();

        $this->builder();
    }
    public function columns()
    {
        return [
            Column::checkbox('id'),
            NumberColumn::name('name')->filterable(),
            Column::name('relation_level')->filterable()->searchable(),
            Column::name('employee.name')->filterable()->searchable()->label('With'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('hr.employees.companions.btn.table-action', ['id' => $id, 'name' => $name]);
            }),
            Column::delete('id')->alignRight()
        ];
    }
}
