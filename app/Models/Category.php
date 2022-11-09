<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
    ];

    public static function mainCategories()
    {
        return self::where('parent_id', 0)->get();
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

}
