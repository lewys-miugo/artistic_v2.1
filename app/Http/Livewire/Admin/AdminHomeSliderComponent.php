<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;

class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $slides = HomeSlider::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.admin-home-slider-component', ['slides'=>$slides]);
    }
}
