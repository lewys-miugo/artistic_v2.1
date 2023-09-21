<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubColor extends Model
{
    use HasFactory;
    // protected $table = "colors";

    public function color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'subcolor_id');
    }
}
