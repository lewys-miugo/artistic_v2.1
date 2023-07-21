<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Theme;
use Livewire\WithPagination;

class AdminThemesComponent extends Component
{
    public $theme_id;

    use WithPagination;

    public function deleteTheme()
    {
        $theme= Theme::find($this->theme_id);
        $theme->delete();
        session()->flash('message','Theme has been deleted succesfully');
    }

    public function render()
    {
        $themes=Theme::orderBy('name','ASC')->paginate(10);
        return view('livewire.admin.admin-themes-component',['themes'=>$themes]);
    }
}
