<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
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

    public $uniqId;
    public $image;
    public $images;

    public $category_id;
    public $newimage;

    public function mount($product_id)
    {
        $product = Product::find($product_id)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->description = $product->description;

        // $this->regular_price = $product->regular_price;

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



        // $this->sale_price= $product->sale_price;
        // $this->sku = $product->SKU;
        // $this->stock_status = $product->stock_status;
        // $this->quantity = $product->quantity;

        // $product=Product::where('id',$id)->first();

        // $this->image = $product->image;
        $this->productImages=ProductImages::where('product_unique_id',$product->unique_id)->get();


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
        // $product->regular_price = $this->regular_price;

        $product->regular_price_A0 = $this->regular_price_A0;
        $product->regular_price_A05 = $this->regular_price_A05;
        $product->regular_price_A1 = $this->regular_price_A1;
        $product->regular_price_A2 = $this->regular_price_A2;
        $product->regular_price_A3 = $this->regular_price_A3;
        $product->regular_price_A4 = $this->regular_price_A4;
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

        // $uniqId=Carbon::now()->timestamp.uniqid(); 
        // $product->unique_id = $uniqId;

        if ($this->images != '') {
            foreach ($this->images as $key => $image) {
                $pimage = new ProductImages();
                $pimage->product_unique_id = $uniqId;

                // $pimage->product_id = $product->id;

                $imageName =Carbon::now()->timestamp . $key . '.' .$this->images[$key]->extension();
                $this->images[$key]->storeAs('all',$imageName);

                $pimage->product_id=$product->id;

                $pimage->image=$imageName;
                $pimage->save();
            }
        }
        $this->images='';
        $product->save();
        session()->flash('message', 'Product image has been Updated!');
    }
    public function render()
    {
        $categories=Category::orderBy('name','ASC')->get();
        $productImages=ProductImages::where('product_id',$this->product_id)->get();


        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories,'productImages'=>$productImages]);
    }
}
