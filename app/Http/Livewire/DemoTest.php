<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class DemoTest extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $testInput;
    public $browser;
    public $country;
    public $shot;
    public $testFile;

    public function updateBrowser($value)
    {
        dd($value);
    }
    public function updatedCountry($value)
    {
        dd($value);
    }
    public function updatedShot($value)
    {
        dd($value);
    }
    public function render()
    {
        return view('livewire.demo-test', [
            'users' => User::paginate(10)
        ]);
    }
}
