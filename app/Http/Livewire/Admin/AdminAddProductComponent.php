<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;

use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    // public $regular_price;
    public $regular_price_A0;
    public $regular_price_A05;
    public $regular_price_A1;
    public $regular_price_A2;
    public $regular_price_A3;
    public $regular_price_A4;
    public $regular_price_2p;
    public $regular_price_3p;
    public $regular_price_4p;
    public $regular_price_5p;
    public $regular_price_pa;

    public $regular_price_A0f;
    public $regular_price_A05f;
    public $regular_price_A1f;
    public $regular_price_A2f;
    public $regular_price_A3f;
    public $regular_price_A4f;
    public $regular_price_2pf;
    public $regular_price_3pf;
    public $regular_price_4pf;
    public $regular_price_5pf;
    public $regular_price_paf;

    // public $sale_price;
    // public $sku;
    // public $stock_status ='instock';
    public $featured='0';
    // public $quantity;
    // public $image;

    public $images =[];
    public $unique_id;
    public $product_id;

    public $category_id;

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            // 'regular_price'=>'required', 
            'category_id'=>'required',

        ]);

        

        $product = new Product();
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

        

        // $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        // $this->image->storeAs('products', $imageName);
        // $product->image = $imageName;

        // Attempt to add multiple images
        // Attemp to add multiple images;
        $uniqId=Carbon::now()->timestamp.uniqid(); 
        $product->unique_id = $uniqId;
        

        foreach ($this->images as $key => $image) {
            $pimage = new ProductImages();
            $pimage->product_unique_id = $uniqId;
            $pimage->product_id=$product->id;


            $imageName =Carbon::now()->timestamp . $key . '.' .$this->images[$key]->extension();
            $this->images[$key]->storeAs('public/all',$imageName);


            $pimage->image=$imageName;
            $pimage->save();
        }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been added!');
    }

    // public function storeProduct()
    // {
    //     # code...
    // }

    public function render()
    {
        $categories=Category::orderBy('name','ASC')->get();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories]);
    }
}
