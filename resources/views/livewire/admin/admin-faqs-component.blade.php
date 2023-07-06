<div>
    {{-- Stop trying to control. --}}
    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > FAQs</p>
    </div>

    <div>   
      <h1 class="text-center">All FAQs</h1>
    </div>
    <div class="text-right mx-8 my-2">
        <a href="{{route('admin.faq.add')}}" class="bg-blue-500 cursor-pointer hover:bg-blue-600 text-white py-1 px-2 rounded ">Add New FAQ</a>
    </div>
    <div class="container mx-auto p-4">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Question</th>
                    <th class="px-4 py-2">Answer</th>
                    <th class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=($faqs->currentPage()-1)*$faqs->perPage();
                @endphp
                @foreach($faqs as $faq)
                    <tr class="even:bg-gray-100 odd:bg-white">
                        <td class="border px-4 py-2">{{++$i}}</td>
                        <td class="border px-4 py-2">{{$faq->question}}</td>
                        <td class="border px-4 py-2">{{$faq->answer}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('admin.faq.edit',['faq_id'=>$faq->id]) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">Edit</a>
                            <button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded" onclick="deleteConfirmation({{$faq->id}})">Delete</button>
                        </td>
                    </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <div wire:ignore id="deleteConfirmation" class="fixed z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white w-1/2 rounded-lg p-8">
            <h2 class="text-xl font-semibold mb-4">Delete Confirmation</h2>
            <p class="mb-6">Are you sure you want to delete this Faq?</p>
            <div class="flex justify-end">
                <button onclick="deleteFaq()"  class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded mr-4">Yes</button>
                <button onclick="cancelDelete()" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">Cancel</button>
            </div>
        </div>
    </div>

    <!-- <script>
        function deleteConfirmation(id) {
            Set the faq ID
            document.getElementById('deleteConfirmation').classList.remove('hidden');
            // Simulate setting the faq_id in a Laravel Livewire component
            console.log("Deleting Faq with ID:", id);
            @this.set('faq_id', id);
        }

            function deleteFaq() {
            Get the faq ID
            @this.call('deleteFaq');
            var faqId = document.getElementById('deleteConfirmation').dataset.id;
            document.getElementById('deleteConfirmation').classList.add('hidden');
        }

        function cancelDelete() {
            document.getElementById('deleteConfirmation').classList.add('hidden');
            console.log("Canceling deleting faq ");

        }
    </script> -->

    <script>
    function deleteConfirmation(id) {
        // Set the faq ID
        document.getElementById('deleteConfirmation').classList.remove('hidden');
        // Simulate setting the faq_id in a Laravel Livewire component
        console.log("Deleting Faq with ID:", id);
        @this.set('faq_id', id);
    }

    function deleteFaq() {
        // Get the faq ID
        var faqId = document.getElementById('deleteConfirmation').dataset.id;
        @this.call('deleteFaq', faqId);
        document.getElementById('deleteConfirmation').classList.add('hidden');
    }

    function cancelDelete() {
        document.getElementById('deleteConfirmation').classList.add('hidden');
        console.log("Canceling deleting faq");
    }
</script>
</div>
