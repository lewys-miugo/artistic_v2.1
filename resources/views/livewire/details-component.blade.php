<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4">
                    <img src="{{asset('images/products')}}/{{$product->image}}" alt="Art Product" class="w-full">
                </div>
                <div class="p-4">
                    <h1 class="text-3xl font-bold mb-2">{{$product->name}}</h1>
                    <!-- <p class="text-gray-700 text-lg mb-4">Artist Name</p> -->
                    <p class="text-gray-600 mb-6">{{$product->short_description}}</p>
                    <div class="flex items-center mb-6">
                        <span class="mr-2">Rating:</span>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price}}</p>
                    <!-- <p class="text-gray-700 text-xl mb-4">Ksh{{$product->sale_price}}</p> -->

                    <button type="button"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price}})">
                        Add to Cart
                    </button>
                </div>
            </div>
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Product Details</h2>
                <ul class="list-disc list-inside">
                    <p class="text-gray-600 mb-6">{{$product->description}}</p>

                    <!-- <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Nullam congue turpis quis ligula finibus tincidunt.</li>
                    <li>Fusce lobortis pharetra libero, id commodo metus.</li>
                    <li>Suspendisse eu sem in tellus venenatis rhoncus.</li> -->
                </ul>
            </div>

            <!-- Related Products -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Related Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($rproducts as $rproduct)
                        <div class="bg-white shadow-lg rounded-lg p-4">
                            <a href="{{route('product.details',['slug'=>$rproduct->slug])}}">
                                <img src="{{asset('images/product--1.webp')}}" alt="{{$rproduct->name}} 3" class="w-full mb-4">
                            </a>
                            <h3 class="text-lg font-bold">{{$rproduct->name}}</h3>
                            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p class="text-gray-700">${{$rproduct->regular_price}}</p>
                            <!-- <p class="text-gray-700">${{$rproduct->sale_price}}</p> -->

                        </div>
                    @endforeach
                </div>    
            </div>

            <!-- New Product -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Latest Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($nproducts as $nproduct)
                        <div class="bg-white shadow-lg rounded-lg p-4">
                                <a href="{{route('product.details',['slug'=>$nproduct->slug])}}">
                                    <img src="{{asset('images/product--1.webp')}}" alt="{{$nproduct->name}} 3" class="w-full mb-4">
                                </a>
                                <h3 class="text-lg font-bold">{{$nproduct->name}}</h3>
                                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <p class="text-gray-700">Ksh.{{$nproduct->regular_price}}</p>
                                <p class="text-gray-700">Ksh.{{$nproduct->sale_price}}</p>

                        </div>
                    @endforeach
                </div>    
            </div>
        </div>
    </body>


</div>
