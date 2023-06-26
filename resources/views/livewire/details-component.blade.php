<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}


    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4">
                    <!-- <img src="{{asset('images/products')}}/{{$product->image}}" alt="Art Product" class="w-full"> -->
                    @php
                        $images = App\Models\ProductImages::where('product_unique_id',$product->unique_id)->get();
                    @endphp
                    <div class="swiper mySwiper w-full h-auto md:w-80 md:h-64 lg:w-80">
                        <div class="swiper-wrapper ">
                            @foreach($images as $item)
                                <div class="swiper-slide flex justify-center content-center m-auto"> 
                                    <img src="{{ asset('uploads/all')}}/{{$item->image}}" class="w-full h-auto" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

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
                                class="h-4 w-4 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-4 w-4 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price}}</p> -->
                    <!-- <p class="text-gray-700 text-xl mb-4">Ksh{{$product->sale_price}}</p> -->

                    <!-- <button type="button"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price}})">
                        Add to Cart
                    </button> -->
                    <!-- PRice change trial -->
                        <div class="container mx-auto mt-8">
                            <h1 class="text-2xl font-bold mb-4">Canvas options</h1>

                            <div class="space-x-1 flex flex-row flex-wrap">
                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option1" checked class="mr-2">
                                        <p>A0</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A0}}</p>
                                        
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A0}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option17" checked class="mr-2">
                                        <p>A0.5</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A05}}</p>
                                        
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A05}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option2" checked class="mr-2">
                                        <p>A1</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A1}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A1}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option3" checked class="mr-2">
                                        <p>A2</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A2}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A2}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option4" checked class="mr-2">
                                        <p>A3</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A3}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A3}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option5" checked class="mr-2">
                                        <p>A4</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A4}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A4}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option6" checked class="mr-2">
                                        <p>4 pieces</p>

                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_4p}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_4p}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option7" checked class="mr-2">
                                        <p>5 pieces</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_5p}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_5p}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option7" checked class="mr-2">
                                        <p>Panorama</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_pa}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_pa}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <!-- Repeat the pattern for the remaining options -->
                                <!-- Option 3 -->
                                <!-- Option 4 -->
                                <!-- Option 5 -->
                                <!-- Option 6 -->
                                <!-- Option 7 -->
                            </div>

                            <h1 class="text-2xl font-bold mb-4">Normal options</h1>
                            <div class="space-x-1 flex flex-row flex-wrap">
                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option8" checked class="mr-2">
                                        <p>A0</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A0f}}</p>
                                        
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A0f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option16" checked class="mr-2">
                                        <p>A0.5</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A05f}}</p>
                                        
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A05f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option9" checked class="mr-2">
                                        <p>A1</p>
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A1f}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A1f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option10" checked class="mr-2">
                                        <p>A2</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A2f}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A2f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option11" checked class="mr-2">
                                        <p>A3</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A3f}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A3f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option12" checked class="mr-2">
                                        <p>A4</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_A4f}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_A4f}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option13" checked class="mr-2">
                                        <p>4 pieces</p>

                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_4pf}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_4pf}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option14" checked class="mr-2">
                                        <p>5 pieces</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_5pf}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_5pf}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="flex items-center">
                                        <input type="radio" name="options" value="option15" checked class="mr-2">
                                        <p>Panorama</p>
                                    
                                    </label>
                                    <div class="option-paragraph hidden">
                                        <p class="text-gray-700 text-xl mb-4">Ksh.{{$product->regular_price_paf}}</p>
                                        <button type="button"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="store({{$product->id}}, '{{$product->name}}',{{$product->regular_price_paf}})">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>

                                <!-- Repeat the pattern for the remaining options -->
                                <!-- Option 3 -->
                                <!-- Option 4 -->
                                <!-- Option 5 -->
                                <!-- Option 6 -->
                                <!-- Option 7 -->
                            </div>
                        </div>


                    <!-- End of price trial -->
                </div>
            </div>
            <!-- <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Product Details</h2>
                <ul class="list-disc list-inside">
                    <p class="text-gray-600 mb-6">{{-- $product->description --}}</p>

                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Nullam congue turpis quis ligula finibus tincidunt.</li>
                    <li>Fusce lobortis pharetra libero, id commodo metus.</li>
                    <li>Suspendisse eu sem in tellus venenatis rhoncus.</li>
                </ul>
            </div> -->

            <!-- Related Products -->
            <div class="mt-8">
                <h2 class="text-2xl font-bold mb-4">Related Products</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach($rproducts as $rproduct)
                        <div class="bg-white shadow-lg rounded-lg p-4">
                            <a href="{{route('product.details',['slug'=>$rproduct->slug])}}">
                                <!-- <img src="{{asset('images/products')}}/{{$rproduct->image}}" alt="{{$rproduct->name}} 3" class="w-full mb-4"> -->
                                @php
                                        $images = App\Models\ProductImages::where('product_unique_id',$rproduct->unique_id)->get();
                                    @endphp
                                    <div class="swiper mySwiper w-64 h-64">
                                        <div class="swiper-wrapper ">
                                            @foreach($images as $item)
                                                <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                    <img src="{{ asset('uploads/all')}}/{{$item->image}}" class="w-full h-auto" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
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
                                    <!-- <img src="{{asset('images/products')}}/{{$nproduct->image}}" alt="{{$nproduct->name}} 3" class="w-full mb-4"> -->
                                    @php
                                        $images = App\Models\ProductImages::where('product_unique_id',$nproduct->unique_id)->get();
                                    @endphp
                                    <div class="swiper mySwiper w-64 h-64">
                                        <div class="swiper-wrapper ">
                                            @foreach($images as $item)
                                                <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                    <img src="{{ asset('uploads/all')}}/{{$item->image}}" class="w-full h-auto" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
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

        <!-- JS for price change -->
        
            <script>
            const radioInputs = document.querySelectorAll('input[type="radio"]');
            const optionParagraphs = document.querySelectorAll('.option-paragraph');

            radioInputs.forEach((radio) => {
                radio.addEventListener('change', () => {
                optionParagraphs.forEach((paragraph, index) => {
                    if (radio.checked && radio.value === `option${index + 1}`) {
                    paragraph.classList.remove('hidden');
                    } else {
                    paragraph.classList.add('hidden');
                    }
                });
                });
            });
            </script>

        

    </body>


</div>
