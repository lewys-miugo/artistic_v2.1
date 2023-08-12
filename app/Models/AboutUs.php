<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable =[
        'delivery_policy',
        'general',
        'general_image',
        'our_vision',
        'vision_image',
        'our_objective',
        'objective_image',
        'our_art',
        'art_image',
    ];
}
