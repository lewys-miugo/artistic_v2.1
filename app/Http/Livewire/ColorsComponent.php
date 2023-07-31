<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;
use App\Models\SubColor;


class ColorsComponent extends Component
{
    // public $scolor_slug;

    // public function mount($slug,$scolor_slug=null)
    // {
    //     $this->slug=$slug;
    //     $this->scolor_slug =$scolor_slug;
    // }


    public function render()
    {
        $combinationColors = Color::where('combination', 1)->get();
        $singleColors = Color::where('combination', 0)->get();

        $colors=Color::all();
        $scolor=SubColor::all();
        // $scolor = SubColor::where('slug',$this->scolor_slug)->first();
        // $scolor_slug=optional($scolor)->id;
        // $scolor

        // ,'scolor'=>$scolor

        return view('livewire.colors-component',['colors'=>$colors,'scolor'=>$scolor,'combinationColors' => $combinationColors,
        'singleColors' => $singleColors,]);
    }
}
