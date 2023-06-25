<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Admin > Add New Product</p>
    </div>

    <h1 class="text-center">Adding New Product</h1>
    <h1 class="text-center underline my-4"><a href="{{route('admin.products')}}">All Products</a></h1>


    <div class="mx-8">
        <!-- <form>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Enter name of category" >
            </div>
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" placeholder="Enter name of category" >
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded ">Submit</button>
        </form> -->
        @if(Session::has('message'))
            <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
        <form class="max-w-md mx-auto" wire:submit.prevent="addProduct">
            <!-- NAMe -->
            <div class="mb-4">
                <label for="name" class="block mb-1">Name</label>
                <input id="name" type="text" name="name" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter name of artPiece" wire:model="name" wire:keyup="generateSlug()">
                @error('name')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Slug -->

            <div class="mb-4">
                <label for="slug" class="block mb-1">Slug</label>
                <input id="slug" type="text" name="slug" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Product slug" wire:model="slug">
                @error('slug')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Short description -->
            <div class="mb-4">
                <label for="short_description" class="block mb-1">Short Description</label>
                <textarea name="short_description" id="" cols="50" rows="3" placeholder="Enter short Description" wire:model="short_description"></textarea>
                @error('short_description')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Descrption -->
            <div class="mb-4">
                <label for="description" class="block mb-1">Description</label>
                <textarea name="description" id="" cols="50" rows="3" placeholder="Enter Description" wire:model="description"></textarea>
                @error('description')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Regular PRice -->

            <div class="mb-4">
                <label for="regular_price" class="block mb-1">Regular Price</label>
                <input id="##" type="text" name="regular_price" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price">
                @error('regular_price')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-row space-x-2 flex-wrap">
                <div class="mb-4">
                    <label for="regular_price_A0" class="block mb-1">A0 Price</label>
                    <input id="##" type="text" name="regular_price_A0" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_A0">
                    @error('regular_price_A0')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="regular_price_A1" class="block mb-1">A1 Price</label>
                    <input id="##" type="text" name="regular_price_A1" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_A1">
                    @error('regular_price_A1')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_A2" class="block mb-1">A2 Price</label>
                    <input id="##" type="text" name="regular_price_A2" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_A2">
                    @error('regular_price_A2')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_A3" class="block mb-1">A3 Price</label>
                    <input id="##" type="text" name="regular_price_A3" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_A3">
                    @error('regular_price_A3')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_A4" class="block mb-1">A3 Price</label>
                    <input id="##" type="text" name="regular_price_A4" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_A4">
                    @error('regular_price_A4')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_2p" class="block mb-1">2 Pieces Price</label>
                    <input id="##" type="text" name="regular_price_2p" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_2p">
                    @error('regular_price_2p')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_3p" class="block mb-1">3 Pieces Price</label>
                    <input id="##" type="text" name="regular_price_3p" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_3p">
                    @error('regular_price_3p')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="regular_price_4p" class="block mb-1">4 pieces Price</label>
                    <input id="##" type="text" name="regular_price_4p" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_4p">
                    @error('regular_price_4p')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="regular_price_5p" class="block mb-1">5 pieces Price</label>
                    <input id="##" type="text" name="regular_price_5p" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_5p">
                    @error('regular_price_5p')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="regular_price_pa" class="block mb-1">Panaroma Price</label>
                    <input id="##" type="text" name="regular_price_pa" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Regular Price" wire:model="regular_price_pa">
                    @error('regular_price_pa')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>
            </div>

            <!-- SAle_Price -->
            <div class="mb-4">
                <label for="sale_price" class="block mb-1">Sale Price</label>
                <input id="##" type="text" name="sale_price" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Sale Price" wire:model="sale_price">
                @error('sale_price')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- SKU -->
            <div class="mb-4">
                <label for="sku" class="block mb-1">SKU</label>
                <input id="##" type="text" name="sku" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter SKU" wire:model="sku">
                @error('sku')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Stock Status -->
            <div class="mb-4">
                <label for="sale_price" class="block mb-1" wire:model="stock_status">Stock Status</label>
                <select name="stock_status" id="">
                    <option value="instock">In Stock</option>
                    <option value="outofstock">Out of Stock</option>
                </select>
                @error('stock_status')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Featured Product -->
            <div class="mb-4">
                <label for="featured" class="block mb-1" >Featured</label>
                <select name="featured" wire:model="featured" id="">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                @error('featured')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <!-- Product Quantity -->
            <div class="mb-4">
                <label for="quantity" class="block mb-1">Quantity</label>
                <input id="##" type="text" name="quantity" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Product Quantity" wire:model="quantity">
                @error('quantity')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            
            <div class="mb-4">
                <label for="image" class="block mb-1">Image</label>
                <input type="file" name="images" id="" wire:model="images" multiple>
                
                @error('images')
                    <p class="text-white bg-red-300">{{-- $message --}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="category_id" class="block mb-1">select Category</label>
                <select name="category_id" id="" wire:model="category_id">
                    <option value="">Default category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>


            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Submit</button>
        </form>      
    </div>
</div>
