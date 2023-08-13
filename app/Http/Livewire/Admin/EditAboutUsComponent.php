<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\AboutUs;
use App\Models\AboutUsImages;

use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class EditAboutUsComponent extends Component
{
    use WithFileUploads;

    public $general;
    public $our_vision;
    public $our_objective;
    public $our_art;

    public $general_image;
    public $vision_image;
    public $objective_image;
    public $art_image;

    public $new_general_image;
    public $new_vision_image;
    public $new_objective_image;
    public $new_art_image;

    public function mount()
    {
        $aboutUs= AboutUs::first();
        
        $this->general=         $aboutUs->general ?? 'Default general';
        $this->our_vision=      $aboutUs->our_vision ?? 'Default vision';
        $this->our_objective=   $aboutUs->our_objective ?? 'Default objective';
        $this->our_art=         $aboutUs->our_art ?? 'Default art';
        // $this->general=         $aboutUs->general;

        $this->general_image=$aboutUs->general_image ?? 'Default general';
        $this->vision_image=$aboutUs->vision_image ?? 'Default general';
        $this->objective_image=$aboutUs->objective_image ?? 'Default general';
        $this->art_image=$aboutUs->art_image ?? 'Default general';
    }

    public function updateAboutus()
    {
        $aboutUs= AboutUs::firstOrNew([
            'general' => 'Default general',
            'our_vision' => 'Default general',
            'our_objective' => 'Default general',
            'our_art' => 'Default general',
            'general_image' => 'Default general',
            'vision_image' => 'Default general',
            'objective_image' => 'Default general',
            'art_image' => 'Default general',
        ]);

        // if (!$aboutUs) {
        //     Handle the null case here. For instance, you can set default values for properties.
        //     $this->general = 'Default general';
        //     $this->our_vision = 'Default vision';
        //     $this->our_objective = 'Default objective';
        //     $this->our_art = 'Default art';
        //     $this->general_image = 'Default general';
        //     $this->vision_image = 'Default general';
        //     $this->objective_image = 'Default general';
        //     $this->art_image = 'Default general';
        //     return;
        // }

        $aboutUs->general=      $this->general;
        $aboutUs->our_vision=   $this->our_vision;
        $aboutUs->our_objective=$this->our_objective;
        $aboutUs->our_art=      $this->our_art;

        if ($this->new_general_image) {
            unlink('images/aboutus/'.$aboutUs->general_image);
            $generalimageName = Carbon::now()->timestamp.'.'.'general'.'.'.$this->new_general_image->extension();
            $this->new_general_image->storeAs('aboutus', $generalimageName);
            $aboutUs->general_image = $generalimageName;
        }

        if ($this->new_vision_image) {
            unlink('images/aboutus/'.$aboutUs->vision_image);
            $visionimageName = Carbon::now()->timestamp.'.'.'vision'.'.'.$this->new_vision_image->extension();
            $this->new_vision_image->storeAs('aboutus', $visionimageName);
            $aboutUs->vision_image = $visionimageName;
        }

        if ($this->new_objective_image) {
            unlink('images/aboutus/'.$aboutUs->objective_image);
            $objectiveimageName = Carbon::now()->timestamp.'.'.'objective'.'.'.$this->new_objective_image->extension();
            $this->new_objective_image->storeAs('aboutus', $objectiveimageName);
            $aboutUs->objective_image = $objectiveimageName;
        }

        if ($this->new_art_image) {
            unlink('images/aboutus/'.$aboutUs->art_image);
            $artimageName = Carbon::now()->timestamp.'.'.'art'.'.'.$this->new_art_image->extension();
            $this->new_art_image->storeAs('aboutus', $artimageName);
            $aboutUs->art_image = $artimageName;
        }

        $aboutUs->save();
        session()->flash('message', 'About us details have been Updated!');
    }

    public function render()
    {
        $aboutUsImages=AboutUsImages::get();

        return view('livewire.admin.edit-about-us-component',['aboutUsImages'=>$aboutUsImages,]);
    }
}
