<?php

namespace App\Http\Livewire\Tables;

use App\Models\Language;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LanguagesTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public Language $language;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return Language::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function remove($id)
    {
        Language::where('id', '=', $id)->delete();

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
                return view('hr.master.languages.btn.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
