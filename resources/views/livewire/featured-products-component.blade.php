<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <!-- Catgeories -->
    <div class="">
        <ul class="overflow-x-auto gray-300 list-none flex flex-row  pl-2 mx-2 text-[#46555f]">
            <li class=" grow border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
                <a href="{{route('shop')}}" class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">
                    All
                </a>
            </li>
            @foreach($categories as $category)
                <li class="grow border-y-2  transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]"><a href="{{route('product.category',['slug'=>$category->slug])}}" class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">{{$category->name}}</a></li>

            @endforeach
        </ul>
    </div>

    <div class="mx-4 mb-4">
        <div>
            
            <div class="mb-8">
                <div class="flex flex-row flex-wrap">
                    <!-- Trending 1 -->
                    @php
                        $witems=Cart::instance('wishlist')->content()->pluck('id');
                    @endphp

                    @foreach($fproducts as $fproduct)


                    <div class="flex flex-col m-2">
                        <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                            <img src="{{asset('images/products')}}/{{$fproduct->image}}" loading="lazy" alt="{{$fproduct->name}}" class="h-64">


                            <ul class="flex flex-row text-[#46555f] text-base pl-2">
                                <li class="text-xs">{{$fproduct->name}}</li>
                                
                            </ul>

                            <ul class="flex flex-row text-[#46555f] text-base pl-2 justify-end">
                                <li class=" flex flex-row justify-end">
                                    <!--Wishlist  -->
                                        @if($witems->contains($fproduct->id))
                                        <a href="#" wire:click.prevent="removeFromWishlist({{$fproduct->id}})">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                            </svg>
                                        </a>
                                    @else
                                        <a href="" wire:click.prevent="addToWishlist({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->regular_price}})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                        </a>
                                    @endif
                                    <!-- Cart -->
                                        <a href="#" wire:click.prevent="store({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->regular_price}})">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-4 ">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                            </svg>
                                        </a>
                                </li>
                            </ul>



                            <p class="text-xs pl-2 text-[#46555f] italic">{{$fproduct->regular_price}}</p>
                        </a>

                    </div>
                    @endforeach
                </div>
                <div>
                        {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
