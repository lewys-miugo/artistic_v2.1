<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg overflow-hidden shadow-md">
            <div class="py-4 px-6">
                <!-- <h2 class="text-2xl font-bold mb-4">return Policy</h2> -->
                <form wire:submit.prevent="updateReturnPolicy">
                    <label class="text-2xl text-center font-bold mb-4" for="return_policy">Return Policy   </label>

                    <div class="mb-4">
                        <h2 class="text-center underline underline-offset-2">Preview</h2>
                        <p class="mx-8">{!!$return_policy!!}</p>
                    </div>

                    <div wire:ignore>
                        <textarea name="return_policy" id="return_policy" wire:model="return_policy" >
                        </textarea>
                        
                    </div>

                    @error('return_policy')
                        <p class="text-white bg-red-300">{{$message}}</p>
                    @enderror

                    <div class="flex justify-center mt-2">
                        <button type="submit" class="bg-blue-500  hover:bg-blue-600 text-white py-2 px-4 rounded">Update</button>
                    </div>

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
    <script>
        $('#return_policy').summernote({
            // placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 300,
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('return_policy',contents);
                }
            }

        });
        {{-- $('#return_policy').summernote('code', '{{$returnPolicy->return_policy}}'); --}}
    </script>
    
</div>
