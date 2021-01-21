<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Branch;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class DemoTest extends Component
{

    use WithFileUploads;

    public $photo;
    public $url;
    public $location;
    protected $rules = [
        'photo' => 'required|file'
    ];

    public function mount()
    {
        $this->location = 'public/testing/aL0B4kgdY2Es0394H5L8UIThJYpWNIn6oXf7lybm.jpg';
        $this->url =  Storage::url('public/testing/aL0B4kgdY2Es0394H5L8UIThJYpWNIn6oXf7lybm.jpg');
    }
    public function remove()
    {
        Storage::delete($this->location);

        $this->url = '';
    }
    public function publish()
    {
        $this->validate();

        if ($this->photo !== null) {
            $filename = $this->photo->store('/public/testing');
            dd($filename);
        }


        return 'has that done';
    }
    public function render()
    {
        return view('livewire.demo-test');
    }
}
