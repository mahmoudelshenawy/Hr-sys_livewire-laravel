<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainOfficeSettings extends Model
{
    use HasFactory;
    protected $primaryKey = 'code';
    protected $guarded = [];
}
