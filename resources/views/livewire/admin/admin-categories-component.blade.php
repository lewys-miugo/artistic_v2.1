<div>
    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Wishlist</p>
    </div>

    <div>   
      <h1 class="text-center">All Categories</h1>
    </div>
    <div class="text-right mx-8 my-2">
        <a href="{{route('admin.categories.add')}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded ">Add New Category</a>
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
                            <a href="{{route('admin.category.edit',['category_id'=>$category->id])}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">Edit</a>
                            <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" onclick="deleteConfirmation({{$category->id}})">Delete</button>
                            <!-- {{$category->id}} -->
                        </td>
                    </tr>

                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
            {{$categories->links()}}

    </div>

    <div id="deleteConfirmation" class="fixed z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
      <div class="bg-white w-1/2 rounded-lg p-8">
        <h2 class="text-xl font-semibold mb-4">Delete Confirmation</h2>
        <p class="mb-6">Are you sure you want to delete this item?</p>
        <div class="flex justify-end">
          <button onclick="deleteCategory()"  class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded mr-4">Yes</button>
          <button onclick="cancelDelete()" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">Cancel</button>
        </div>
      </div>
    </div>

</div>

<script>
  function deleteConfirmation(id) {
    // Set the category ID
    document.getElementById('deleteConfirmation').classList.remove('hidden');
    // Simulate setting the category_id in a Laravel Livewire component
    console.log("Deleting category with ID:", id);
    @this.set('category_id', id);
  }

    function deleteCategory() {
    // Get the category ID
    @this.call('deleteCategory');
    var categoryId = document.getElementById('deleteConfirmation').dataset.id;
    document.getElementById('deleteConfirmation').classList.add('hidden');
  }

  function cancelDelete() {
    document.getElementById('deleteConfirmation').classList.add('hidden');
    console.log("Canceling deleting category ");

  }
</script>
