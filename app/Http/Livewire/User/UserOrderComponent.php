<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Livewire\WithPagination;


class UserOrderComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders=Order::where('user_id',Auth::user()->id)->paginate(12);
        return view('livewire.user.user-order-component',['orders'=>$orders]);
    }
}
