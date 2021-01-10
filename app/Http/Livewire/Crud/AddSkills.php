<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Skill;

class AddSkills extends Component
{
    public $skill;


    public function mount()
    {
        $this->skill = new Skill();
    }

    protected $rules = [
        'skill.name' => 'required|string',
        'skill.description' => 'nullable|string',
    ];

    protected $listeners = [
        'findSkill' => 'findSkill'
    ];

    public function save()
    {

        $this->validate();
        $this->skill->save();
        $this->skill = new Skill();

        $this->emit('refreshAfterSubmit');
    }

    public function findSkill($id)
    {
        $skill = Skill::find($id);
        $this->skill = $skill;
    }
    public function render()
    {
        return view('livewire.crud.add-skills');
    }
}
