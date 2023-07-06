<div>
    {{-- In work, do what you enjoy. --}}
    <div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Admin > Edit FAQ</p>
    </div>

    <h1 class="text-center">Editing an FAQ</h1>
    <h1 class="text-center underline my-4"><a href="{{route('admin.faqs')}}">All FAQs</a></h1>


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
        <form class="max-w-md mx-auto" wire:submit.prevent="updateFaq" >
            <div class="mb-4">
                <label for="question" class="block mb-1">Question</label>
                <input id="question" type="text" name="question" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Question" wire:model="question">
                @error('question')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="answer" class="block mb-1">Answer</label>
                <textarea id="answer" cols="30" rows="4" type="textarea" name="answer" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Answer of the question above" wire:model="answer"></textarea>
                @error('answer')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Submit</button>
        </form>      
    </div>
</div>

</div>
