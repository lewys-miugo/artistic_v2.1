<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Wishlist</p>
    </div>

    <h1 class="text-center">All Categories</h1>

    <div class="text-right mx-8 my-2">
        <a href="{{route('admin.categories.add')}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded ">Add New Category</a>
    </div>

    <div class="mx-8">
        <table class="w-full px-8 border rounded-lg ">
            <thead>
                <tr class="bg-blue-200">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Slug</th>
                <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=($categories->currentPage()-1)*$categories->perPage();
                @endphp
                @foreach($categories as $category)
                    <tr class="even:bg-gray-100 odd:bg-white">
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{++$i}}</td>
                        <td class="py-2 px-4  text-center">{{$category->name}}</td>
                        <td class="py-2 px-4  text-center">{{$category->slug}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">Edit</button>
                            <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded">Delete</button>
                        </td>
                    </tr>

                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
            {{$categories->links()}}

    </div>

</div>
