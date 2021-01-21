<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EmployeeContract extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function employee()
    {
        return $this->hasOne(Employee::class, 'employee_code');
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function administration()
    {
        return $this->belongsTo(Administration::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
