<?php

namespace App\Http\Livewire\Tables;

use App\Models\InsurranceCompany;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class InsurranceCompaniesTable extends LivewireDatatable
{
    public $exportable = true;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return InsurranceCompany::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }
    public function delete($id)
    {
        InsurranceCompany::where('id', '=', $id)->delete();

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
            Column::callback(['id'], function ($id) {
                return view('components.edit-table-btn', ['key' => $id, 'name' => 'Company', 'for' => 'addInsurranceCompany']);
            }),
            Column::delete('id')->alignRight()
        ];
    }
}
