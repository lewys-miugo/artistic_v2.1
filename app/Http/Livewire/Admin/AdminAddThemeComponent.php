<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme;
use Illuminate\Support\Str;


class AdminAddThemeComponent extends Component
{
    public $name;
    public $slug;

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
        
        
        $theme= new Theme();
        $theme->name = $this->name;
        $theme->slug =$this->slug;
        $theme->save();
        session()->flash('message','New theme has been created successfully!');
    }


    public function render()
    {
        return view('livewire.admin.admin-add-theme-component');
    }
}
