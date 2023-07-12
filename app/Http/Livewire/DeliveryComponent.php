<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Delivery;

class DeliveryComponent extends Component
{
    public function render()
    {
        $delivery= Delivery::first();
        return view('livewire.delivery-component',['delivery'=>$delivery]);
    }
}
