<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Cart;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $county;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $subcounty;
    public $town;
    public $specificarea;

    // public $order_id;
    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_mobile;
    public $s_line1;
    public $s_county;
    public $s_subcounty;
    public $s_town;
    public $s_specificarea;

    public $paymentmode;

    public $thankyou;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'line1'=>'required',
            'county'=>'required',
            'subcounty'=>'required',
            'town'=>'required',
            'specificarea'=>'required',
        ]);

        if ($this->ship_to_different) 
        {
            $this->validateOnly($fields,[
            's_firstname'=>'required',
            's_lastname'=>'required',
            's_email'=>'required|email',
            's_mobile'=>'required',
            's_line1'=>'required',
            's_county'=>'required',
            's_subcounty'=>'required',
            's_town'=>'required',
            's_specificarea'=>'required',
            'paymentmode'=>'required'

            ]);
        }
    }

    

    public function placeOrder()
    {
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'line1'=>'required',
            'county'=>'required',
            'subcounty'=>'required',
            'town'=>'required',
            'specificarea'=>'required',
            'paymentmode'=>'required'
        ]);



        $order = new Order();
        $order->user_id = Auth::user()->id;
        // $order->subtotal =session()->get('checkout')['subtotal'];
        // $order->tax =session()->get('checkout')['tax'];
        // $order->total =session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->line1 = $this->line1;
        $order->county = $this->county;
        $order->subcounty = $this->subcounty;
        $order->town = $this->town;
        $order->specificarea = $this->specificarea;
        $order->status='ordered';
        $order->is_shipping_different = $this->ship_to_different ? 1:0;
        $order->save();
        // $order = Order::select('id')->get();
        // $currentOrder = Order::find($currentOrderId);
        // $order = Order::where('id', '>', $currentOrderId)->orderBy('id')->first();
        $order_id=Order::latest('id')->value('id');
        // $order_id = $order->id;

        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id=$order->id;
            $orderItem->price=$item->price;
            $orderItem->quantity=$item->qty;
            $orderItem->save();
        }

        if($this->ship_to_different)
        {
            $this->validate([
            's_firstname'=>'required',
            's_lastname'=>'required',
            's_email'=>'required|email',
            's_mobile'=>'required',
            's_line1'=>'required',
            's_county'=>'required',
            's_subcounty'=>'required',
            's_town'=>'required',
            's_specificarea'=>'required',
            ]);
            // $order_id=
            
            $shipping = new Shipping();
            $shipping->order_id=$order_id;
            // $shipping->order_id=Order::orders()->id;

            $shipping->firstname=$this->s_firstname;
            $shipping->lastname=$this->s_lastname;
            $shipping->email=$this->s_email;
            $shipping->mobile=$this->s_mobile;
            $shipping->line1=$this->s_line1;
            $shipping->county=$this->s_county;
            $shipping->subcounty=$this->s_subcounty;
            $shipping->town=$this->s_town;
            $shipping->specificarea=$this->s_specificarea;
            $shipping->save();
        }

        if($this->paymentmode=='cod')
        {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id;
            $transaction->order_id=$order->id;
            $transaction->mode='cod';
            $transaction->status='pending';
            $transaction->save();
        }

        $this->thankyou=1;

        Cart::instance('cart')->destroy();
        session()->forget('checkout');

        return redirect()->route('thankyou');

    }

    public function verifyForCheckout()
    {
        if (Auth::check()) {
            return redirect()->route('login');
        }
        elseif($this->thankyou){
            return redirect()->route('thankyou');
        }
        elseif(!session()->get('checkout')){
            return redirect()->route('shop.cart');
        }
    }

    public function render()
    {
        // $this->verifyForCheckout();
        return view('livewire.checkout-component');
    }
}
