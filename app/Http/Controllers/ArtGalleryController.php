<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ArtGalleryController extends Controller
{


    public function render()
    {
        // Fetch the first 12 products as an example
        $artimages1 = Product::orderBy('created_at', 'DESC')->take(50)->get('image');
        $artimages2 = Product::orderBy('created_at','ASC')->take(50)->get('image');

        // Extract image 1 URLs from the fetched products
        $image1Urls = $artimages1->pluck('image')->toArray(); // Replace 'image_url' with your actual image URL field
        $image2Urls = $artimages2->pluck('image')->toArray();

        return view('art-gallery-controller',[
            'artimages1' => $artimages1,
            'image1Urls' => $image1Urls,
            'image2Urls' => $image2Urls,
        ]);
    }

}
