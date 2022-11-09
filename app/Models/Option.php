<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'value_id',
        'category_id'
    ];

    public function values()
    {
        return $this->hasMany(Value::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subOptions() {
        return $this->hasMany(Option::class, 'parent_id');
    }
}
