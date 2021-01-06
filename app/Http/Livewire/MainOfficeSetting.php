<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MainOfficeSettings;
use Livewire\WithFileUploads;

class MainOfficeSetting extends Component
{
    use WithFileUploads;
    // public $name;
    // public $phone;
    // public $email;
    // public $logo;
    // public $address;
    // public $country;
    // public $fax;
    // public $website;

    public $business;

    function mount()
    {
        $this->business = new MainOfficeSettings();
    }


    protected $rules = [
        'business.name' => 'required|string',
        'business.phone' => 'nullable',
        'business.email' => 'nullable',
        'business.address' => 'nullable',
        'business.country' => 'nullable',
        'business.fax' => 'nullable',
        'business.website' => 'nullable',
        'business.logo' => 'image'
    ];

    public function save()
    {
        $this->validate();
        $this->business->save();
    }

    public function render()
    {
        return view('livewire.main-office-setting');
    }
}
