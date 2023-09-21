<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;
use App\Models\SubColor;
use Livewire\WithPagination;


class ArtWithColorComponent extends Component
{
    use WithPagination;

    public $color;
    public $products;
    public $orderBy= "Default";

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function mount($slug)
    {
        // Load the color and its subcolors based on the slug
        $this->color = Color::where('slug', $slug)->with('subColors')->firstOrFail();

        // Load products associated with the color
        $this->products = $this->color->products;
    }

    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id==$product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        return view('livewire.art-with-color-component');
    }
}
