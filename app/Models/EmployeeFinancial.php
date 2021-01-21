<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFinancial extends Model
{
    use HasFactory;
    protected $fillable = [
        'basic_salary',
        'unfixed_salary',
        'basic_insurance',
        'unfixed_insurance',
    ];
}
