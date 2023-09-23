<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;
use App\Models\SubColor;
use Livewire\WithPagination;
use Cart;

class ArtWithSubcolorComponent extends Component
{
    use WithPagination;

    public $subcolor;
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
        $this->subcolor = SubColor::where('slug', $slug)->firstOrFail(); 

        // Load products associated with the color
        $this->products = $this->subcolor->products;

        // Load Color of the subcolor
        $this->color = $this->subcolor->color;
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
        return view('livewire.art-with-subcolor-component');
    }
}
