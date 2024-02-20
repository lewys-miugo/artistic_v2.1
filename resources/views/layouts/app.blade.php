<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
        <link rel="icon" href="{{asset('ae_w_favicon.png')}}">
        <title>{{-- config('app.name', 'Artistic Excursions') --}}Artistic Excursions</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @livewireStyles
        <!-- summernote -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <!-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"> -->

        <!-- google-ads -->

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-QEX7M925JR">
        </script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-QEX7M925JR');
        </script>

        <!-- Icons -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Styles -->
        <style>
            /* Hide the scrollbar for WebKit (Chrome, Safari, Opera) within .category-scroll */
            .category-scroll ::-webkit-scrollbar {
                width: 0.5rem;
                background-color: transparent;
            }

            .theme-scroll ::-webkit-scrollbar {
                width: 0.5rem;
                background-color: transparent;
            }

            .category-scroll ::-webkit-scrollbar-thumb {
                background-color: transparent;
            }

            .theme-scroll ::-webkit-scrollbar-thumb {
                background-color: transparent;
            }

            /* Hide the scrollbar for Firefox within .category-scroll */
            /* Note: Firefox currently doesn't support the ::-webkit-scrollbar properties,
            but you can use these styles to target Firefox when it does. */
            @-moz-document url-prefix() {
                .category-scroll .overflow-y-auto {
                    scrollbar-width: none;
                }
            }

            @-moz-document url-prefix() {
                .theme-scroll .overflow-y-auto {
                    scrollbar-width: none;
                }
            }
        </style>


        <!-- swiper js -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!-- AR -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@google/model-viewer"></script> -->



        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @vite(['resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <header id="lg-screen" class="z-50 h-24 sticky top-0">
                <!-- <nav class="flex justify-between h-20 pl-12 py-10 items-center bg-white">
                    <a href="{{-- '/' --}}">
                         <h1 class="text-xl text-gray-800 font-bold">Artistic Excursions</h1>
                         <img src="{{-- asset('Logo.jpeg') --}}" alt="Artistc Excursion Logo" class="w-48">
                    </a>
                    <div class="flex mr-8 items-center">
                        <div class=" flex bg-gray-200 items-center">

                            <input class="mr-2 outline-none bg-transparent font-" type="text" name="search" id="search" placeholder="Search by subject,color,room" />

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <ul class="flex items-center pl-8 space-x-6">
                            <li class="font-semibold text-gray-700">Return Policy</li>
                            <li class="font-semibold text-gray-700">


                            </li>

                        </ul>
                    </div>
                </nav>  -->

                <!-- Latest navbar -->

                <nav class="p-5 bg-white h-24 shadow md:flex md:items-center md:justify-between">
                    <div class="flex justify-between items-center ">
                        <span class="text-2xl font-[Poppins] cursor-pointer">
                           <a href="/">
                                <img src="{{asset('Logo.jpeg')}}" alt="Artistc Excursion Logo" loading="lazy" class=" w-36 md:w-40 lg:w-52">
                           </a>

                        </span>

                        <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                        </span>
                    </div>

                    <ul class="md:flex md:items-center space-y-2 z-[-1] md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                        <li class="mx-4 my-6 md:my-0">
                            <!-- <a href="#" class="text-xl hover:text-cyan-500 duration-500">HOME</a> -->
                            @livewire('header-search-component')
                        </li>
                        <li class="mx-4 my-6 md:my-0 cursor-pointer font-semibold text-gray-700 hover:text-[#C2B4D6] duration-500">
                            <!-- <a href="#" class="text-xl hover:text-cyan-500 duration-500">SERVICE</a> -->
                            <a href="{{route('return.policy')}}">Return Policy</a>

                        </li>
                        <li class="mx-4 my-6 md:my-0 cursor-pointer font-semibold text-gray-700 hover:text-[#C2B4D6] duration-500">
                            <!-- <a href="#" class="text-xl hover:text-cyan-500 duration-500">SERVICE</a> -->
                            <a href="{{route('art.gallery')}}">Gallery</a>

                        </li>
                        <li class="mx-4 my-6 md:my-0 ">
                            @auth
                                <button id="myaccount-btn">{{ Auth::user()->name }}
                                    <div class="absolute hidden ml-8 md:-ml-28 lg:-ml-28 bg-white shadow-md mt-1 rounded" id="myaccountdropdown">
                                        @if(Auth::user()->utype== 'ADM')
                                            <ul class="text-center border rounded space-y-2">
                                                <li class="px-4 py-1  m-4">{{ Auth::user()->name }}</li>
                                                <li class="px-12 border-t "></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.products')}}">Art Pieces</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.categories')}}">Categories</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.themes')}}">Themes</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{ route('admin.colors') }} ">Colors</a></li>
                                                <li class=" px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.order')}}">Orders</a></li>
                                                <li class=" px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.faqs')}}">FAQs</a></li>
                                                <li class=" px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.about.us.edit')}}">About Us</a></li>
                                                <li class=" px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.delivery.edit')}}">Delivery Policy</a></li>
                                                <li class=" px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.return.policy.edit')}}">Return Policy</a></li>
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{-- route('admin.home.slider') --}}">Manage Slider</a></li> -->
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Coupons</li> -->
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Orders</li> -->
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('admin.customers')}}">Customers</a></li>
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Logout</li> -->

                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('register')}}" class="underline underline-offset-2 text-blue-400">Sign up</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">already have an account? <span><a href="{{route('login')}}" class="text-blue-400 underline underline-offset-2">login</a></span> </li> -->

                                            </ul>
                                        @else
                                            <ul class="text-center border rounded">
                                                <li class="px-4 py-1  m-4">{{ Auth::user()->name }}</li>
                                                <li class="px-12 border-t "></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{-- route('/') --}}">Dashboard</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('user.order')}}">My Orders</a></li>
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Offers</li> -->
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Orders</li> -->
                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Logout</li> -->

                                                <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('register')}}" class="underline underline-offset-2 text-blue-400">Sign up</a></li>
                                                <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">already have an account? <span><a href="{{route('login')}}" class="text-blue-400 underline underline-offset-2">login</a></span> </li> -->

                                            </ul>
                                        @endif

                                    </div>
                                </button>
                            @endif
                        </li>
                        <!-- <li class="mx-4 my-6 md:my-0">
                            <a href="#" class="text-xl hover:text-cyan-500 duration-500">CONTACT</a>
                        </li>
                        <li class="mx-4 my-6 md:my-0">
                            <a href="#" class="text-xl hover:text-cyan-500 duration-500">BLOG'S</a>
                        </li>

                        <button class="bg-cyan-400 text-white font-[Poppins] duration-500 px-6 py-2 mx-4 hover:bg-cyan-500 rounded ">
                            Get started
                        </button> -->

                        @auth
                            <li class="mx-4 my-6 md:my-0">
                                <button class="group" id="usr-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <div class="absolute hidden ml-8 md:-ml-28 lg:-ml-28 bg-white shadow-md mt-1 rounded" id="usrdropdown">

                                        <ul class="text-center border rounded" >
                                            <li class="px-4 py-1  m-4">{{Auth::user()->name}}</li>
                                            <li class="px-12 border-t "></li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">
                                                <form action="{{route('logout')}}" method="POST">
                                                    @csrf
                                                    <a href="{{route('logout')}}" class="underline underline-offset-2 text-blue-400" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                                                </form>
                                            </li>
                                            <!-- <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">already have an account? <span><a href="{{route('login')}}" class="text-blue-400 underline underline-offset-2">login</a></span> </li> -->

                                        </ul>

                                    </div>

                                </button>

                            </li>
                        @else
                            <li class="mx-4 my-6 md:my-0">
                                <button class="group" id="usr-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                    </svg>
                                    <div class="absolute hidden ml-8 md:-ml-28 lg:-ml-28 bg-white shadow-md mt-1 rounded" id="usrdropdown">

                                        <ul class="text-center border rounded">
                                            <li class="px-4 py-1  m-4">Create your account to:</li>
                                            <li class="px-12 border-t "></li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Save your wishlist</li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Track your order</li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Save your order data</li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm"><a href="{{route('register')}}" class="underline underline-offset-2 text-blue-400">Sign up</a></li>
                                            <li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">already have an account? <span><a href="{{route('login')}}" class="text-blue-400 underline underline-offset-2">login</a></span> </li>

                                        </ul>

                                    </div>

                                </button>

                            </li>
                        @endif

                        <li class=" relative mx-4 my-6 md:my-0">
                            @livewire('wishlist-icon-component')

                        </li>
                        <li class=" relative mx-4 my-6 md:my-0">
                            <!-- Cart component -->
                            @livewire('cart-icon-component')

                        </li>
                        <!-- <h2 class=""></h2> -->
                    </ul>
                </nav>

            </header>



            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="p-6 relative top-0 mt-16 bg-[#556E7B] text-white">

                <!-- <div class="my-8">
                    <h3 class="text-4xl text-center uppercase">Enjoy 20% Welcome Gift</h3>
                    <p class="text-xl text-center my-4">Subscribe For Exclusive Tips, Updates, & Inspiration</p>

                    <section class="">
                        <div class="px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
                            <div class="mx-auto max-w-screen-md sm:text-center">
                                <form action="#">
                                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                                        <div class="relative w-full">
                                            <label for="email" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                            </div>
                                            <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Enter your email" type="email" id="email" required="">
                                        </div>
                                        <div>
                                            <button type="submit" class="py-2 px-5 w-full text-lg font-medium text-center text-white rounded-lg border cursor-pointer bg-[#C45F72] border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-[#C45F72] focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="mx-auto max-w-screen-sm text-sm text-left text-[#FFFFFF] newsletter-form-footer dark:text-gray-300">We care about the protection of your data. <a href="#" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">Read our Privacy Policy</a> & <a href="#" class="font-medium text-primary-600 dark:text-primary-500 hover:underline">our Terms and Conditions</a></div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div> -->
                <div class="container grid grid-cols-2 mx-2 md:mx-12 lg:mx-16 gap-y-12 sm:grid-cols-2 md:grid-cols-2">
                    <div class="flex flex-col space-y-4">
                        <h2 class="font-medium ">CUSTOMER SERVICE</h2>
                        <div class="flex flex-col space-y-2 text-sm">

                            <a rel="noopener noreferrer" class="hover:text-[#c45472] hover:underline-offset-4" href="{{route('delivery.policy')}}">Delivery</a>
                            <a rel="noopener noreferrer" class="hover:text-[#c45472] hover:underline-offset-4" href="{{route('return.policy')}}">Return Policy</a>
                            <a class="hover:text-[#c45472] hover:underline-offset-4" href="{{route('faq')}}">FAQs</a>
                            <a class="hover:text-[#c45472] hover:underline-offset-4" href="{{route('about.us')}}">About Us</a>
                            <a class="hover:text-[#c45472] hover:underline-offset-4" href="{{route('public.policy')}}">Public Policy</a>
                            <!-- <a rel="noopener noreferrer" href="#">Accessibility Statement</a> -->
                        </div>
                    </div>
                    <!-- <div class="flex flex-col space-y-4">
                        <h2 class="font-medium">SHOP BY</h2>
                        <div class="flex flex-col space-y-2 text-sm dark:text-gray-400">
                            <a rel="noopener noreferrer" href="#">Subjects</a>
                            <a rel="noopener noreferrer" href="#">New Arrivals</a>
                            <a rel="noopener noreferrer" href="#">By Style</a>
                            <a rel="noopener noreferrer" href="#">By Color</a>
                            <a rel="noopener noreferrer" href="#">By Shape</a>
                            <a rel="noopener noreferrer" href="#">By Atmosphere</a>
                            <a rel="noopener noreferrer" href="#">Exclusive Wall Art</a>
                            <a rel="noopener noreferrer" href="#">Photo Prints</a>
                        </div>
                    </div> -->
                    <!-- <div class="flex flex-col space-y-4">
                        <h2 class="font-medium">FOR BUSINESS</h2>
                        <div class="flex flex-col space-y-2 text-sm dark:text-gray-400">
                            <a rel="noopener noreferrer" href="#">Healthcare</a>
                            <a rel="noopener noreferrer" href="#">Cuisine</a>
                            <a rel="noopener noreferrer" href="#">Beauty</a>
                            <a rel="noopener noreferrer" href="#">School</a>
                            <a rel="noopener noreferrer" href="#">Hotel & Hospitality</a>
                            <a rel="noopener noreferrer" href="#">Accounting Office</a>
                            <a rel="noopener noreferrer" href="#">Plugins</a>
                        </div>
                    </div> -->
                    <!-- <div class="flex flex-col space-y-4">
                        <h2 class="font-medium">WALL ART BY ROOM</h2>
                        <div class="flex flex-col space-y-2 text-sm dark:text-gray-400">
                            <a rel="noopener noreferrer" href="#">Subjects</a>
                            <a rel="noopener noreferrer" href="#">New Arrivals</a>
                            <a rel="noopener noreferrer" href="#">By Style</a>
                            <a rel="noopener noreferrer" href="#">By Color</a>
                            <a rel="noopener noreferrer" href="#">By Shape</a>
                            <a rel="noopener noreferrer" href="#">By Atmosphere</a>
                            <a rel="noopener noreferrer" href="#">Exclusive Wall Art</a>
                            <a rel="noopener noreferrer" href="#">Photo Prints</a>
                        </div>
                    </div> -->

                    <!-- <div class="flex flex-col space-y-4">
                        <h2 class="font-medium">POPULAR WALL ART</h2>
                        <div class="flex flex-col space-y-2 text-sm dark:text-gray-400">
                            <a rel="noopener noreferrer" href="#">Subjects</a>
                            <a rel="noopener noreferrer" href="#">New Arrivals</a>
                            <a rel="noopener noreferrer" href="#">By Style</a>
                            <a rel="noopener noreferrer" href="#">By Color</a>
                            <a rel="noopener noreferrer" href="#">By Shape</a>
                            <a rel="noopener noreferrer" href="#">By Atmosphere</a>
                            <a rel="noopener noreferrer" href="#">Exclusive Wall Art</a>
                            <a rel="noopener noreferrer" href="#">Photo Prints</a>
                        </div>
                    </div> -->

                    <div class="flex flex-col space-y-4">
                        <h2 class="font-medium">COMPANY CONTACT</h2>
                        <div class="flex flex-col space-y-2 text-sm ">
                            <a rel="noopener noreferrer"class="hover:text-[#c45472] hover:underline-offset-4 truncate" href="https://www.facebook.com/artisticexcursions/">Facebook: Artistic Excursions</a>
                            <a rel="noopener noreferrer" class="hover:text-[#c45472] hover:underline-offset-4 truncate" href="https://www.instagram.com/Artistic_Excursions/">Instagram:@Artistic_Excursions</a>
                            <a rel="noopener noreferrer" class="hover:text-[#c45472] hover:underline-offset-4 truncate" href="mailto:artisticexcursions@gmail.com">Email: artisticexcursions@gmail.com</a>
                            <a href="tel:+254708016072" class="hover:text-[#c45472] hover:underline-offset-4 ">Phone no: +254708016072</a>
                            <a href="tel:+254716340285" class="hover:text-[#c45472] hover:underline-offset-4">Phone no: +254716340285</a>

                            <!-- <a rel="noopener noreferrer" href="#">By Shape</a>
                            <a rel="noopener noreferrer" href="#">By Atmosphere</a>
                            <a rel="noopener noreferrer" href="#">Exclusive Wall Art</a>
                            <a rel="noopener noreferrer" href="#">Photo Prints</a> -->
                        </div>
                    </div>

                </div>
                <div class="flex items-center justify-center px-6 pt-12 text-sm">
                    <span class="">© Copyright 2023, Artistic Excursions. All Rights Reserved.</span>
                </div>
            </footer>


        </div>
        <!-- @stack('scripts') -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
        @livewireScripts



        <!-- MAKING MENU RESPONSIVE -->
        <script>
            function Menu(e){
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
            }
        </script>

        <!-- Swiperjs -->



        <!-- Making drop down menu on user -->
        <script>
            window.addEventListener('DOMContentLoaded', ()=>{
                const usrBtn=document.querySelector('#usr-btn')
                const usrDropdown=document.querySelector('#usrdropdown')

                usrBtn.addEventListener('click', () => {
                    usrDropdown.classList.toggle('hidden')
                    usrDropdown.classList.toggle('flex')
                })
            });

            window.addEventListener('DOMContentLoaded', ()=>{
                const myaccountBtn=document.querySelector('#myaccount-btn')
                const myaccountDropdown=document.querySelector('#myaccountdropdown')

                myaccountBtn.addEventListener('click', () => {
                    myaccountDropdown.classList.toggle('hidden')
                    myaccountDropdown.classList.toggle('flex')
                })
            });
        </script>

        <!-- making nav-link 2 on shop page functional -->
        <!-- <script>
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (!this.classList.contains('border-b-2')) {
                            Remove the active class from all links
                            navLinks.forEach(link => {
                            link.classList.remove('border-b-2', 'border-gray-800');
                            });

                    Add the active class to the clicked link
                    this.classList.add('border-b-2', 'border-gray-800');
                    }
                });
            });
        </script> -->

        <script>
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    if (!this.classList.contains('border-b-2')) {
                            // Remove the active class from all links
                            navLinks.forEach(link => {
                            link.classList.remove('border-b-2', 'border-gray-800');
                            });

                    // Add the active class to the clicked link
                    this.classList.add('border-b-2', 'border-gray-800');
                    }
                });
            });
        </script>


    </body>
</html>
