<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Cart;

class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(16);
        $fproducts = Product::where('featured',1)->inRandomOrder()->get()->take(16);
        $categories = Category::orderBy('name','ASC')->get()->take(5);
        return view('livewire.home-component',['lproducts'=>$lproducts,'fproducts'=>$fproducts,'categories'=>$categories]);
    }
}
