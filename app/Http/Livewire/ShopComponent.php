<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;
    public $pageSize=12;
    public $orderBy= "Default";

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('shop.cart');
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,$product_price)->associate('App\Models\Product');
    }

    public function render()
    {
        if($this->orderBy == 'Latest')
        {
            $products = Product::orderBy('created_at','DESC')->paginate(12);

        }
        else{
            $products = Product::paginate(12);            
        }

        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories]);
    }
}
