<!-- resources/views/livewire/art-color-page.blade.php -->

<!-- <div>
    <h1>{{ $color->name }}</h1>
    <ul>
        @foreach ($color->subColors as $subColor)
            <li>{{ $subColor->name }}</li>
        @endforeach
    </ul>

    <h2>Products of {{ $color->name }}</h2>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>
</div> -->

<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="m-4 flex flex-col-12">
        <div class="m-2 ">
            <div>
                <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > All Pieces > By {{$subcolor->name}}</p>
            </div>

            <div class="flex flex-row pt-8">
                <img src="{{asset('images/colors')}}/{{$color->image}}" alt="Art by {{$color->name}} color" class="w-32 h-auto" loading="lazy">
                
                <p class="m-4 justify-center text-[#46555f] uppercase">
                    {{$color->name}} <span> | Wall Art</span> 
                </p>
                
            </div>
            <!-- subcolor -->
            <div class="bg-[#f2f3f4] flex flex-col-12">
                <div class="flex justify-left text-[#46555f] m-2">
                    <!-- border-b-4 border-[#B76573] -->
                    @if (count($color->subColors)>0)
                        <ul class="flex flex-row">
                            @foreach ($color->subColors as $scolor)
                                <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}" class="flex flex-row">
                                    <img src="{{asset('images/colors')}}/{{$scolor->image}}" loading="lazy" alt="Art by {{$scolor->name}} color" class="h-4 w-8">
                                    <li class="mx-2 font-bold uppercase text-sm ">
                                        {{$scolor->name}}
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    @endif
                    
                    <!-- <a href="" class="mx-2 font-bold uppercase text-sm ">Default</a> -->
                </div>
            </div>

            <!-- Navbar 2 -->

            <div class="bg-[#f2f3f4] flex flex-col-12">
                <div class="flex justify-left text-[#46555f] m-2">
                    <!-- border-b-4 border-[#B76573] -->
                    
                    <a href="" class="mx-2 font-bold uppercase text-sm {{ $orderBy=='Default' ? 'active' : ''}} nav-link" wire:click.prevent="changeOrderBy('Default')">Default</a>
                    <!-- <a href="" class="mx-2 font-bold uppercase text-sm  nav-link" wire:click.prevent="changeOrderBy('Default')">Trending</a> -->
                    <a href="" class="mx-2 font-bold uppercase text-sm  {{ $orderBy=='Latest' ? 'active' : ''}} nav-link" wire:click.prevent="changeOrderBy('Latest')">Latest</a>

                </div>
            </div>



            <!-- Number of pieces -->
            <div class="flex justify-end my-4">
                <div>
                <p class=" text-[#46555f] text-sm"> We have found {{-- $products->total() --}} pieces</p>
                </div>
            </div>

            <!-- Product shop -->
            <div>
                <div class="mb-8">
                    <div class="flex flex-row flex-wrap">
                        <!-- Trending 1 -->

                        @php
                            $witems=Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                        @foreach($products as $product)
                            <div class="flex flex-col m-2">
                                <!-- <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/ep1_es_229_layout_5_mess_japanese-mountain-landscape-abstract-5-piece-wall-art.webp?v=1668564076&width=360" alt="" class="h-64"> -->
                                <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                    <!-- <img src="{{-- asset('images/products') --}}/{{-- $product->image --}}" alt="{{-- $product->name --}}" class="h-64 w-64"> -->
                                    <div class="-z-100 swiper mySwiper w-64 h-64">
                                        <div class="swiper-wrapper ">
                                                @if($product->image)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image2)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image2}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image3)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image3}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image4)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image4}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image5)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image5}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image6)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image6}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image7)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image7}}" loading="lazy" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                    <ul class="flex flex-row text-[#46555f] text-base pl-2">
                                    <li class="text-xs">{{$product->name}}</li>
                                    </ul>
                                    <div class="flex flex-row">
                                        
                                    </div>
                                </a>
                                        <div class="flex justify-end">
                                            @if($witems->contains($product->id))
                                            <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-32 mt-2">
                                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                                </svg>
                                            </a>
                                        @else
                                            <a href="" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-32 mt-2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                            </a>
                                        @endif
                                        </div>
                            </div>
                        @endforeach

                    </div>
                    <div>

                    </div>
                    <!-- Pagination -->
                    <div>
                        {{-- $products->links() --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            });
        </script>

    <script>
        function toggleList() {
            const collapsedList = document.getElementById('collapsedList');
            collapsedList.classList.toggle('hidden');
        }

        function toggleList1() {
            const collapsedList = document.getElementById('collapsedList1');
            collapsedList.classList.toggle('hidden');
        }
    </script>

</div>



