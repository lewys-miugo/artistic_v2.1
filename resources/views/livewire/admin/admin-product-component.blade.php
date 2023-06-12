<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Wishlist</p>
    </div>

    <h1 class="text-center">All Products</h1>

    <div class="text-right mx-8 my-2">
        <!-- <a href="{{-- route('admin.products.add') --}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded ">Add New Category</a> -->
    </div>

    <div class="mx-8">
        @if(Session::has('message'))
            <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
        <table class="w-full px-8 border rounded-lg ">
            <thead>
                <tr class="bg-blue-200">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Product Name</th>
                <th class="py-2 px-4">Stock</th>
                <th class="py-2 px-4">Price</th>
                <th class="py-2 px-4">Category</th>
                <th class="py-2 px-4">Slug</th>
                <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=($products->currentPage()-1)*$products->perPage();
                @endphp

                @foreach($products as $product)
                    <tr class="even:bg-gray-100 odd:bg-white">
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{++$i}}</td>
                        <td class="py-2 px-4  text-center"><img src="{{asset('images/product--1.webp')}}" alt="{{$product->name}}"></td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{$product->name}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{$product->stock_status}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{$product->regular_price}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{$product->category->name}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{$product->created_at}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">
                            
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
            {{$products->links()}}

    </div>

</div>
