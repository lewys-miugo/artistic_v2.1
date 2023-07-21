<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Product;
use App\Models\Theme;
use Livewire\WithPagination;
use Cart;



class ThemeComponent extends Component
{
    use WithPagination;
    public $pageSize=12;
    public $orderBy= "Default";
    public $slug;

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        
        return redirect()->route('shop.cart');
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function mount($slug)
    {
        $this->slug=$slug;
    }



    public function render()
    {
        $theme=Theme::where('slug',$this->slug)->first();
        $theme_id=$theme->id;
        $theme_name=$theme->name;

        if($this->orderBy == 'Latest')
        {
            $products = Product::where('theme_id',$theme_id)->orderBy('created_at','DESC')->paginate(12);

        }

        else{
            $products = Product::where('theme_id',$theme_id)->paginate(12);            
        }

        $themes = Theme::orderBy('name','ASC')->get();

        return view('livewire.theme-component',['products'=>$products,'themes'=>$themes,'theme_name'=>$theme_name]);
    }
}
