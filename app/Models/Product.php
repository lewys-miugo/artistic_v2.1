<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{

    use HasFactory;

    protected $table='products';

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class,'theme_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class,'color_id');
    }

    public function subColors()
    {
        return $this->belongsTo(SubColor::class,'subcolor_id');
    }
}
