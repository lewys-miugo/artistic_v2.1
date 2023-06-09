<button >
    <!-- class="group"
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
    </div> -->

    <div class="relative inline-block">
        <a href="{{-- route('shop.cart') --}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>
            @if(Cart::instance('wishlist')->count()>0)
                <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">
                    {{Cart::instance('wishlist')->count()}}
                </span>
            @endif
           
        </a>
    </div>
</button>
