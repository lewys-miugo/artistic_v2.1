<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductImages;

use App\Models\Category;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;
    

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        // unlink('images/products/'.$product->image);
        // $image->delete();
        $product->delete();


        // multiple images
        $image=ProductImages::where('product_id')->get();
        foreach($images as $image){
            $image->delete();
        }

        
        session()->flash('message','Product has been deleted!!');
    }
    
    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }

}
