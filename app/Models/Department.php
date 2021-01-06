<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    protected $guarded = [];
    public function branch()
    {
        $this->belongsTo(\App\Models\Branch::class);
    }
}
