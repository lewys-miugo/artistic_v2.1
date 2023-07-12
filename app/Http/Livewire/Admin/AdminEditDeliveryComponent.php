<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Delivery;

class AdminEditDeliveryComponent extends Component
{
    public $delivery_policy;
    public $delivery;

    public function mount()
    {
        $delivery = Delivery::first();
        $this->delivery_policy =$delivery->delivery_policy;
    }

    public function updateDelivery()
    {
        $delivery = Delivery::first();

        $delivery->delivery_policy=$this->delivery_policy;

        $delivery->save();
        session()->flash('message', 'Delivery Policy has been Updated!');
    }
    
    public function render()
    {
        return view('livewire.admin.admin-edit-delivery-component');
    }
}
