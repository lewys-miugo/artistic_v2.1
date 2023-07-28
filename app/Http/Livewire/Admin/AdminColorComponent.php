<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Color;
use Livewire\WithPagination;


class AdminColorComponent extends Component
{
    public $color_id;


    use WithPagination;

    public function deleteColor()
    {
        $color= Color::find($this->color_id);
        $color->delete();
        session()->flash('message','color has been deleted succesfully');
    }

    public function render()
    {
        $colors=Color::orderBy('name','ASC')->paginate(10);
        return view('livewire.admin.admin-color-component',['colors'=>$colors]);
    }
}
