<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Color;
use App\Models\SubColor;
use App\Http\Livewire\ColorsComponent;
use App\Http\Livewire\ArtByColorComponent;
use Illuminate\Support\Str;

use App\Models\ColorImages;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class AdminEditColorComponent extends Component
{
    use WithFileUploads;
    public $color_id;
    public $name;
    public $slug;
    public $combination='0';
    public $scolor_id;
    public $scolor_slug;

    public $image;
    public $newimage;

    public function mount($color_id,$scolor_id=null)
    {
        if($scolor_id)
        {
            $scolor=SubColor::where('id',$scolor_id)->first();
            // $scolor = SubColor::find($scolor_id);

            $this->scolor_id = $scolor->id;
            $this->color_id = $scolor->color_id;
            $this->name = $scolor->name;
            $this->image=$scolor->image;
            $this->slug = $scolor->slug;
        }
        else
        {
            $color=Color::where('id',$color_id)->first();
            // $color=Color::where('id',$this->id)->first();
            // $color = Color::find($color_id);
            $this->color_id = $color->id;
            $this->name = $color->name;
            $this->slug = $color->slug;
            $this->combination = $color->combination;
            $this->image=$color->image;
        }
    }

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required'
        ]);
    }

    public function updateColor()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);

        if ($this->scolor_id) {
            $scolor = SubColor::find($this->scolor_id);
            $scolor->name=$this->name;
            $scolor->slug =$this->slug;
            $scolor->color_id = $this->color_id;

            if ($this->newimage) {
                unlink('images/colors/'.$scolor->image);
                $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
                $this->newimage->storeAs('colors', $imageName);
                $scolor->image = $imageName;
            }

            $scolor->save();
        }

        else
        {
            
            $color=Color::find($this->color_id);
            $color->name=$this->name;
            $color->slug =$this->slug;
            $color->combination = $this->combination;

            if ($this->newimage) {
                unlink('images/colors/'.$color->image);
                $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
                $this->newimage->storeAs('colors', $imageName);
                $color->image = $imageName;
            }

            $color->save();
        }
        
        session()->flash('message','Color has been updated succesfully');
    }

    
    public function render()
    {
        $colors=Color::all();
        // $scolor=SubColor::where('id',$this->id)->first();
        // $color_id=$color->id;
        // $color_name=$color->name;


        // ,['color_name'=>$color_name]
        return view('livewire.admin.admin-edit-color-component',['colors'=>$colors]);
    }
}
