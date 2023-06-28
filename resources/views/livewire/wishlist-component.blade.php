<div>
    {{-- Be like water. --}}

    <div>
        <div class="mx-4">
            <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Wishlist</p>
        </div>
        <div class="mb-8">
            <div class="flex flex-row flex-wrap">
                <!-- Trending 1 -->

                @php
                    $witems=Cart::instance('wishlist')->content()->pluck('id');
                @endphp
                @foreach(Cart::instance('wishlist')->content() as $item)
                    <div class="flex flex-col m-2">
                        <!-- <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/ep1_es_229_layout_5_mess_japanese-mountain-landscape-abstract-5-piece-wall-art.webp?v=1668564076&width=360" alt="" class="h-64"> -->
                        <a href="{{route('product.details',['slug'=>$item->model->slug])}}">
                            <!-- <img src="{{asset('images/product--1.webp')}}" alt="{{$item->model->name}}" class="h-64"> -->

                            <!-- <img src="{{asset('images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}" class="h-64"> -->
                            <div class="-z-100 swiper mySwiper w-80  h-auto">
                                <div class="swiper-wrapper ">
                                        @if($item->model->image)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}" class="">
                                            </div>
                                        @endif
                                        @if($item->model->image2)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image2}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif

                                        @if($item->model->image3)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image3}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif

                                        @if($item->model->image4)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image4}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif

                                        @if($item->model->image5)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image5}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif

                                        @if($item->model->image6)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image6}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif

                                        @if($item->model->image7)
                                            <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                <img src="{{asset('images/products')}}/{{$item->model->image7}}" alt="{{$item->model->name}}" class="h-64">
                                            </div>
                                        @endif
                                        
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </a>

                        <ul class="flex flex-row text-[#46555f] text-base pl-2">
                            <li class="text-xs">{{$item->model->name}}</li>
                        </ul>
                        <div class="flex flex-row justify-end">
                            

                            <!-- Wishlist -->

                            <a href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-32 mt-2">
                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                </svg>
                            </a>
                            <!-- Cart -->
                            <!-- <a href="#" wire:click.prevent="store({{$item->model->id}},'{{$item->model->name}}',{{$item->model->regular_price}})">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-4 mt-2 ">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a> -->

                        </div>

                        <!-- <p class="text-xs pl-2 text-[#46555f] italic">Exclusive</p> -->
                        <!-- <p class="text-xs pl-2 text-[#46555f] italic">{{$item->model->regular_price}}</p> -->


                    </div>
                @endforeach

            </div>
            <!-- Pagination -->
            <div>
                {{-- $products->links() --}}
            </div>
        </div>
    </div>
</div>
