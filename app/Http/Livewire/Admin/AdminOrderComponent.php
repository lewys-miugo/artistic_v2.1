<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Cart;


class AdminOrderComponent extends Component
{
    use WithPagination;

    public function updateOrderStatus($order_id,$status)
    {
        $order=Order::find($order_id);
        $order->status=$status;
        if ($status=="delivered") {
            $order->delivered_date=DB::raw('CURRENT_DATE');
        }
        else if ($status=="canceled") {
            $order->canceled_date=DB::raw('CURRENT_DATE');
            
        }
        $order->save();
        session()->flash('order_message','Order status has been updated successfully!!');
    }

    public function render()
    {
        $orders=Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.admin-order-component',['orders'=>$orders]);
    }
}
