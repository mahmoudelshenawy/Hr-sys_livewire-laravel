<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    public $incrementing = false;
    protected $guarded = [];
    protected $appends = ['image'];

    public function getImageAttribute()
    {
        $trancated = explode('/', $this->profile);
        // $path = "storage/" . $trancated[1] . '/' . $trancated[2];
        return $trancated;
    }

    public function contract()
    {
        return $this->hasOne(EmployeeContract::class);
    }
    public function archive()
    {
        return $this->hasOne(EmployeeArchive::class);
    }
    public function education()
    {
        return $this->hasOne(EmployeeEducation::class);
    }
    public function skill()
    {
        return $this->hasOne(EmployeeSkill::class);
    }
    public function identification()
    {
        return $this->hasOne(EmployeeIdentification::class);
    }
    public function financial()
    {
        return $this->hasOne(EmployeeFinancial::class);
    }
}
