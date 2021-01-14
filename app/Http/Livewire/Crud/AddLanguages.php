<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Language;

class AddLanguages extends Component
{
    public $language;


    public function mount()
    {
        $this->language = new Language();
    }

    protected $rules = [
        'language.name' => 'required|string',
        'language.description' => 'nullable|string',
    ];

    protected $listeners = [
        'findLanguage' => 'findLanguage',
        'clearance' => 'clearance'
    ];

    public function save()
    {

        $this->validate();
        $this->language->save();
        $this->language = new Language();

        $this->emit('refreshAfterSubmit');
    }

    public function findLanguage($id)
    {
        $language = Language::find($id);
        $this->language = $language;
    }
    public function clearance()
    {
        $this->language = new Language();
    }
    public function render()
    {
        return view('livewire.crud.add-languages');
    }
}
