<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class UserOrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id=$order_id;
    }
    public function render()
    {
        $order=Order::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        return view('livewire.user.user-order-detail-component',['order'=>$order]);
    }
}
