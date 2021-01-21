<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use App\Models\EmployeeArchive;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class AddArchive extends Component
{
    use WithFileUploads;
    public $employee;
    public $archive;
    public $photo;
    public $file;
    public function mount()
    {
        $this->archive = new EmployeeArchive();
    }
    public function savePhoto()
    {
        $this->validate([
            'photo' => 'required|image',
        ]);
        if ($this->photo !== null) {
            $filename = $this->photo->store('/public/employees/images/' . $this->employee->code);
            $url = Storage::url($filename);

            $this->archive->employee_code = $this->employee->code;
            $this->archive->filename = $filename;
            $this->archive->path = $url;
            $this->archive->save();
            $this->archive = new EmployeeArchive();
        }
    }

    public function saveDocument()
    {
        $this->validate([
            'file' => 'required|file',
        ]);
        if ($this->file !== null) {
            $filename = $this->file->store('/public/employees/documents/' . $this->employee->code);
            $url = Storage::url($filename);

            $this->archive->employee_code = $this->employee->code;
            $this->archive->filename = $filename;
            $this->archive->path = $url;
            $this->archive->save();
            $this->archive = new EmployeeArchive();
        }
    }
    public function render()
    {
        return view('livewire.profile.add-archive');
    }
}
