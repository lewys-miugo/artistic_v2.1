<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Theme;

use App\Models\ThemeImages;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Livewire\WithFileUploads;

use Illuminate\Support\Str;


class AdminAddThemeComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $image;


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

    public function storeTheme()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required' 
        ]);
        
        $uniqId=Carbon::now()->timestamp.uniqid(); 
        
        $theme= new Theme();
        $theme->name = $this->name;
        $theme->slug =$this->slug;

        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('themes', $imageName);
        $theme->image = $imageName;

        $theme->save();
        session()->flash('message','New theme has been created successfully!');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-theme-component');
    }
}
