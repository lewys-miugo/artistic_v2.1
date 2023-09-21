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

    public $colors;

    public $colorId;

    public function mount()
    {
        // Load all colors and their subcolors
        $this->colors = Color::with('subColors')->get();
        
    }


    public function render()
    {
        $combinationColors = Color::where('combination', 1)->get();
        $singleColors = Color::where('combination', 0)->get();
        // $color_id=Color::
        $subcolors=SubColor::all();
        // $scolor=SubColor::all();
        // $scolor = SubColor::where('color_id',$this->color_id)->get();
        // $scolor_slug=optional($scolor)->id;
        // $scolor
        // $color = Color::find($colorId);

        // $scolors = $color->subColors;
        // ,'scolor'=>$scolor

        return view('livewire.colors-component',
            [
                // 'colors'=>$colors,
                'subcolors'=>$subcolors,
                'combinationColors' => $combinationColors,
                'singleColors' => $singleColors,
            ]
        );
    }
}
