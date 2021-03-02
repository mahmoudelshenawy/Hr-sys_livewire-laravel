<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->hasOne(category::class, 'id', 'category_id');
    }
    public function subCategories()
    {
        return $this->hasOne(category::class, 'id', 'sub_category_id');
    }

    public function scopeSearch($query, $value)
    {
        return $query->where('name', 'like', '%' . $value . '%')
            ->orWhere('desc', 'like', '%' . $value . '%')
            ->orWhereHas('tags', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            })
            ->orWhereHas('categories', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            })
            ->orWhereHas('subCategories', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            });
    }
}
// Order::whereHas('customer.country', function ($innerQuery) {
//     $innerQuery->where('countries.name', 'LIKE', 'Uk');
// })->get();
