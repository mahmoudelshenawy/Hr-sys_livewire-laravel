<?php

namespace App\Http\Livewire\Tables;

use App\Models\Certification;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class CertificationsTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public Certification $certification;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return Certification::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function remove($id)
    {
        Certification::where('id', '=', $id)->delete();

        $this->builder();
    }

    public function columns()
    {
        return [
            NumberColumn::name('id')->filterable(),

            Column::name('name')->filterable()->searchable(),
            Column::name('description'),
            DateColumn::name('created_at')->filterable(),
            Column::callback(['id', 'name'], function ($id, $name) {
                return view('hr.master.certifications.btn.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
