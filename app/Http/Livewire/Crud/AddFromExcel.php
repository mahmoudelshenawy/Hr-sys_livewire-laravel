<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PayrollOverTimeImport;
use App\Imports\PayrollAllowanceImport;
use App\Imports\PayrollAdvanceImport;
use App\Imports\PayrollCommissionImport;
use App\Imports\PayrollDelayPenaltyImport;
use App\Imports\PayrollAbsencePenaltyImport;

class AddFromExcel extends Component
{
    use WithFileUploads;

    public $model;
    public $month;
    public $file;

    protected $rules = [
        'file' => 'required|mimes:xls,xlsx, xlm, xla, xlc, xlt,xlw',
        'month' => 'required'
    ];

    public function save()
    {
        $this->validate();
        switch ($this->model) {
            case 'OverTime':
                Excel::import(new PayrollOverTimeImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            case 'Allowance':
                Excel::import(new PayrollAllowanceImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            case 'Advance':
                Excel::import(new PayrollAdvanceImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            case 'Commission':
                Excel::import(new PayrollCommissionImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            case 'DelayPenalty':
                Excel::import(new PayrollDelayPenaltyImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            case 'AbsencePenalty':
                Excel::import(new PayrollAbsencePenaltyImport($this->month), $this->file);
                $this->emit('refreshAfterSubmit');
                toastr()->info('uploaded successfully');
                break;
            default:
                # code...
                break;
        }
    }
    public function render()
    {
        return view('livewire.crud.add-from-excel');
    }
}
