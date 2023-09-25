<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\SubColor;
use Livewire\WithPagination;
use Cart;

use Livewire\Component;

class ArtBySubcolorsComponent extends Component
{
    use WithPagination;
    public $pageSize=18;
    public $color_slug;
    public $orderBy= "Default";

    public $scolor_slug;

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function mount($slug)
    {
        $this->slug=$slug;
        // $this->scolor_slug =$scolor_slug;
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
            $scolor=SubColor::where('slug',$this->slug)->first();
            $color_id=$scolor->id;
            $color_name=$scolor->name;
        }

        // $color=Color::where('slug',$this->slug)->first();
        // $color_id=$color->id;
        // $color_name=$color->name;

        if($this->orderBy == 'Latest')
        {
            $products = Product::where('subcolor_id',$color_id)->orderBy('created_at','DESC')->paginate(18);

        }
        else{
            $products = Product::where('subcolor_id',$color_id)->paginate(18);            
        }

        $colors = Color::orderBy('name','ASC')->get();
        // $color = Color::where('slug',$this->slug)->first();
        $color = $scolor->color;
    
    // Now you can access the color's attributes
        $colorName = $color->name;

        $categories=Category::orderBy('name','ASC')->get();

        return view('livewire.art-by-subcolors-component',['products'=>$products,'categories'=>$categories, 'colors'=>$colors,'color_name'=>$color_name,'color'=>$color]);
    }
}
