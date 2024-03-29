<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > All Slides</p>
    </div>

    <h1 class="text-center">All Slides</h1>

    <div class="text-right mx-8 my-2">
        <a href="{{route('admin.home.slide.add')}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded ">Add New Slide</a>
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
                <th class="py-2 px-2">TopTitle</th>
                <th class="py-2 px-4">Title</th>
                <th class="py-2 px-4">SubTitle</th>
                <th class="py-2 px-4">Offer</th>
                <th class="py-2 px-4">Link</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($slides as $slide)
                    <tr class="even:bg-gray-100 odd:bg-white">
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{++$i}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center"><img src="{{asset('images/slider')}}/{{$slide->image}}" class="w-48" /></td>
                        <td class="py-2 px-4  text-center">{{$slide->top_title}}</td>
                        <td class="py-2 px-4  text-center">{{$slide->title}}</td>
                        <td class="py-2 px-4  text-center">{{$slide->sub_title}}</td>
                        <td class="py-2 px-4  text-center">{{$slide->offer}}</td>
                        <td class="py-2 px-4  text-center">{{$slide->link}}</td> 
                        <td class="py-2 px-4  text-center">{{$slide->status == 1 ? 'active':'inactive'}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">
                            <a href="{{ route('admin.home.slide.edit',['slide_id'=>$slide->id]) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">Edit</a>
                            <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" onclick="deleteConfirmation({{ $slide->id }})">Delete</button>
                            <!-- {{$category->id}} -->
                        </td>
                    </tr>

                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
            {{-- $categories->links()--}}

    </div>

</div>

<!-- <div id="deleteConfirmation" class="absolute z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50">
  <div class="bg-white w-1/2 rounded-lg p-8">
    <h2 class="text-xl font-semibold mb-4">Delete Confirmation</h2>
    <p class="mb-6">Are you sure you want to delete?</p>
    <div class="flex justify-end">
      <button class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded mr-4" data-bs-target="#deleteConfirmation" data-bs-toggle="modal">Delete</button>
      <button class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">Cancel</button>
    </div>
  </div>
</div>


@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('category_id',id);
            $('#deleteConfirmation').modal('show');
        }
    </script>
@endpush -->

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

