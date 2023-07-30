<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubColor extends Model
{
    use HasFactory;

    public function color()
    {
        $this->belongsTo(Color::class);
    }
}
