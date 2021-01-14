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
}
