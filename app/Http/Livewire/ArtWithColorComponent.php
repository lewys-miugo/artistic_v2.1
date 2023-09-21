<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;
use App\Models\SubColor;

class ArtWithColorComponent extends Component
{
    public $color;
    public $products;

    public function mount($slug)
    {
        // Load the color and its subcolors based on the slug
        $this->color = Color::where('slug', $slug)->with('subColors')->firstOrFail();

        // Load products associated with the color
        $this->products = $this->color->products;
    }

    public function render()
    {
        return view('livewire.art-with-color-component');
    }
}
