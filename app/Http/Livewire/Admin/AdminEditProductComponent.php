<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Theme;
use App\Models\Product;
use App\Models\ProductImages;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $product_id;
    public $product;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    // public $regular_price;
    // public $sale_price;
    // public $sku;
    // public $stock_status ='instock';
    public $featured='0';
    // public $quantity;

    // public $uniqId;
    // public $images;

    public $category_id;
    public $theme_id;

    public $image;
    public $newimage;
    public $newimage2;
    public $newimage3;
    public $newimage4;
    public $newimage5;
    public $newimage6;
    public $newimage7;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public $image7;


    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;

        $this->regular_price = $product->regular_price;

        $this->regular_price_A0 = $product->regular_price_A0;
        $this->regular_price_A05= $product->regular_price_A05;
        $this->regular_price_A1 = $product->regular_price_A1;
        $this->regular_price_A2 = $product->regular_price_A2;
        $this->regular_price_A3 = $product->regular_price_A3;
        $this->regular_price_A4 = $product->regular_price_A4;
        $this->regular_price_2p = $product->regular_price_2p;
        $this->regular_price_3p = $product->regular_price_3p;
        $this->regular_price_4p = $product->regular_price_4p;
        $this->regular_price_5p = $product->regular_price_5p;
        $this->regular_price_pa = $product->regular_price_pa;

        // Framed print
        $this->regular_price_A0f = $product->regular_price_A0f;
        $this->regular_price_A05f= $product->regular_price_A05f;
        $this->regular_price_A1f = $product->regular_price_A1f;
        $this->regular_price_A2f = $product->regular_price_A2f;
        $this->regular_price_A3f = $product->regular_price_A3f;
        $this->regular_price_A4f = $product->regular_price_A4f;
        $this->regular_price_2pf = $product->regular_price_2pf;
        $this->regular_price_3pf = $product->regular_price_3pf;
        $this->regular_price_4pf = $product->regular_price_4pf;
        $this->regular_price_5pf = $product->regular_price_5pf;
        $this->regular_price_paf = $product->regular_price_paf;

        $this->featured = $product->featured;
        $this->category_id = $product->category_id;
        $this->theme_id = $product->theme_id;

        // Images
        $this->image=$product->image;
        $this->image2=$product->image2;
        $this->image3=$product->image3;
        $this->image4=$product->image4;
        $this->image5=$product->image5;
        $this->image6=$product->image6;
        $this->image7=$product->image7;







        // $this->sale_price= $product->sale_price;
        // $this->sku = $product->SKU;
        // $this->stock_status = $product->stock_status;
        // $this->quantity = $product->quantity;

        // $product=Product::where('id',$id)->first();

        // $this->image = $product->image;
        // $this->productImages=ProductImages::where('product_unique_id',$product->unique_id)->get();




    }

    public function deleteImage($id)
    {
        $image=ProductImages::where('id', $id)->first();
        $image->delete();
        session()->flash('message', 'Image has been deleted');

    }


    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function updateProduct()
    {
        $this->validate([
            'name'=>'required',
            // 'slug'=>'required',
            // 'regular_price'=>'required',
            'category_id'=>'required',

        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = '4000';

        $product->regular_price_A0 = 6000;
        $product->regular_price_A05 = 5000;
        $product->regular_price_A1 = 4000;
        $product->regular_price_A2 = 3000;
        $product->regular_price_A3 = 1800;
        $product->regular_price_A4 = 1500;
        $product->regular_price_2p = $this->regular_price_2p;
        $product->regular_price_3p = $this->regular_price_3p;
        $product->regular_price_4p = $this->regular_price_4p;
        $product->regular_price_5p = $this->regular_price_5p;
        $product->regular_price_pa = $this->regular_price_pa;

        // Framed print
        $product->regular_price_A0f = $this->regular_price_A0f;
        $product->regular_price_A05f=$this->regular_price_A05f;
        $product->regular_price_A1f = $this->regular_price_A1f;
        $product->regular_price_A2f = $this->regular_price_A2f;
        $product->regular_price_A3f = $this->regular_price_A3f;
        $product->regular_price_A4f = $this->regular_price_A4f;
        $product->regular_price_2pf = $this->regular_price_2pf;
        $product->regular_price_3pf = $this->regular_price_3pf;
        $product->regular_price_4pf = $this->regular_price_4pf;
        $product->regular_price_5pf = $this->regular_price_5pf;
        $product->regular_price_paf = $this->regular_price_paf;


        // $product->sale_price = $this->sale_price;
        // $product->SKU = $this->sku;
        // $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        // $product->quantity = $this->quantity;
        
        $product->category_id = $this->category_id;
        $product->theme_id = $this->theme_id;

        

        if ($this->newimage) {
            unlink('images/products/'.$product->image);
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('products', $imageName);
            $product->image = $imageName;
        }

        if ($this->newimage2) {
            unlink('images/products/'.$product->image2);
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage2->extension();
            $this->newimage2->storeAs('products', $imageName);
            $product->image2 = $imageName;
        }

        if ($this->newimage3) {
            if ($this->image3) {
                unlink('images/products/'.$product->image3);
            }
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage3->extension();
            $this->newimage3->storeAs('products', $imageName);
            $product->image3 = $imageName;
        }

        if ($this->newimage4) {
            if ($this->image4) {
                unlink('images/products/'.$product->image4);
            }
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage4->extension();
            $this->newimage4->storeAs('products', $imageName);
            $product->image4 = $imageName;
        }
        if ($this->newimage5) {
            if ($this->image5) {
                unlink('images/products/'.$product->image5);
            }
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage5->extension();
            $this->newimage5->storeAs('products', $imageName);
            $product->image5 = $imageName;
        }
        if ($this->newimage6) {
            if ($this->image6) {
                unlink('images/products/'.$product->image6);
            }
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage6->extension();
            $this->newimage6->storeAs('products', $imageName);
            $product->image6 = $imageName;
        }

        if ($this->newimage7) {
            if ($this->image7) {
                unlink('images/products/'.$product->image7);
            }
            $imageName = Carbon::now()->timestamp.'.'.Str::random(6).$this->newimage7->extension();
            $this->newimage7->storeAs('products', $imageName);
            $product->image7 = $imageName;
        }

        $product->save();
        session()->flash('message', 'Product image has been Updated!');
    }
    public function render()
    {
        $categories=Category::orderBy('name','ASC')->get();
        $themes=Theme::orderBy('name','ASC')->get();

        $productImages=ProductImages::where('product_id',$this->product_id)->get();


        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories,'themes'=>$themes,'productImages'=>$productImages]);
    }
}
