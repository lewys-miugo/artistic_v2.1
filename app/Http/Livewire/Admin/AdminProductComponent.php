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

    // public $image;
    // public $image2;
    // public $image3;
    // public $image4;
    // public $image5;
    // public $image6;
    // public $image7;
    

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);

        if($product->image)
        {
            unlink('images/products/'.$product->image);
            // $image->delete();
        }
        if($product->image2)
        {
            unlink('images/products/'.$product->image2);
            // $image2->delete();
        }

        if($product->image3)
        {
            unlink('images/products/'.$product->image3);
            // $image3->delete();
        }

        if($product->image4)
        {
            unlink('images/products/'.$product->image4);
            // $image4->delete();
        }

        if($product->image5)
        {
            unlink('images/products/'.$product->image5);
            // $image5->delete();
        }

        if($product->image6)
        {
            unlink('images/products/'.$product->image6);
            // $image6->delete();
        }

        if($product->image7)
        {
            unlink('images/products/'.$product->image7);
            // $image7->delete();
        }

        $product->delete();


        // multiple images
        

        
        session()->flash('message','Product has been deleted!!');
    }
    
    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products]);
    }

}
