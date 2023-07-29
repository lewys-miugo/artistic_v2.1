<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Color;
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


    public $image;
    public $newimage;

    public function mount($color_id)
    {
        $color = Color::find($color_id);
        $this->color_id = $color->id;
        $this->name = $color->name;
        $this->slug = $color->slug;
        $this->combination = $color->combination;
        $this->image=$color->image;


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
        session()->flash('message','Color has been updated succesfully');
    }

    


    public function render()
    {
        $color=Color::where('id',$this->id)->first();
        // $color_id=$color->id;
        // $color_name=$color->name;


        // ,['color_name'=>$color_name]
        return view('livewire.admin.admin-edit-color-component');
    }
}
