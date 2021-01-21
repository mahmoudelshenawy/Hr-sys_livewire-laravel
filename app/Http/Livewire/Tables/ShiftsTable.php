<?php

namespace App\Http\Livewire\Tables;

use App\Models\Shift;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ShiftsTable extends LivewireDatatable
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
        return Shift::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function delete($id)
    {
        Shift::where('id', '=', $id)->delete();

        $this->builder();
    }
    public function columns()
    {
        return [
            Column::checkbox('id'),
            NumberColumn::name('id')->filterable(),
            Column::name('name')->filterable()->searchable(),
            Column::name('check_in'),
            Column::name('check_out'),
            Column::name('weekend'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id'], function ($id) {
                return view('components.edit-table-btn', ['key' => $id, 'name' => 'Shift', 'for' => 'addShift']);
            }),
            Column::delete('id')->alignRight()
        ];
    }
}
