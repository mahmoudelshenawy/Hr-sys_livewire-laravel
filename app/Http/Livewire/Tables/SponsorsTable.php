<?php

namespace App\Http\Livewire\Tables;

use App\Models\Sponsor;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SponsorsTable extends LivewireDatatable
{
    public $exportable = true;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return Sponsor::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function delete($id)
    {
        Sponsor::where('id', '=', $id)->delete();

        $this->builder();
    }

    public function columns()
    {
        return [
            Column::checkbox(),
            NumberColumn::name('id')->filterable(),
            Column::name('name')->filterable()->searchable(),
            Column::name('address'),
            Column::name('type'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id'], function ($id) {
                return view('components.edit-table-btn', ['key' => $id, 'name' => 'Sponsor', 'for' => 'addSponsor']);
            }),
            Column::delete('id')->alignRight()
        ];
    }
}
