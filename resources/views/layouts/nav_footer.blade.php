<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Artistic</title>
</head>
<body>
    <!-- component -->
<nav class="flex justify-between pl-12 py-10 items-center bg-white">
	<a href="{{'/'}}">
  		<h1 class="text-xl text-gray-800 font-bold">Artistic Excursions</h1>
	</a>
  <div class="flex mr-8 items-center">
    <div class="flex bg-gray-200 items-center">
      
      <input class="mr-2 outline-none bg-transparent font-" type="text" name="search" id="search" placeholder="Search by subject,color,room" />

      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
    <ul class="flex items-center pl-8 space-x-6">
      <li class="font-semibold text-gray-700">Free Shipping</li>
      <li class="font-semibold text-gray-700">Returns</li>
      <li>
        <button class="group">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            	<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
        	</svg>
			<div class="absolute hidden group-focus:block -ml-28 bg-white shadow-md mt-1 rounded">
				
				<ul class="text-center border rounded">
					<li class="px-4 py-1  m-4">Create your account to:</li>
					<li class="px-12 border-t "></li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Save your wishlist</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Track your order</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Save your order data</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">Register</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b text-sm">already have an account? <span><a href="#">login</a></span> </li>

				</ul>
				
			</div>

		</button>

      </li>
      <li >
        <button class="group">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            	<path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        	</svg>

			<div class="absolute hidden group-focus:block min-w-full w-max bg-white shadow-md mt-1 rounded">
				<ul class="text-left border rounded">
					<li class="px-4 py-1 hover:bg-gray-100 border-b">Menu list 1</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b">Menu list 1</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b">Menu list 1</li>
					<li class="px-4 py-1 hover:bg-gray-100 border-b">Menu list 1</li>
					<li class="px-4 py-1 hover:bg-gray-100 ">Menu list 1</li>
				</ul>
			</div>
		</button>

      </li>
      <li>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
        </svg>

      </li>
    </ul>
  </div>
</nav>
<div class="gray-300  ">
	<ul class="list-none flex pl-4 mx- text-[#46555f]">
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472] ">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">Best Sellers</p>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472] ">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">Trending</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">New</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<a href="{{'collections'}}">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">Subject</p>
			</a>			
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">colors</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">rooms</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">styles</p>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<a href="{{'huntlayout'}}">
				<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">convas sets</p>
			</a>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">push pin maps</p>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">Exclusive</p>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">artists</p>
		</li>
		<li class=" border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-2 my-2 uppercase text-sm font-bold hover:text-[#273137]">officially licensed</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-1 my-2 uppercase text-sm text-[#c45472] font-bold ">Personalized gifts</p>
		</li>
		<li class="border-y-2 transition ease-in-out	delay-200 duration-100 hover:border-t-[#c45472]">
			<p class="mx-1 my-2 uppercase text-sm text-[#c45472] font-bold">hot deals</p>
		</li>

	</ul>
</div>

@yield('content')

<footer class="p-6 relative z-100 top-0 mt-16 bg-[#556E7B] text-white dark:bg-gray-800 dark:text-gray-100">

	<div class="my-8">
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
	</div>
	<div class="container grid grid-cols-2 mx-auto gap-x-3 gap-y-12 sm:grid-cols-3 md:grid-cols-6">
		<div class="flex flex-col space-y-4">
			<h2 class="font-medium ">CUSTOMER SERVICE</h2>
			<div class="flex flex-col space-y-2 text-sm dark:text-gray-400">
				<a rel="noopener noreferrer" href="#">Help Center</a>
				<a rel="noopener noreferrer" href="#">Shipping & Delivery</a>
				<a rel="noopener noreferrer" href="#">Track Order</a>
				<a rel="noopener noreferrer" href="#">Return Policy</a>
				<a rel="noopener noreferrer" href="#">Customer Service</a>
				<a rel="noopener noreferrer" href="#">Accessibility Statement</a>
				<a rel="noopener noreferrer" href="#">Let's Chat</a>
			</div>
		</div>
		<div class="flex flex-col space-y-4">
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
		</div>
		<div class="flex flex-col space-y-4">
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
		</div>
		<div class="flex flex-col space-y-4">
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
		</div>

        <div class="flex flex-col space-y-4">
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
		</div>

        <div class="flex flex-col space-y-4">
			<h2 class="font-medium">COMPANY</h2>
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
		</div>
        
	</div>
	<div class="flex items-center justify-center px-6 pt-12 text-sm">
		<span class="dark:text-gray-400">© Copyright 2023, Artistic Excursions. All Rights Reserved.</span>
	</div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>

