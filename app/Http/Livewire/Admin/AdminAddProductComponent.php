<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Theme;
use App\Models\Color;
use App\Models\SubColor;
use App\Models\Product;
use App\Models\ProductImages;

use Illuminate\Support\Facades\Storage;
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
    public $regular_price='4000';
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
    public $image;

    public $image2 = null;
    public $image3 = null;
    public $image4 = null;
    public $image5 = null;
    public $image6 = null;
    public $image7 = null;

    // public $images=[];
    public $unique_id;
    public $product_id;

    public $category_id;
    public $theme_id;
    public $color_id;
    public $scolor_id;

    public function generateSlug()
    {
        $this->slug=Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name'=>'required',
            'regular_price'=>'required', 
            'category_id'=>'required',
            


        ]);

        
        $uniqId=Carbon::now()->timestamp.uniqid(); 


        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = '4000';

        $product->regular_price_A0 = 7000;
        $product->regular_price_A05 = 6000;
        $product->regular_price_A1 = 5000;
        $product->regular_price_A2 = 3500;
        $product->regular_price_A3 = 2000;
        $product->regular_price_A4 = 2000;
        $product->regular_price_2p = 9000;
        $product->regular_price_3p = 8500;
        $product->regular_price_4p = 7500;
        $product->regular_price_5p = 8000;
        $product->regular_price_pa = 6000;
        // $product->regular_price_pa = $this->regular_price_pa;
        

        // Framed print
        $product->regular_price_A0f = 6500;
        $product->regular_price_A05f= 5500;
        $product->regular_price_A1f = 4500;
        $product->regular_price_A2f = 3500;
        $product->regular_price_A3f = 2500;
        $product->regular_price_A4f = 2000;
        $product->regular_price_2pf = 7500;
        $product->regular_price_3pf = 6000;
        $product->regular_price_4pf = 7000;
        $product->regular_price_5pf = 7500;
        $product->regular_price_paf = 5500;

        // Floating Frames
        $product->regular_price_A0ff = 6500;
        $product->regular_price_A05ff =5500;
        $product->regular_price_A1ff = 4500;
        $product->regular_price_A2ff = 3500;
        $product->regular_price_A3ff = 2500;
        $product->regular_price_A4ff = 2000; //
        $product->regular_price_2pff = 8500;
        $product->regular_price_3pff = 7000;
        $product->regular_price_4pff = 5200; //
        $product->regular_price_5pff = 6000; //
        $product->regular_price_paff = 5500; //

        $product->featured = $this->featured;
        $product->category_id = $this->category_id;
        $product->color_id = $this->color_id;
        if ($this->scolor_id) {
            $product->subcolor_id = $this->scolor_id;
        }
        $product->theme_id = 1;


        $product->unique_id = $uniqId;

        // $product->sale_price = $this->sale_price;
        // $product->SKU = $this->sku;
        // $product->stock_status = $this->stock_status;
        // $product->quantity = $this->quantity;

        
        
            $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('products', $imageName);
            $product->image = $imageName;
        

        if ($this->image2) {
            $imageName2 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image2->extension();
            $this->image2->storeAs('products', $imageName2);
            $product->image2 = $imageName2;
        }

        if ($this->image3) {
            $imageName3 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image3->extension();
            $this->image3->storeAs('products', $imageName3);
            $product->image3 = $imageName3;
        }

        if ($this->image4) {
            $imageName4 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image4->extension();
            $this->image4->storeAs('products', $imageName4);
            $product->image4 = $imageName4;
        }
        if ($this->image5) {
            $imageName5 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image5->extension();
            $this->image5->storeAs('products', $imageName5);
            $product->image5 = $imageName5;
        }
        if ($this->image6) {
            $imageName6 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image6->extension();
            $this->image6->storeAs('products', $imageName6);
            $product->image6 = $imageName6;
        }

        if ($this->image7) {
            $imageName7 = Carbon::now()->timestamp . '.' . Str::random(6) . '_' . $this->image7->extension();
            $this->image7->storeAs('products', $imageName7);
            $product->image7 = $imageName7;
        }

        // $imageName3 = Carbon::now()->timestamp.'.'. Str::random(6).'_'.$this->image3->extension();
        // $this->image3->storeAs('products', $imageName3);
        // $product->image3 = $imageName3;

        // $imageName4 = Carbon::now()->timestamp.'.'. Str::random(6).'_'.$this->image4->extension();
        // $this->image4->storeAs('products', $imageName4);
        // $product->image4 = $imageName4;

        // $imageName5 = Carbon::now()->timestamp.'.'. Str::random(6).'_'.$this->image5->extension();
        // $this->image5->storeAs('products', $imageName5);
        // $product->image5 = $imageName5;

        // $imageName6 = Carbon::now()->timestamp.'.'. Str::random(6).'_'.$this->image6->extension();
        // $this->image6->storeAs('products', $imageName6);
        // $product->image6 = $imageName6;

        // $imageName7 = Carbon::now()->timestamp.'.'. Str::random(6).'_'.$this->image7->extension();
        // $this->image7->storeAs('products', $imageName7);
        // $product->image7 = $imageName7;


        // Attempt to add multiple images
        // Attemp to add multiple images;
        // if(!is_null($this->images)){
        //     Storage::delete($this->images);
        // }
        // foreach ($this->images as $key => $image) {
        //     $pimage = new ProductImages();
        //     $pimage->product_unique_id = $uniqId;
        //     $pimage->product_id=$product->id;

        //     $imageName =Carbon::now()->timestamp . $key . '.' .$this->images[$key]->extension();

        //     $this->images[$key]->storeAs('public/all',$imageName);
        //     dd($this->images);

        //     $pimage->image=$imageName;
        //     $pimage->save();
        // }

        $product->save();
        session()->flash('message', 'Product has been added!');
    }

    // public function storeProduct()
    // {
    //     # code...
    // }

    public function changeSubcolor()
    {
        $this->scolor_id=0;
    }

    public function render()
    {
        $categories=Category::orderBy('name','ASC')->get();
        $themes=Theme::orderBy('name','ASC')->get();
        $colors=Color::orderBy('name','ASC')->get();
        $scolors=SubColor::where('color_id',$this->color_id)->get();


        return view('livewire.admin.admin-add-product-component',['categories'=>$categories, 'themes'=>$themes, 'colors'=>$colors,'scolors'=>$scolors]);
    }
}
