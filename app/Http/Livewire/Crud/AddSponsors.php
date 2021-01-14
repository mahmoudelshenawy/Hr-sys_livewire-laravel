<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use App\Models\Sponsor;
use Livewire\WithFileUploads;

class AddSponsors extends Component
{
    use WithFileUploads;

    public $sponsor;
    public $photo;

    public function mount()
    {
        $this->sponsor = new Sponsor();
    }

    protected $rules = [
        'sponsor.name' => 'required|string',
        'sponsor.address' => 'nullable|string',
        'sponsor.type' => 'nullable|string',
        'sponsor.contact_number' => 'nullable|string',
        'sponsor.code' => 'nullable|numeric',
        'sponsor.image' => 'nullable',
        'photo' => 'nullable|image'
    ];

    protected $listeners = [
        'findSponsor' => 'findSponsor',
        'clearance' => 'clearance'
    ];

    public function save()
    {
        $this->validate();

        if ($this->photo !== null) {
            $filename = $this->photo->store('/public/sponsors');
            $this->sponsor->image = $filename;
        }
        $this->sponsor->save();
        $this->sponsor = new Sponsor();

        $this->emit('refreshAfterSubmit');
    }

    public function findSponsor($id)
    {
        $sponsor = Sponsor::find($id);
        $this->sponsor = $sponsor;
    }
    public function clearance()
    {
        $this->sponsor = new Sponsor();
    }
    public function render()
    {
        return view('livewire.crud.add-sponsors');
    }
}
