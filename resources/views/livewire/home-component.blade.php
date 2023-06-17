<div>
    <div class="">
                <ul class="gray-300 list-none flex flex-row  pl-4 mx-4 text-[#46555f]">
                    <li class=" grow border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
                        <a href="{{route('shop')}}">
                            <p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">All Pieces</p>
                        </a>
                    </li>
                    @foreach($categories as $category)
                        <li class="grow border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]"><a href="{{route('product.category',['slug'=>$category->slug])}}" class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">{{$category->name}}</a></li>
    
                    @endforeach

                </ul>
    </div>

<div class="mx-4 mb-4">
    <!-- 3-banner-images -->
    <!-- <div class="flex flex-row mt-2">
        <div class="basis-2/4">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-0163.png?v=1683114560&width=720" alt="">
        </div>
        <div class="basis-1/4 mx-2">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-decor-124.png?v=1679569588&width=360" alt="">
        </div>
        <div class="basis-1/4">
           <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-decorations-124.png?v=1679569588&width=360" alt="">
        </div>
    </div> -->

    <!-- stunning wall art -->
    <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-4xl flex justify-center mb-8 ">Stunning Wall Art at an Affordable Price</h1>
        <h5 class="text-lg px-36 flex justify-center text-center">We’ve curated an accessible, extensive selection of wall art. Discover top-trending designs and create your dream interior in the blink of an eye!</h5>
        
    </div>

    <!-- <div class="mx-20 my-8">
        <ul class="flex flex-row justify-center text-[#58656E]">
            <li class="uppercase flex flex-row mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                </svg>
                <p class=""> 100% High Quality </p>
            </li>
            <li class="uppercase flex flex-row mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5" />
                </svg>

                <p class=""> made in kenya </p>
            </li>
            <li class="uppercase flex flex-row mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                </svg>

                <p class=""> over 20k 5 star reviews </p>
            </li>
            <li class="uppercase flex flex-row mx-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>

                <p class=""> 30 day free returns</p>
            </li>
        </ul>
    </div> -->

    <!-- images -->

    <!-- <div class="flex flex-row">
        <div class="relative px-2">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-canvases.jpg?v=1677492149&width=360" alt="">
        </div>
        <div class="relative px-2">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/framed-art.jpg?v=1677492149&width=360" alt="" class="">
            <div class="absolute bottom-0 left-16 flex flex-row justify-center">
                <p class="">Colors</p>
            </div>
        </div>
        <div class="relative bg-red-200">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-canvases.jpg?v=1677492149&width=360" alt="">
            <div class="absolute bottom-0 left-0 ...">
                <p>Absolute child</p>
            </div>
        </div>
            
        
        <div class="flex  items-center justify-center bg-slate-400">
            
            <div class="relative h-32 w-32 border before:absolute before:-bottom-2 before:-right-2 before:h-4 before:w-4 before:border-b before:border-r before:transition-all before:duration-300 before:ease-in-out after:absolute after:-top-2 after:-left-2 after:h-4 after:w-4 after:border-t after:border-l after:transition-all after:duration-300 after:ease-in-out hover:before:h-[calc(100%+16px)]  hover:after:h-[calc(100%+16px)] hover:after:w-[calc(100%+16px)]"></div>
        </div>
    </div> -->

    <!-- SHOP BY ROOM -->
    <!-- <div class="mt-12 mb-8 flex justify-center">
        <p class="text-3xl text-[#46555f]">Shop by Room</p>
    </div> -->
    <!-- IMAGES Shop by room -->
    <!-- <div class="flex flex-row mb-10">
        <ul class="flex flex-row text-[#46555f] text-xl">
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-artwork.jpg?v=1677492370&width=360" alt="">
                <div class="flex justify-center">
                    <p >Living Room</p>
                </div>
            </li>
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/hanging-art.jpg?v=1677492369&width=360" alt="">
                <div class="flex justify-center">
                    <p >Bedroom</p>
                </div>
            </li>
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-decor.png?v=1678696177&width=360" alt="">
                <div class="flex justify-center">
                    <p >Dining Room</p>
                </div>
            </li>
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-print.png?v=1678696230&width=360" alt="">
                <div class="flex justify-center">
                    <p >Hallway</p>
                </div>
            </li>
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/art-wall.png?v=1678696247&width=360" alt="">
                <div class="flex justify-center">
                    <p >Kitchen</p>
                </div>
            </li>
            <li class="mx-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110  duration-300 hover:underline hover:decoration-solid underline-offset-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-near-me.png?v=1678696260&width=360" alt="">
                <div class="flex justify-center">
                    <p >Office</p>
                </div>
            </li>
        </ul>
    </div> -->

    <!-- Browse different -->
    <!-- <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-3xl flex justify-center mb-4 ">Browse Different Layouts and Sizes</h1>
        <h5 class="text-lg px-36 flex justify-center text-center">Filter wall art by shape and arrangement</h5>
    </div> -->
    <!-- Images for types -->
    <!-- <div class="my-4">
        <ul class="flex flex-row justify-center text-xl text-[#46555f]">
            <li class="px-4 border-b-2 border-b-transparent hover:border-b-[#c45472]">Shop by wall art type</li>
            <li class="px-4 border-b-2 border-b-transparent hover:border-b-[#c45472]">Shop by shapes</li>
            <li class="px-4 border-b-2 border-b-transparent hover:border-b-[#c45472]">Shop by pieces</li>
        </ul>
        <div class="border-y-2">
            <ul class="flex flex-row justify-center h-40 bg-gray-100">
                <li class="mx-8 flex flex-col justify-center">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-canvas.svg?v=1653380738" alt="" class="h-16">
                    <div class="text-center">
                        <p class="text-[#46555f] ">Canvas</p>
                    </div>
                </li>
                <li class="mx-8 flex flex-col justify-center">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-canvas-prints.svg?v=1653388177" alt="" class="h-16">
                    <div class="text-center">
                        <p class="text-[#46555f]">Multi Panel Canvas</p>
                    </div>
                </li>
                <li class="mx-8 flex flex-col justify-center">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-arts.svg?v=1654069826" alt="" class="h-16">
                    <div class="text-center">
                        <p class="text-[#46555f]">Framed Canvas</p>
                    </div>
                </li>
                <li class="mx-8 flex flex-col justify-center">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/buy-wall-art.svg?v=1653388177" alt="" class="h-16">
                    <div class="text-center">
                        <p class="text-[#46555f]">Framed Print</p>
                    </div>
                </li>
                <li class="mx-8 flex flex-col justify-center">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/best-canvas-wall-art.svg?v=1653388177" alt="" class="h-16">
                    <div class="text-center">
                        <p class="text-[#46555f]">Poster</p>
                    </div>
                </li>
            </ul>
        </div>
    </div> -->

    <!-- Shop Our Top-Trending Collections -->
    <!-- <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-3xl flex justify-center mb-4 ">Shop Our Top-Trending Collections</h1>
    </div> -->

    <!-- Personalized gifts -->
    
    <!-- <div class="relative ">
        <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/canvas-art-wall-decor.jpg?v=1677492776&width=1512" alt="" class="">
        <div class="absolute top-0 m-20 pl-20 text-[#46555f]">
            <p class="text-4xl font-bold">Personalized Gifts</p>                
            <p class="text-base">Create your own piece of custom wall art.</p>
            <p class="text-base">Choose a personalized  print for the perfect gift.</p>            
            <p class="uppercase underline underline-offset-2 pt-4">Shop personalized gifts</p>
        </div>
    </div> -->

    <!-- Images below personalized gifts -->
    <!-- <div class="flex flex-row my-4  ">
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
            
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/decorative-wall-arts.png?v=1678696287&width=540" alt="" class="h-96">
                
                <p class="text-xl ">Push Pin Maps</p>
                <p class="text-base">Pin the places you've been and the places you want to visit! Each map comes with 100 push pins.</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">Shop Push Pin Maps</p>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-on-canvas.jpg?v=1677492775&width=540" alt="" class="h-96 ">

                <p class="text-xl ">ArtisticExcursions Exclusive</p>
                <p class="text-base ">Browse our exclusive pieces of wall art. You won’t find these gorgeous designs anywhere else!</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">SHOP ArtisticExcursions EXCLUSIVE</p>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-decor-prints.jpg?v=1677494315&width=540" alt="" class="h-96">

                <p class="text-xl">Gallery Wall Art</p>
                <p class="text-base">It’s super easy to create a gallery wall with our curated collection of gallery wall layouts.</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">SHOP GALLERY WALL ART</p>
            </div>
        </a>
    </div> -->

    <!-- Officialy licensed -->
    <!-- <div>
        <div class="flex flex-row justify-center my-8"> 
            <p class="text-3xl text-[#485760]"> Officially Licensed </p>
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-hangings-22.png?v=1677058921&width=36" alt="" class="pl-4">
        </div>

        <div class="flex flex-row h-28 justify-center">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/affordable-wall-art.png?v=1677494422&width=360" alt="" class="mx-2 h-20">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/what-is-wall-art.png?v=1677494462&width=180" alt="" class="mx-2 h-20">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/premium-wall-art.png?v=1677494422&width=180" alt="" class="mx-2 h-20">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-decor-prints.png?v=1677494422&width=180" alt="" class="mx-2 h-20">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/print-wall-art.png?v=1677494422&width=360" alt="" class="ml-2 h-20">
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-print.png?v=1677494663&width=180" alt="" class="mx-2 h-20">
        </div>
    </div> -->

    <!-- Trending title -->
    <!-- <div class="flex justify-center">
        <p class="text-3xl text-[#485760]">Trending</p>
    </div> -->
    <!-- Shop Our Top-Trending Collections -->
    <!-- <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-3xl flex justify-center mb-4 ">Shop Our Trending Art Pieces</h1>
    </div> -->

    <!-- <div>
        <div class="">
            <a href="" class="uppercase underline underline-offset-2 text-[#485760] text-right"><p>to all trending</p></a>
        </div>
        <div class="mb-8">
            <div class="flex flex-row">
                <div class="flex flex-col m-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/pg3_es_pme_layout_floating_horizontal_majestic-sunset-at-mount-rainer-framed-wall-art.webp?v=1668523885&width=360" alt="" class="h-64">


                    <ul class="flex flex-row text-[#46555f] text-base pl-2">
                        <li class="text-xs">Majestic Sunset At Mount Rainer</li>
                        <li class="ml-8 flex flex-row">
                            <p class="text-xs">300</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col m-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/tsn_art_h23_layout_3_horizontal_pew-pew-3-piece-wall-art.webp?v=1668590422&width=360" alt="" class="h-64">


                    <ul class="flex flex-row text-[#46555f] text-base pl-2">
                        <li class="text-xs">Pew Pew</li>
                        <li class="ml-32 flex flex-row">
                            <p class="text-xs">240</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </li>
                    </ul>
                    <p class="text-xs pl-2 text-[#46555f] italic">Octavian Mielu</p>

                </div>

                <div class="flex flex-col m-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/fsv_es_sy7_layout_2_horizontal_brave-enough-amanda-gorman-2-piece-wall-art.webp?v=1668625612&width=360" alt="" class="h-64">


                    <ul class="flex flex-row text-[#46555f] text-base pl-2">
                        <li class="text-xs">Brave Enough Amanda Gorman</li>
                        <li class="ml-8 flex flex-row">
                            <p class="text-xs">156</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </li>
                    </ul>
                    <p class="text-xs pl-2 text-[#46555f] italic">Jodi Hatfield</p>

                </div>

                <div class="flex flex-col m-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/wtv_es_gzk_layout_3_horizontal_funny-bathroom-french-bulldog-3-piece-wall-art.webp?v=1668757199&width=360" alt="" class="h-64">


                    <ul class="flex flex-row text-[#46555f] text-base pl-2 bg-white">
                        <li class="text-xs">Funny Bathroom French Dog</li>
                        <li class="ml-8 flex flex-row">
                            <p class="text-xs">106</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col m-2 ">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/s3j_art_rjr_layout_1_vertical_wide_great-sea-turtle-wall-art.webp?v=1668562509&width=360" alt="" class="h-64">


                    <ul class="flex flex-row text-[#46555f] text-base pl-2 bg-white">
                        <li class="text-xs">Great Sea Turtle</li>
                        <li class="ml-24 flex flex-row">
                            <p class="text-xs">287</p> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                        </li>
                    </ul>

                    <p class="text-xs pl-2 text-[#46555f] italic">Jodi Hatfield</p>

                </div>
            </div>
        </div>
    </div> -->


    <!-- Shop Our Latest Collections -->
    <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-3xl flex justify-center mb-4 ">Shop Our Latest Art Pieces</h1>
    </div>

    <!-- Exclusive -->
    <!-- <div class="flex justify-center">
        <p class="text-3xl text-[#485760]">Latest</p>
    </div> -->
    <!-- Latest products -->
    <div>
        <div class="">
            <a href="{{route('shop')}}" class="uppercase underline underline-offset-2 text-[#485760] text-right">
                <p>To all latest</p>
            </a>
        </div>
        <div class="mb-8">
            <div class="flex flex-row flex-wrap">
                <!-- Trending 1 -->
                @foreach($lproducts as $lproduct)


                <div class="flex flex-col m-2">
                    <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                        <img src="{{asset('images/products')}}/{{$lproduct->image}}" alt="{{$lproduct->name}}" class="h-64">


                        <ul class="flex flex-row text-[#46555f] text-base pl-2">
                            <li class="text-xs">{{$lproduct->name}}</li>
                            
                        </ul>

                        <ul class="flex flex-row text-[#46555f] text-base pl-2 justify-end">
                            <li class=" flex flex-row justify-end">
                                <p class="text-xs">674</p> 
                                <!-- Cart -->
                                    <a href="#" wire:click.prevent="store({{$lproduct->id}},'{{$lproduct->name}}',{{$lproduct->regular_price}})">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-4 ">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                        </svg>
                                    </a>
                            </li>
                        </ul>

                        <p class="text-xs pl-2 text-[#46555f] italic">{{$lproduct->regular_price}}</p>
                    </a>

                </div>
                @endforeach
            </div>
        </div>

        <div class="md:hidden lg:hidden">
            <a href="{{route('shop')}}" class="uppercase underline underline-offset-2 text-[#485760] text-right">
                <p>To all latest</p>
            </a>
        </div>
    </div>

      <!-- Shop Our Latest Collections -->
    <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-3xl flex justify-center mb-4 ">Shop Featured Art Pieces</h1>
    </div>

    <!-- Exclusive -->
    <!-- <div class="flex justify-center">
        <p class="text-3xl text-[#485760]">Latest</p>
    </div> -->
    <!-- Latest products -->
    <div>
        <div class="">
            <a href="" class="uppercase underline underline-offset-2 text-[#485760] text-right">
                <p>To all Featured</p>
            </a>
        </div>
        <div class="mb-8">
            <div class="flex flex-row flex-wrap">
                <!-- Trending 1 -->
                @foreach($fproducts as $fproduct)


                <div class="flex flex-col m-2">
                    <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                        <img src="{{asset('images/products')}}/{{$fproduct->image}}" alt="{{$fproduct->name}}" class="h-64">


                        <ul class="flex flex-row text-[#46555f] text-base pl-2">
                            <li class="text-xs">{{$fproduct->name}}</li>
                            
                        </ul>

                        <ul class="flex flex-row text-[#46555f] text-base pl-2 justify-end">
                            <li class=" flex flex-row justify-end">
                                <p class="text-xs">674</p> 
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
        </div>
    </div>


    <!-- Hot deals alert -->
    <!-- <div>
        <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-decor-art.jpg?v=1677495945&width=1512" alt="">
    </div> -->

    <!-- REVIEWS -->
    <!-- <div class="flex flex-row mt-4 border-b-2 border-[#707070]">
        <div>
            <p class="uppercase text-[#485760]">Company Reviews</p>
        </div>
        <div class="grow"></div>

        <div class="flex flex-row">
            <p class="uppercase mr-2 text-sm">Based on</p>
            <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/reviewsio-logo--coloured.png?v=1627020194&width=180" alt="" class="h-5">
        </div>
    </div> -->
    <div>
        <!-- <div class="flex flex-row divide-x-2 mt-2 divide-[#707070]">
            <div class="flex flex-row">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                </svg>

                <p class="px-2 text-[#4e7d91]">4.96</p>
                <p class="pr-2 text-[#46555f] text-base uppercase">Rating</p>
            </div>

            <div class="flex flex-row">
                <p class="px-2 text-[#4e7d91]">10.3k</p>
                <p class="text-[#46555f] text-base uppercase">Reviews</p>
            </div>
        </div> -->

        <div class="flex flex-row my-4">
            <!-- Review 1 -->
            <!-- <div class="border mx-2">
                <div class="p-2">
                    <div class="flex flex-row pl-2">
                        <p class="text-[#58656e] text-lg mr-2">James Maina</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                    
                    </div>
                    <div class="flex flex-row pl-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg>

                        <p class="text-[#46555f] font-bold">Verified Buyer</p>
                    </div>
                    <div class="">
                        <p class="pl-2 text-[#6a757e]">"The Canvas is absolutely beautiful I love it but I am going to order another one a bigger size. The colors blend in perfect with my living room"</p>
                    </div>
                    <div>
                        <p class="text-right font-bold text-xs text-[#46555f]">Posted 2 days ago</p>
                    </div>
                </div>
            </div> -->

            <!-- Review 2 -->
            <!-- <div class="border mx-2">
                <div class="p-2">
                    <div class="flex flex-row pl-2">
                        <p class="text-[#58656e] text-lg mr-2">Muihaki Catherine</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                    
                    </div>
                    <div class="flex flex-row pl-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg>

                        <p class="text-[#46555f] font-bold">Verified Buyer</p>
                    </div>
                    <div class="">
                        <p class="pl-2 text-[#6a757e]">"The Canvas is absolutely beautiful I love it but I am going to order another one a bigger size. The colors blend in perfect with my living room"</p>
                    </div>
                    <div>
                        <p class="text-right font-bold text-xs text-[#46555f]">Posted 4 days ago</p>
                    </div>
                </div>
            </div> -->

            <!-- Review 3 -->
            <!-- <div class="border mx-2">
                <div class="p-2">
                    <div class="flex flex-row pl-2">
                        <p class="text-[#58656e] text-lg mr-2">James Maina</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                    
                    </div>
                    <div class="flex flex-row pl-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg>

                        <p class="text-[#46555f] font-bold">Verified Buyer</p>
                    </div>
                    <div class="">
                        <p class="pl-2 text-[#6a757e]">"The Canvas is absolutely beautiful I love it but I am going to order another one a bigger size. The colors blend in perfect with my living room"</p>
                    </div>
                    <div>
                        <p class="text-right font-bold text-xs text-[#46555f]">Posted 2 days ago</p>
                    </div>
                </div>
            </div> -->

            <!-- Review 4 -->
            <!-- <div class="border mx-2">
                <div class="p-2">
                    <div class="flex flex-row pl-2">
                        <p class="text-[#58656e] text-lg mr-2">James Maina</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                        </svg>
                    
                    </div>
                    <div class="flex flex-row pl-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 01.208 1.04l-9 13.5a.75.75 0 01-1.154.114l-6-6a.75.75 0 011.06-1.06l5.353 5.353 8.493-12.739a.75.75 0 011.04-.208z" clip-rule="evenodd" />
                        </svg>

                        <p class="text-[#46555f] font-bold">Verified Buyer</p>
                    </div>
                    <div class="">
                        <p class="pl-2 text-[#6a757e]">"The Canvas is absolutely beautiful I love it but I am going to order another one a bigger size. The colors blend in perfect with my living room"</p>
                    </div>
                    <div>
                        <p class="text-right font-bold text-xs text-[#46555f]">Posted 2 days ago</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <!-- Shop the Look -->
    <!-- <div class="mx-32 mt-20 text-[#46555f]">
        
        <h1 class="text-4xl flex justify-center mb-8 ">Shop The Look</h1>
        <h5 class="text-lg px-36 flex justify-center text-center">These collections were curated by our design experts. Shop top-trending, handpicked prints.</h5>
        
    </div> -->

    <!-- Images below shop the look -->
    <!-- <div class="flex flex-row my-4  ">
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
            
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/print-wall-decor.jpg?v=1677494890&width=540" alt="" class="h-96">
                
                <p class="text-xl ">Shabby Chic Hallway</p>
                <p class="text-base">Shabby-chic decor is about exploring deconstructed details and feminine design.</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">SHOP SHABBY CHIC HALLWAY</p>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/exclusive-wall-art.jpg?v=1677494890&width=540" alt="" class="h-96 ">

                <p class="text-xl ">Scandinavian Bedroom</p>
                <p class="text-base ">Feel the power of Hygge. Create a cozy bedroom inspired by Nordic interiors.</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">SHOP SCANDINAVIAN BEDROOM</p>
            </div>
        </a>
        <a href="#">
            <div class="flex flex-col mx-2 text-[#485760] transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-200">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-canvas-prints.jpg?v=1677494890&width=540" alt="" class="h-96">

                <p class="text-xl">Bohemian Bedroom</p>
                <p class="text-base">Boho style is all about embracing organic details and free-spirited decor.</p>
                <p class="uppercase text-sm underline underline-offset-1 mt-2">SHOP BOHEMIAN BEDROOM</p>
            </div>
        </a>
    </div> -->

    <!-- Artists -->
    <!-- <div class="flex justify-center mt-20">
        <p class="text-3xl text-[#485760]">Meet Our Artists</p>
    </div> -->
    <!-- <div>
        <div class=" mb-4">
            <a href="" class="uppercase underline underline-offset-2 text-[#485760] text-right">
                <p>to all artists</p>
            </a>
        </div>

        <div class="flex flex-row">
            Artist 1
            <div class="mx-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-art-artists.jpg?v=1677495180&width=360" alt="">
                    <p class="text-center text-[#485760] text-2xl mt-4">Claudia Schoen</p>
                    <p  class="text-center text-[#485760] text-2xl mb-4">USA</p>
    
                <ul class="flex flex-row justify-center">
                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_scenic-drive-california-wall-art.jpg?v=1665055293&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_squirrel-collage-wall-art.jpg?v=1676051346&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_feather-arrow-viii-wall-art.jpg?v=1676051454&width=640" alt="" class="h-20">
                    </li>                
                </ul>
                <p class="uppercase text-center underline underline-offset-2 text-[#485760] mt-4">More from this artist</p>

            </div>
            
            Artist 2
            <div class="mx-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/wall-arts-store.jpg?v=1677495402&width=360" alt="">
                    <p class="text-center text-[#485760] text-2xl mt-4">Daniel Jean-Baptiste</p>
                    <p  class="text-center text-[#485760] text-2xl mb-4 uppercase">CANADA</p>
    
                <ul class="flex flex-row justify-center">
                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_atlantic-spadefish-wall-art.jpg?v=1665288461&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_bamboo-and-pitons-wall-art.jpg?v=1665285915&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_eagle-ray-wall-art.jpg?v=1664643469&width=640" alt="" class="h-20">
                    </li>                
                </ul>
                <p class="uppercase text-center underline underline-offset-2 text-[#485760] mt-4">More from this artist</p>

            </div>

            Artist 3
            <div class="mx-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/canvas-wall-art-prints.jpg?v=1677495586&width=360" alt="">
                    <p class="text-center text-[#485760] text-2xl mt-4">Ahmad Shariff</p>
                    <p  class="text-center text-[#485760] text-2xl mb-4">UAE</p>
    
                <ul class="flex flex-row justify-center">
                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_ray-charles-i-wall-art.jpg?v=1660757944&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_kobe-newsprint-wall-art.jpg?v=1660920167&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_guess-what-elvis-presley-wall-art.jpg?v=1660641426&width=640" alt="" class="h-20">
                    </li>                
                </ul>
                <p class="uppercase text-center underline underline-offset-2 text-[#485760] mt-4">More from this artist</p>

            </div>

            Artist 4
            <div class="mx-2">
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/files/elephantstock-wall-art.jpg?v=1677495430&width=360" alt="">
                    <p class="text-center text-[#485760] text-2xl mt-4">Emily Loius Heard</p>
                    <p  class="text-center text-[#485760] text-2xl mb-4">UK</p>
    
                <ul class="flex flex-row justify-center">
                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_the-little-things-wall-art.jpg?v=1664197047&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_spirited-wall-art.jpg?v=1664195591&width=640" alt="" class="h-20">
                    </li>

                    <li class="mx-1">
                        <img src="https://cdn.shopify.com/s/files/1/1568/8443/products/main_interstella-wall-art.jpg?v=1664195094&width=640" alt="" class="h-20">
                    </li>                
                </ul>
                <p class="uppercase text-center underline underline-offset-2 text-[#485760] mt-4">More from this artist</p>

            </div>
        </div>
    </div> -->
</div>


</div>
