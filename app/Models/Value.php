<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Value extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'option_id',
    ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
