<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Theme;
use App\Http\Livewire\ThemeComponent;
use Illuminate\Support\Str;

class AdminEditThemeComponent extends Component
{
    public $theme_id;
    public $name;
    public $slug;

    public function mount($theme_id)
    {
        $theme = Theme::find($theme_id);
        $this->theme_id = $theme->id;
        $this->name = $theme->name;
        $this->slug = $theme->slug;

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

    public function updateTheme()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required'
        ]);

        $theme=Theme::find($this->theme_id);
        $theme->name=$this->name;
        $theme->slug =$this->slug;
        $theme->save();
        session()->flash('message','theme has been updated succesfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-theme-component');
    }
}
