<?php

namespace App\Http\Livewire\Tables;

use App\Models\Skill;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SkillsTable extends LivewireDatatable
{
    // public $model = Employee::class;
    public $exportable = true;
    public Skill $skill;
    public $hide = 'show';

    protected $listeners = [
        'refreshAfterSubmit' => 'refreshAfterSubmit',
    ];

    public function builder()
    {
        return Skill::query();
    }

    public function refreshAfterSubmit()
    {
        $this->builder();
    }

    public function remove($id)
    {
        Skill::where('id', '=', $id)->delete();

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
                return view('hr.master.skills.btn.table-actions', ['id' => $id, 'name' => $name]);
            })
        ];
    }
}
