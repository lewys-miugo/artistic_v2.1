<?php

namespace App\Http\Livewire\Admin;

use App\Models\Color;
use App\Models\Product;
use Livewire\Component;

use App\Models\ColorImages;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Livewire\WithFileUploads;

use Illuminate\Support\Str;

class AdminAddColorComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $combination='0';



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

    public function storeColor()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required' 
        ]);
        
        $color= new Color();
        $color->name = $this->name;
        $color->slug = $this->slug;
        $color->combination = $this->combination;



        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('colors', $imageName);
        $color->image = $imageName;

        $color->save();
        session()->flash('message','New color has been created successfully!');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-color-component');
    }
}
