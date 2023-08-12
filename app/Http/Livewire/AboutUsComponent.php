<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\AboutUs;


class AboutUsComponent extends Component
{
    public function render()
    {
        $aboutus=AboutUs::first();

        return view('livewire.about-us-component',['aboutus'=>$aboutus]);
    }
}
