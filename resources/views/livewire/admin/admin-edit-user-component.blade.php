<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Admin > Add New Category</p>
    </div>

    <h1 class="text-center">Editing User</h1>
    <h1 class="text-center underline my-4"><a href="{{route('admin.customers')}}">All Users</a></h1>


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
        <form class="max-w-md mx-auto" wire:submit.prevent="updateUser">
            <div class="mb-4">
                <label for="name" class="block mb-1">Name</label>
                <input id="name" type="text" name="name" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"  wire:model="name">
                @error('name')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-1">Email</label>
                <input id="email" type="text" name="email" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"  wire:model="email">
                @error('name')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="utype" class="block mb-1">U-type</label>
                <input id="utype" type="text" name="utype" class="w-full rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Utype ADM or USR" wire:model="utype">
                @error('utype')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Submit</button>
        </form>      
    </div>
</div>

