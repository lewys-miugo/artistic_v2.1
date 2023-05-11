@extends('layouts.nav_footer')

@section('content')
    <div>
        <p class="text-center text-xs text-[#6a767e] my-4"><a href="/" class="">Home</a> > COLLECTIONS</p>
    </div>

    <!-- Subjects -->
    <div class="my-8">
        <h2 class="text-center text-5xl font-bold text-[#46555f] mb-8">Subjects</h2>
        <p class="text-center text-[#46555f] uppercase mb-8">Popular subjects</p>
            <!-- <div class="flex flex-row divide-x-2 justify-center">
                <div class="w-1/3 border-b-2 border-gray-500"></div>

                <div class="text-center text-[#46555f] uppercase p-2">Popular subjects</div>

                <div class="w-1/3 border-b-2 border-gray-500"></div>

            </div> -->

        <p class="text-center text-[#7c878e]">Discover stunning wall art by browsing our collections! Get inspired by our featured selection or check out all of our topics.</p>
    </div>

    <!-- Card section -->
    <div class="flex flex-row mx-4 mb-12">
        <!-- Safari Animals -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/safari-animals-wall-art.jpg?v=1677771059&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Safari Animals</p>
            </a>
        </div>
        <!-- Farm animals -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/farm-animal-wall-art.jpg?v=1677771308&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Farm Animals</p>
            </a>
        </div>
        <!-- Mounatain -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/mountain-wall-art.jpg?v=1677770936&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Mountain</p>
            </a>
        </div>
        <!-- flowers -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/flower-wall-art.jpg?v=1677769791&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Flowers</p>
            </a>
        </div>
        <!-- trees -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/trees-wall-art.jpg?v=1677771119&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Trees</p>
            </a>
        </div>
        <!--    movies and television -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/movies-and-television-wall-art.jpg?v=1677771324&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Movies & Television</p>
            </a>
        </div>
        <!-- wines and drinks -->
        <div class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-105 duration-300 mx-1">
            <a href="" >
                <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/wine-and-alcohol-drinks-wall-art.jpg?v=1677771337&width=180" alt="" >
                <p class="uppercase text-center text-[#46555f] mt-2">Wine & Drinks</p>
            </a>
        </div>
    </div>

    <!-- Search section -->
    <div class="bg-[#EFF0F2] ">
        <form class="flex items-center justify-center pt-8 pb-4 border-b-2 border-[#46555f] mx-8">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-1/3">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-gray-400 rounded-lg border border-gray-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            <span class="sr-only">Search</span>
            </button>
        </form>

        <!-- ########## SUBJECTS ################ -->
        <!-- Abstract -->
        <div class="pt-8">
            <div class=" px-4 flex flex-row">
                <div>
                    <h3 class="text-4xl text-[#46555f]">Abstract</h3>
                </div>
                <div class="ml-4 border-2 border-[#46555f] ">
                    <a href="#" class=" bg-transparent hover:bg-gray-800">
                    <p class="p-2 text-[#46555f]">View all</p>
                    </a>
                </div>
            </div>

            <div class="flex flex-row mx-4 my-4">
                <!-- Absatract Landscape -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-landscape-wall-art.jpg?v=1677771016&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Landscape</p>
                    </div>
                </div>

                
                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-flower-wall-art.jpg?v=1669032212&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Flower</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-geometric-wall-art.jpg?v=1677772129&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Geometry</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-by-atmosphere-wall-art.jpg?v=1649674601&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract by atmosphere</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-digital-wall-art.jpg?v=1649153557&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract digital</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/strokes-and-lines-wall-art.jpg?v=1669031933&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">strokes & lines</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Advocacy Art -->
        <div class="pt-8">
            <div class="pt-4 px-4 flex flex-row">
                <div>
                    <h3 class="text-4xl text-[#46555f]">Advocacy</h3>
                </div>
                <div class="ml-4 border-2 border-[#46555f] ">
                    <a href="#" class=" bg-transparent hover:bg-gray-800">
                    <p class="p-2 text-[#46555f]">View all</p>
                    </a>
                </div>
            </div>

            <div class="flex flex-row mx-4 my-4">
                <!-- Absatract Landscape -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-landscape-wall-art.jpg?v=1677771016&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Landscape</p>
                    </div>
                </div>

                
                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-flower-wall-art.jpg?v=1669032212&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Flower</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-geometric-wall-art.jpg?v=1677772129&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Geometry</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-by-atmosphere-wall-art.jpg?v=1649674601&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract by atmosphere</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-digital-wall-art.jpg?v=1649153557&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract digital</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/strokes-and-lines-wall-art.jpg?v=1669031933&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">strokes & lines</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- Animal -->
        <div class="pt-8">
            <div class="pt-4 px-4 flex flex-row">
                <div>
                    <h3 class="text-4xl text-[#46555f]">Animal</h3>
                </div>
                <div class="ml-4 border-2 border-[#46555f] ">
                    <a href="#" class=" bg-transparent hover:bg-gray-800">
                    <p class="p-2 text-[#46555f]">View all</p>
                    </a>
                </div>
            </div>

            <div class="flex flex-row mx-4 my-4">
                <!-- Absatract Landscape -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-landscape-wall-art.jpg?v=1677771016&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Landscape</p>
                    </div>
                </div>

                
                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-flower-wall-art.jpg?v=1669032212&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Flower</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-geometric-wall-art.jpg?v=1677772129&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract Geometry</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-by-atmosphere-wall-art.jpg?v=1649674601&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract by atmosphere</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/abstract-digital-wall-art.jpg?v=1649153557&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">Abstract digital</p>
                    </div>
                </div>

                <!--  -->
                <div class="relative mx-2">
                    <img src="https://cdn.shopify.com/s/files/1/1568/8443/collections/strokes-and-lines-wall-art.jpg?v=1669031933&width=360" alt="" class="h-52">
                    <div class="absolute bottom-0 bg-white right-0 px-2">
                        <p class="text-xs text-[#46555f] uppercase p-2">strokes & lines</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection