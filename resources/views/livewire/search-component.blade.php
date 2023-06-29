<div>
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
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="m-4 flex flex-col-12">
        <!-- <aside id="default-sidebar" class="relative sticky top-0 left-0  w-64 h-full transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
            <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <ul class="space-y-2 ">
                    <li class="">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Product Type</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kanban</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Medium</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Color</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Recommendations</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Rooms</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Shape</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign In</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign Up</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="border-t-2">
                        <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                            <span class="flex-1 ml-3 text-left whitespace-nowrap">Pieces</span>
                            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                                </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside> -->

        <!-- <div class="flex">
            <div class="w-1/4">
                
            </div>
                <div class="w-3/4">
                    <p>Main Content</p>
                </div>
        </div> -->

        <!-- <aside class="relative sticky top-0 left-0  w-1/2  h-full transition-transform -translate-x-full sm:translate-x-0">
            <div class="overflow-y-auto py-5 px-3 h-full rounded-lg bg-white border-r border-gray-200" >
                <ul>
                    <li class="px-4 py-2 border-b-2">
                        <button class="toggle-button flex flex-row" onclick="toggleList()"> 
                            <p>Category 1</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-4 mt-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg> 
                            
                        </button>
                    </li>
                    <ul id="collapsedList" class="hidden scroll-smooth">
                        @foreach($categories as $category)
                        
                        <li class="px-4 py-2"><a href="{{route('product.category',['slug'=>$category->slug])}}">{{$category->name}}</a></li>
    
                    
                        @endforeach
                    </ul>

                </ul>

                <ul>
                    <li class="px-4 py-2 border-b-2">
                        <button class="toggle-button flex flex-row" onclick="toggleList1()"> 
                            <p>Category 2</p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-4 mt-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg> 
                            
                        </button>
                    </li>
                    <ul id="collapsedList1" class="hidden">
                        <li class="px-4 py-2">Subentry 1</li>
                        <li class="px-4 py-2">Subentry 2</li>
                        <li class="px-4 py-2">Subentry 3</li>
                    </ul>
                </ul>
            </div>
        </aside> -->

        


        <div class="m-2 ">
            <div>
                <p class="text-left text-xs uppercase text-[#6a767e]"><a href="/" class="uppercase">Home</a> > search</p>
            </div>

            <!-- <div class="flex flex-col-12 my-4 text-[#46555f]">
                <div class="justify-center m-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/canvas-sets-wall-art.jpg?v=1672415275&width=200" alt="" class="">
                </div>

                <div class="mx-4">
                    <p class="text-5xl">Canvas</p>
                    <div class="mx-4">
                        <p class="border-x-2 border-[#000000] mx-4 text-center text-sm">WALL ART {{-- $category_name --}}</p>
                    </div>
                </div>

                <div>
                    <p class="text-sm">Discover stunning Canvas Sets Wall Art ideas and choose from our curated selection designs. Based on your unique interior, browse Digital Art, Photography. Explore various styles, including Illustration, Typography, Kids & Teens and Photographic Canvas Sets Wall Art by top artists like Taylor Greene, cheryl warrick and more. Choose Canvas Sets Wall Art layout types such as multi panel, and framed prints, to personalize your home with the perfect piece of art.</p>
                </div>
            </div> -->

            <!-- Navbar 2 -->

            <div class="bg-[#f2f3f4] flex ">
                <div class="flex justify-left text-[#46555f] m-2">
                    <!-- border-b-4 border-[#B76573] -->
                    
                    <a href="" class="mx-2 font-bold uppercase text-sm {{ $orderBy=='Default' ? 'active' : ''}} nav-link" wire:click.prevent="changeOrderBy('Default')">Default</a>
                    <!-- <a href="" class="mx-2 font-bold uppercase text-sm  nav-link" wire:click.prevent="changeOrderBy('Default')">Trending</a> -->
                    <a href="" class="mx-2 font-bold uppercase text-sm  {{ $orderBy=='Latest' ? 'active' : ''}} nav-link" wire:click.prevent="changeOrderBy('Latest')">Latest</a>

                </div>

                <!-- <div class="flex flex-1"></div> -->

                <!-- <div class="flex justify-end">
                    <div class="px-2 pt-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                            </svg>

                        </button>
                    </div>

                    <div class="px-2 pt-1">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>

                        </button>
                    </div>
                </div> -->
            </div>

            <!-- Number of pieces -->
            <div class="flex justify-end my-4">
                <div>
                <p class=" text-[#46555f] text-sm"> We have found {{$products->total()}} pieces</p>
                </div>
            </div>

            <!-- art-rows origina -->
            <!-- <div>
                <div class="mb-8">
                    <div class="flex flex-row">
                        Trending 1
                        <div class="flex flex-col m-2">
                            <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/ep1_es_229_layout_5_mess_japanese-mountain-landscape-abstract-5-piece-wall-art.webp?v=1668564076&width=360" alt="" class="h-64">


                            <ul class="flex flex-row text-[#46555f] text-base pl-2">
                                <li class="text-xs">Japanese Mountain Landscape</li>
                                <li class="ml-8 flex flex-row">
                                    <p class="text-xs">674</p> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </li>
                            </ul>

                            <p class="text-xs pl-2 text-[#46555f] italic">Exclusive</p>

                        </div>

                        
                    </div>
                </div>
            </div> -->

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
                                <a href="{{route('product.details',['slug'=>$product->slug])}}">
                                    <div class="-z-100 swiper mySwiper w-64 h-64">
                                        <div class="swiper-wrapper ">
                                                @if($product->image)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image2)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image2}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image3)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image3}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image4)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image4}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image5)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image5}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image6)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image6}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif

                                                @if($product->image7)
                                                    <div class="swiper-slide flex justify-center content-center m-auto"> 
                                                        <img src="{{asset('images/products')}}/{{$product->image7}}" alt="{{$product->name}}" class="h-64">
                                                    </div>
                                                @endif
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </a>

                                <ul class="flex flex-row text-[#46555f] text-base pl-2">
                                    <li class="text-xs">{{$product->name}}</li>
                                </ul>
                                <div class="">
                                    <div class=" flex flex-row justify-end">
                                        @if($witems->contains($product->id))
                                            <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                    <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                                                </svg>
                                            </a>
                                        @else
                                            <a href="" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                                </svg>
                                            </a>
                                        @endif

                                        <!-- Cart -->
                                        <!-- <a href="#" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">
                                            

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                            </svg>
                                        </a> -->
                                    </div>
                                </div>

                                <!-- <p class="text-xs pl-2 text-[#46555f] italic">{{$product->regular_price}}</p> -->

                            </div>
                        @endforeach

                    </div>
                    <!-- Pagination -->
                    <div>
                        {{$products->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>

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

