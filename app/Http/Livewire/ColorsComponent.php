<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;

class ColorsComponent extends Component
{
    public function render()
    {
        $colors=Color::all();

        return view('livewire.colors-component',['colors'=>$colors]);
    }
}
