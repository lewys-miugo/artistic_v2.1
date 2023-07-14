<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ReturnPolicy;

class ReturnPolicyComponent extends Component
{
    public function render()
    {
        $returnPolicy= ReturnPolicy::first();
        return view('livewire.return-policy-component',['returnPolicy'=>$returnPolicy]);
    }
}
