<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    <div class="m-4">
        <div>
                <p class="text-left text-xs uppercase text-[#6a767e]"><a href="/" class="uppercase">Home</a> > checkout</p>
        </div>
    </div>

    <div class="container mx-4 py-4">
        <form action="" wire:submit.prevent="placeOrder">
            <div>
                <div class="flex flex-col md:flex-row lg:flex-row  mb-8">
                    <!-- justify-between -->
                    <div class="w-full md:w-1/2 lg:w-1/2 md:pr-4">
                        <h2 class="text-lg font-bold mb-4">Billing Details</h2>
                        <!-- <div class="mb-4">
                            <label class="block mb-2 text-sm font-medium">County</label>
                            <select class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option>Select County</option>
                                <option>County 1</option>
                                <option>County 2</option>
                                add more options
                            </select>
                        </div> -->
                        <div class="flex flex-row">

                            <div class="mb-4">
                                <label for="county" class="block mb-2 text-sm font-medium">Enter County</label>
                                <input type="text" name="county" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter County " wire:model="county">
                                @error('county') <span>{{$message}}</span> @enderror
                            </div>

                            <div class="mb-4 ml-2">
                                <label for="subcounty" class="block mb-2 text-sm font-medium">Sub-County</label>
                                <input type="text" name="subcounty" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Sub-county or Town" wire:model="subcounty">
                                @error('subcounty') <span>{{$message}}</span> @enderror

                                
                            </div>
                        </div>
                        
                        <div class="flex flex-row">
                            
                            <div class="mb-4">
                                <label for="town" class="block mb-2 text-sm font-medium">Town</label>
                                <input type="text" name="town" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Sub-county or Town" wire:model="town">
                                @error('town') <span>{{$message}}</span> @enderror

                            </div>
                            <div class="mb-4 ml-2">
                                <label for="specificarea" class="block mb-2 text-sm font-medium">Specific Area</label>
                                <input type="text" name="area" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter specific area" wire:model="specificarea" >
                                @error('specificarea') <span>{{$message}}</span> @enderror

                            </div>
                        </div>
                        <div class="flex flex-row">
                            <div class="mb-4">
                                <label for="firstname" class="block mb-2 text-sm font-medium">First Name</label>
                                <input type="text" name="firstname" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Full names" wire:model="firstname">
                                @error('firstname') <span>{{$message}}</span> @enderror

                            </div>
                            <div class="mb-4 ml-2">
                                <label for="lastname" class="block mb-2 text-sm font-medium">Other Name</label>
                                <input type="text" name="lastname" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Full names" wire:model="lastname">
                                @error('lastname') <span>{{$message}}</span> @enderror

                            </div>
                        </div>

                        <div class="flex flex-row">
                            <div class="mb-4 ">
                                <label label="mobile" class="block mb-2 text-sm font-medium">Phone number</label>
                                <input type="text" name="mobile" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="mobile">
                                @error('mobile') <span>{{$message}}</span> @enderror

                            </div>
                            <div class="mb-4 ml-2">
                                <label label="line1" class="block mb-2 text-sm font-medium">Other number</label>
                                <input type="text" name="line1" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="line1">
                                @error('line1') <span>{{$message}}</span> @enderror

                            </div>
                        </div> 

                        <div class="flex flex-row">
                            <div class="mb-4 ">
                                <label label="email" class="block mb-2 text-sm font-medium">Email</label>
                                <input type="text" name="email" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="email">
                                @error('email') <span>{{$message}}</span> @enderror

                            </div>
                        </div>

                        <div class="flex flex-row">
                            <div class="mb-4 ">
                                <label for="different-add" class="inline-flex items-center">
                                    <input id="different-add" type="checkbox" value="1" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="different-add" wire:model="ship_to_different">
                                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">Ship to a different address?</span>
                                </label>   
                            </div>
                        </div>
                        
                        
                        <!-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Place order
                        </button> -->
                    </div>

                    @if($ship_to_different)
                        <div class="w-full md:w-1/2 lg:w-1/2 md:pr-4">
                            <h2 class="text-lg font-bold mb-4">Delivery Details</h2>
                            <!-- <div class="mb-4">
                                <label class="block mb-2 text-sm font-medium">County</label>
                                <select class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option>Select County</option>
                                    <option>County 1</option>
                                    <option>County 2</option>
                                    add more options
                                </select>
                            </div> -->
                            <div class="flex flex-row">

                                <div class="mb-4">
                                    <label for="county" class="block mb-2 text-sm font-medium">Enter County</label>
                                    <input type="text" name="county" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter County " wire:model="s_county">
                                    @error('s_county') <span>{{$message}}</span> @enderror

                                </div>

                                <div class="mb-4 ml-2">
                                    <label for="subcounty" class="block mb-2 text-sm font-medium">Sub-County</label>
                                    <input type="text" name="subcounty" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Sub-county or Town" wire:model="s_subcounty">
                                    @error('s_subcounty') <span>{{$message}}</span> @enderror

                                </div>
                            </div>
                            
                            <div class="flex flex-row">
                                
                                <div class="mb-4">
                                    <label for="town" class="block mb-2 text-sm font-medium">Town</label>
                                    <input type="text" name="town" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Sub-county or Town" wire:model="s_town">
                                    @error('s_town') <span>{{$message}}</span> @enderror

                                </div>
                                <div class="mb-4 ml-2">
                                    <label for="specificarea" class="block mb-2 text-sm font-medium">Specific Area</label>
                                    <input type="text" name="area" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter specific area" wire:model="s_specificarea" >
                                    @error('s_specificarea') <span>{{$message}}</span> @enderror

                                </div>
                            </div>
                            <div class="flex flex-row">
                                <div class="mb-4">
                                    <label for="firstname" class="block mb-2 text-sm font-medium">First Name</label>
                                    <input type="text" name="firstname" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Full names" wire:model="s_firstname">
                                    @error('s_firstname') <span>{{$message}}</span> @enderror

                                </div>
                                <div class="mb-4 ml-2">
                                    <label for="lastname" class="block mb-2 text-sm font-medium">Other Name</label>
                                    <input type="text" name="lastname" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Full names" wire:model="s_lastname">
                                    @error('s_lastname') <span>{{$message}}</span> @enderror

                                </div>
                            </div>

                            <div class="flex flex-row">
                                <div class="mb-4 ">
                                    <label label="mobile" class="block mb-2 text-sm font-medium">Phone number</label>
                                    <input type="text" name="mobile" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="s_mobile">
                                    @error('s_mobile') <span>{{$message}}</span> @enderror

                                </div>
                                <div class="mb-4 ml-2">
                                    <label label="line1" class="block mb-2 text-sm font-medium">Other number</label>
                                    <input type="text" name="line1" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="s_line1">
                                    @error('s_line1') <span>{{$message}}</span> @enderror

                                </div>
                            </div> 

                            <div class="flex flex-row">
                                <div class="mb-4 ">
                                    <label label="email" class="block mb-2 text-sm font-medium">Email</label>
                                    <input type="text" name="email" value="" class="w-full px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter Phone number" wire:model="s_email">
                                    @error('s_email') <span>{{$message}}</span> @enderror

                                </div>
                            </div>
                            
                            
                        </div>
                    @endif   
                </div>

                

                <div>
                    <div>
                        <h3>Payment Option</h3>
                        <label for="">
                            <input type="radio" name="cod" value="cod" id="cod" wire:model="paymentmode">
                            <span>
                                Cash on delivery
                            </span>
                            <span>
                                (Order Now then pay on delivery)
                            </span>
                        </label>

                        <label for="">
                            <input type="radio" name="mpesa" value="mpesa" id="" wire:model="paymentmode">
                            <span>
                                Mpesa
                            </span>
                        </label>

                        <label for="">
                            <input type="radio" name="card" value="card" id="" wire:model="paymentmode">
                            <span>
                                Debit / Credit Card
                            </span>
                        </label>
                        @error('paymentmode') <span>{{$message}}</span> @enderror

                    </div>
                </div>
                <div class="mt-4 w-full md:w-1/2 lg:w-1/2 md:pl-4">
                    <h2 class="text-lg font-bold mb-4">Payment</h2>
                    <table class="w-full md:w-1/2 lg:w-1/2">
                    @if(Session::has('checkout'))
                        <tbody class="border">
                            <!-- <tr class="border">
                                <td class="py-2 px-4">Subtotal</td>
                                <td class="py-2 px-4">Ksh.{{-- Cart::subtotal() --}}</td>
                            </tr>
                            <tr class="border">
                                <td class="py-2 px-4">Delivery</td>
                                <td class="py-2 px-4">Ksh.{{-- Cart::tax() --}}</td>
                            </tr> -->
                            <!-- <tr class="border">
                                <td class="py-2 px-4">Delivery</td>
                                <td class="py-2 px-4">Ksh.500.00</td>
                            </tr> -->
                            <tr class="border">
                                <td class="py-2 px-4">Subtotal</td>
                                <td class="py-2 px-4">Ksh.{{Session::get('checkout')['subtotal']}}</td>
                            </tr>
                            <!-- <tr class="border">
                                <td class="py-2 px-4">Delivery</td>
                                <td class="py-2 px-4">Ksh.{{-- Session::get('checkout')['tax'] --}}</td>
                            </tr>  -->
                            <tr class="border">
                                <td class="py-2 px-4">Total</td>
                                <td class="py-2 px-4">Ksh.{{-- Session::get('checkout')['total'] --}}</td>
                            </tr>
                        </tbody>
                    @endif
                    </table>
                </div>
            </div>
            <button type="submit"  class="bg-blue-500 m-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Place order
                </button>
        </form>    
    </div>

</div>
