<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component

{
    public $cartTotal;

    public function mount()
    {
        $this->cartTotal=Cart::total();
    }


    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');

    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);
        session()->flash('success_message','Item has been removed!');
    }

    public function clearAll()
    {
        Cart::destroy();
        session()->flash('success_message','Cart has been cleared');
    }


    public function render()
    {
        return view('livewire.cart-component');
    }
}
