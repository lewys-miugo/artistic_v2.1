<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Color extends Model
{
    use HasFactory;
    // protected $table = "colors";

    public function subColors()
    {
        return $this->hasMany(SubColor::class,'color_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class,'color_id');
    }
}
