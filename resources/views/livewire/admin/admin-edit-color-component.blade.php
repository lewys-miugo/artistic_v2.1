<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Admin > Edit {{-- $color_name --}} color</p>
    </div>

    <h1 class="text-center">Edit {{-- $color_name --}} Color</h1>
    <h1 class="text-center underline my-4"><a href="{{route('admin.colors')}}">All Colors</a></h1>


    <div class="mx-8">
        
        @if(Session::has('message'))
            <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
        <form class="max-w-md mx-auto" wire:submit.prevent="updateColor">

            <div class="mb-4">
                <label for="name" class="block mb-1">Name</label>
                <input id="name" type="text" name="name" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter name of color" wire:model="name" wire:keyup="generateSlug()">
                @error('name')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>



            <div class="mb-4">
                <label for="slug" class="block mb-1">Slug</label>
                <input id="slug" type="text" name="slug" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter color slug" wire:model="slug">
                @error('slug')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="combination" class="block mb-1" >Combination</label>
                <select name="combination" wire:model="combination" id="">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
                @error('combination')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="m-2 flex flex-col">
                    <label for="image">Image 1</label>
                    <input type="file" name="image" id="" wire:model="newimage">
                    @if($newimage)
                        <img src="{{$newimage->temporaryUrl()}}" class="m-2 w-32" alt="">
                    @else
                        <img src="{{asset('images/colors')}}/{{$image}}" class="m-2 w-32" alt="">    
                    @endif    
                    @error('newimage')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror
                </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Submit</button>
        </form>      
    </div>
</div>
