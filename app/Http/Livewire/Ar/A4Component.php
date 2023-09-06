<?php

namespace App\Http\Livewire\Ar;

use Livewire\Component;

class A4Component extends Component
{
    public $hideFooter;
    
    public function render()
    {
    //    $hideFooter = true;
    // ,['hideFooter' => $hideFooter]
        return view('livewire.ar.a4-component');
    }
}
