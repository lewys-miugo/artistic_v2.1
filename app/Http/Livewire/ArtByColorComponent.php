<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\SubColor;
use Livewire\WithPagination;

class ArtByColorComponent extends Component
{
    use WithPagination;
    public $pageSize=12;
    public $color_slug;
    public $orderBy= "Default";

    public $scolor_slug;

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function mount($slug,$scolor_slug=null)
    {
        $this->slug=$slug;
        $this->scolor_slug =$scolor_slug;
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
        $color_id=null;
        $color_name="";
        // $color=;

        if ($this->scolor_slug) {
            $scolor = SubColor::where('slug',$this->scolor_slug)->first();
            // $color->$scolor;
            $color_id=$scolor->id;
            $color_name=$scolor->name;
            
        }
        
        else{
            $color=Color::where('slug',$this->slug)->first();
            $color_id=$color->id;
            $color_name=$color->name;
        }

        // $color=Color::where('slug',$this->slug)->first();
        // $color_id=$color->id;
        // $color_name=$color->name;

        if($this->orderBy == 'Latest')
        {
            $products = Product::where('color_id',$color_id)->orderBy('created_at','DESC')->paginate(12);

        }
        else{
            $products = Product::where('color_id',$color_id)->paginate(12);            
        }

        $colors = Color::orderBy('name','ASC')->get();
        $color = Color::where('slug',$this->slug)->first();

        $categories = Category::orderBy('name','ASC')->get();
        return view('livewire.art-by-color-component',['products'=>$products,'categories'=>$categories, 'colors'=>$colors,'color_name'=>$color_name,'color'=>$color]);
    }
}
