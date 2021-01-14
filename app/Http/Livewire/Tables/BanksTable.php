<?php

namespace App\Http\Livewire\Tables;

use App\Models\Bank;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class BanksTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return Bank::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function remove($id)
    {
        Bank::where('id', '=', $id)->delete();

        $this->builder();
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            NumberColumn::name('id')->filterable(),

            Column::name('name')->filterable()->searchable(),
            Column::name('Address'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('hr.master.banks.btn.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
