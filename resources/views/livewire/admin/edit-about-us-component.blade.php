<div class="mx-8">
    <div >
        @if(Session::has('message'))
            <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
    </div>

    <form class="flex flex-col items-center justify-center  p-4" wire:submit.prevent="updateAboutus">

        <!-- General -->
        <div class="flex flex-row">
            <div class="m-2">
                <label for="general" class="block mb-1">General About Us</label>
                <textarea name="general" id="" cols="50" rows="3" placeholder="Enter general about us" wire:model="general"></textarea>
                @error('general')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="m-2 flex flex-col">
                <label for="general_image">General image </label>
                <input type="file" name="general_image" id="" wire:model="new_general_image">
                @if($new_general_image)
                    <img src="{{$new_general_image->temporaryUrl()}}" class="m-2 w-32" alt="">
                @else
                    <img src="{{asset('images/aboutus')}}/{{$general_image}}" class="m-2 w-32" alt="">    
                @endif    
                @error('new_general_image')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
        </div>
        <!-- vision -->
        <div class="flex flex-row">
            <div class="m-2">
                <label for="our_vision" class="block mb-1">Our Vision</label>
                <textarea name="our_vision" id="" cols="50" rows="3" placeholder="Enter our_vision " wire:model="our_vision"></textarea>
                @error('our_vision')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="m-2 flex flex-col">
                <label for="vision_image">Vision image </label>
                <input type="file" name="vision_image" id="" wire:model="new_vision_image">
                @if($new_vision_image)
                    <img src="{{$new_vision_image->temporaryUrl()}}" class="m-2 w-32" alt="">
                @else
                    <img src="{{asset('images/aboutus')}}/{{$vision_image}}" class="m-2 w-32" alt="">    
                @endif    
                @error('new_vision_image')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- Objective -->
        <div class="flex flex-row">
            <div class="m-2">
                <label for="our_objective" class="block mb-1">Our Objective</label>
                <textarea name="our_objective" id="" cols="50" rows="3" placeholder="Enter our_objective " wire:model="our_objective"></textarea>
                @error('our_objective')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="m-2 flex flex-col">
                <label for="objective_image">objective image </label>
                <input type="file" name="objective_image" id="" wire:model="new_objective_image">
                @if($new_objective_image)
                    <img src="{{$new_objective_image->temporaryUrl()}}" class="m-2 w-32" alt="">
                @else
                    <img src="{{asset('images/aboutus')}}/{{$objective_image}}" class="m-2 w-32" alt="">    
                @endif    
                @error('new_objective_image')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
        </div>

        <!-- ART -->
        <div class="flex flex-row">
            <div class="m-2">
                <label for="our_art" class="block mb-1">Our Art</label>
                <textarea name="our_art" id="" cols="50" rows="3" placeholder="Enter our art " wire:model="our_art"></textarea>
                @error('our_art')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>

            <div class="m-2 flex flex-col">
                <label for="art_image">Art image </label>
                <input type="file" name="art_image" id="" wire:model="new_art_image">
                @if($new_art_image)
                    <img src="{{$new_art_image->temporaryUrl()}}" class="m-2 w-32" alt="">
                @else
                    <img src="{{asset('images/aboutus')}}/{{$art_image}}" class="m-2 w-32" alt="">    
                @endif    
                @error('new_art_image')
                    <p class="text-white bg-red-300">{{$message}}</p>
                @enderror
            </div>
        </div>
        <button type="submit" class="w-32 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Update</button>

        @if(Session::has('message'))
        <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg mt-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span class="font-semibold">Success! | {{Session::get('message')}}</span>
        </div>
        @endif
    </form> 
</div>
