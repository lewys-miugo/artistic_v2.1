<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

     public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');

    }

    public function destroy($id)
    {
        Cart::remove($id);
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
