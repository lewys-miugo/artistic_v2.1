<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <body class="bg-gray-100">
        <div class="container mx-auto py-8">
            <h1 class="text-2xl font-bold mb-8 mx-4">Shopping Cart</h1>
            @if(Session::has('success_message'))
                <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="font-semibold">Success! | {{Session::get('success_message')}}</span>
                </div>
            @endif

            @if(Cart::instance('cart')->count()>0)
                <div class="overflow-x-auto mx-4">
                    <table class="min-w-full divide-y divide-gray-200">
                        <!-- w-full -->
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4">Image</th>
                            <th class="py-2 px-4">Name</th>
                            <!-- <th class="py-2 px-4">Price</th> -->
                            <th class="py-2 px-4">Quantity</th>
                            <th class="py-2 px-4">Subtotal</th>
                            <th class="py-2 px-4">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                        @foreach(Cart::instance('cart')->content() as $item)
                            <tr>
                                <td class="py-2 px-4">
                                    <img src="{{asset('images/products')}}/{{$item->model->image}}" alt="Product Image" class="w-16 mx-auto max-w-max">
                                    <!-- $item->model->id vid:8 minute:15:30-15:36 -->
                                </td>
                                <td class="py-2 px-4 text-center">
                                    <p class="text-blue-500 font-bold text-lg capitalize">{{$item->model->name}}</p>
                                    <p class="max-w-fit text-center">{{$item->model->short_description}}</p>
                                </td>
                                <!-- <td class="py-2 px-4 text-center">{{$item->model->regular_price}}</td> -->
                                <td class="py-2 px-4 text-center">
                                    <!-- <input type="number" value="1" class="text-center w-16 border bg-gray-100 focus:outline-none"> -->
                                    <div class="number-container flex items-center justify-center">
                                        <button class="decrement-btn bg-gray-300 hover:bg-gray-400 text-gray-600 hover:text-gray-700 px-3 py-2 rounded-l"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                            </svg>
                                        </button>
                                        <span class="number bg-gray-200 px-4 py-2 text-gray-800 font-semibold">{{$item->qty}}</span>
                                        <button class="increment-btn bg-gray-300 hover:bg-gray-400 text-gray-600 hover:text-gray-700 px-3 py-2 rounded-r" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                        </button>
                                    </div>



                                </td>
                                <td class="py-2 px-4 text-center">{{$item->subtotal}}</td>
                                <td class="py-2 px-4 text-center">
                                    <button class="text-red-600 hover:text-red-700 focus:outline-none" wire:click.prevent="destroy('{{$item->rowId}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                </div>

                
                <div class="flex justify-end mx-4">
                    <button class="text-red-600 hover:text-red-700 focus:outline-none" wire:click.prevent="clearAll()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg> Clear cart
                    </button>
                </div>

                <div class="flex justify-end mt-8">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-4 rounded focus:outline-none focus:shadow-outline ">
                        Continue Exploring
                    </button>
                
                </div>
                
            @else                        
                <p class="text-center">Sorry but there are no item in your Cart, Proceed with your art excursion below</p>
                <div class="flex mt-2 justify-center flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                    <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-4 rounded focus:outline-none focus:shadow-outline animate-pulse">
                        <a href="{{'/'}}">Continue Exploring</a>
                    </button>
                </div>
            @endif
            
        </div>

        <!-- More details -->
        <div class="container mx-2 py-8">
            <div class="flex flex-col md:flex-row lg:flex-row  mb-8">
                <!-- justify-between -->
                

                <div class="mt-4 w-full md:w-1/2 lg:w-1/2 md:pl-4">
                    <h2 class="text-lg font-bold mb-4">Cart Summary</h2>
                    <table class="w-full">
                        <tbody class="border">
                            <tr class="border">
                                <td class="py-2 px-4">Subtotal</td>
                                <td class="py-2 px-4">Ksh.{{Cart::subtotal()}}</td>
                            </tr>
                            <tr class="border">
                                <td class="py-2 px-4">Delivery</td>
                                <td class="py-2 px-4">Ksh.{{Cart::tax()}}</td>
                            </tr>
                            <!-- <tr class="border">
                                <td class="py-2 px-4">Delivery</td>
                                <td class="py-2 px-4">Ksh.500.00</td>
                            </tr> -->
                            <tr class="border">
                                <td class="py-2 px-4">Total</td>
                                <td class="py-2 px-4">Ksh.{{Cart::total()}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <!--This one raises the payment modal <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded focus:outline-none focus:shadow-outline" onclick="payment()">
                        Proceed to Checkout
                    </button> -->
                    
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-4 rounded focus:outline-none focus:shadow-outline" wire:click.prevent="checkout()">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>

        <!-- Checkout modal number and amount -->
        <div id="payment" class="fixed z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
            <div class="bg-white w-1/2 rounded-lg p-8">
                <div>
                    <label for="tel">Phone number:</label>
                    <input type="number" name="" id="" placeholder="valid safaricom number">
                </div>

                <div>
                    <label for="amount">Amount</label>
                    <input type="number" name="" placeholder="Enter total amount">
                </div>
                <div class="flex justify-center my-4">
                    <button onclick="proceedPayment()"  class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded mr-4">proceed</button>
                    <button onclick="cancelPayment()" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded">Cancel</button>
                </div>
            </div>
        </div>
        <!-- Payment modal js -->
        <script>
            function payment(id) {
                // Set the category ID
                document.getElementById('payment').classList.remove('hidden');
                // Simulate setting the category_id in a Laravel Livewire component
                console.log("payment", id);
                // @this.set('category_id', id);
            }

            function proceedPayment() {
            // Get the category ID
            // @this.call('deleteCategory');
            var categoryId = document.getElementById('payment').dataset.id;
            document.getElementById('payment').classList.add('hidden');
            }

            function cancelPayment() {
                document.getElementById('payment').classList.add('hidden');
                console.log("Canceling payment ");

            }
        </script>

        <!-- Increment and decrement JS -->
        <script>
            const decrementBtn = document.querySelector('.decrement-btn');
            const incrementBtn = document.querySelector('.increment-btn');
            const numberDisplay = document.querySelector('.number');

            let number = 1;

            decrementBtn.addEventListener('click', () => {
                if (number > 1) {
                number--;
                numberDisplay.textContent = number;
                }
            });

            incrementBtn.addEventListener('click', () => {
                number++;
                numberDisplay.textContent = number;
            });
        </script>
    </body>

</div>
