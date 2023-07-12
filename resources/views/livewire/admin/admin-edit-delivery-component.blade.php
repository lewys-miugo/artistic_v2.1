<div class="bg-gray-100">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="py-4 px-6">
                <!-- <h2 class="text-2xl font-bold mb-4">Delivery Policy</h2> -->
                <form wire:submit.prevent="updateDelivery">
                    <label class="text-2xl font-bold mb-4" for="delivery_policy">Delivery Policy</label>
                    <div wire:ignore>
                        <textarea name="delivery_policy" id="delivery_policy" cols="30" rows="20" wire:model="delivery_policy">
                        </textarea>
                    </div>
                    @error('delivery_policy')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror

                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-4 px-4 rounded">Update</button>

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
        </div>
    </div>
</div>

