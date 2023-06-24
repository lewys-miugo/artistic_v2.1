<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="">
        <div>Ordered Items</div>
        <div><a href="{{route('admin.order')}}">All Orders</a></div>
        <div class="overflow-x-auto mx-4">
            <table class="min-w-full divide-y divide-gray-200">
                    <!-- w-full -->
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4">Image</th>
                        <th class="py-2 px-4">Name</th>
                        <th class="py-2 px-4">Price</th>
                        <th class="py-2 px-4">Quantity</th>
                        <th class="py-2 px-4">Subtotal</th>
                        <th class="py-2 px-4">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                    @foreach($order->orderItems as $item)
                        <tr>
                            <td class="py-2 px-4">
                                <img src="{{asset('images/products')}}/{{$item->product->image}}" alt="Product Image" class="w-16 mx-auto max-w-max">
                                <!-- $item->model->id vid:8 minute:15:30-15:36 -->
                            </td>
                            <td class="py-2 px-4 text-center">
                                <p class="text-blue-500 font-bold text-lg capitalize">{{$item->product->name}}</p>
                                <p class="max-w-fit text-center">{{$item->product->short_description}}</p>
                            </td>
                            <td class="py-2 px-4 text-center">{{$item->product->regular_price}}</td>
                            <td class="py-2 px-4 text-center">
                                <!-- <input type="number" value="1" class="text-center w-16 border bg-gray-100 focus:outline-none"> -->
                                <div class="number-container flex items-center justify-center">
                                    <!-- <button class="decrement-btn bg-gray-300 hover:bg-gray-400 text-gray-600 hover:text-gray-700 px-3 py-2 rounded-l"  wire:click.prevent="decreaseQuantity('{{$item->rowId}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                        </svg>
                                    </button> -->
                                    <span class="number bg-gray-200 px-4 py-2 text-gray-800 font-semibold">{{$item->quantity}}</span>
                                    <!-- <button class="increment-btn bg-gray-300 hover:bg-gray-400 text-gray-600 hover:text-gray-700 px-3 py-2 rounded-r" wire:click.prevent="increaseQuantity('{{$item->rowId}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                    </button> -->
                                </div>



                            </td>
                            <td class="py-2 px-4 text-center">{{$item->quantity * $item->product->regular_price}}</td>
                            <!-- <td class="py-2 px-4 text-center">
                                <button class="text-red-600 hover:text-red-700 focus:outline-none" wire:click.prevent="destroy('{{$item->rowId}}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </td> -->
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>

        </div>

        <div>
            Order Summary 
            <div>
                <p>Total<span>{{$order->total}}</span></p>
            </div>
        </div>
    </div>

    <div class="">
        Billing details
        <div>
            <table>
                <tr>
                    <th>Firstname</th>
                    <td>{{$order->firstname}}</td>
                    <th>Other name</th>
                    <td>{{$order->lastname}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$order->mobile}}</td>
                    <th>Other number</th>
                    <td>{{$order->line1}}</td>
                    <th>Email</th>
                    <td>{{$order->email}}</td>
                </tr>
                <tr>
                    <th>County</th>
                    <td>{{$order->county}}</td>
                    <th>Sub-county</th>
                    <td>{{$order->subcounty}}</td>
                    <th>Town</th>
                    <td>{{$order->town}}</td>
                    <th>Specific Area</th>
                    <td>{{$order->specificarea}}</td>
                </tr>
            </table>
        </div>
    </div>

    @if($order->is_shipping_different)
        <div class="">
            Shipping details
            <div>
                <table>
                    <tr>
                        <th>Firstname</th>
                        <td>{{$order->shipping->firstname}}</td>
                        <th>Other name</th>
                        <td>{{$order->shipping->lastname}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$order->shipping->mobile}}</td>
                        <th>Other number</th>
                        <td>{{$order->shipping->line1}}</td>
                        <th>Email</th>
                        <td>{{$order->shipping->email}}</td>
                    </tr>
                    <tr>
                        <th>County</th>
                        <td>{{$order->shipping->county}}</td>
                        <th>Sub-county</th>
                        <td>{{$order->shipping->subcounty}}</td>
                        <th>Town</th>
                        <td>{{$order->shipping->town}}</td>
                        <th>Specific Area</th>
                        <td>{{$order->shipping->specificarea}}</td>
                    </tr>
                </table>
            </div>
        </div>
    @endif

    <div class="">
        Transaction
        <div>
            <table>
                <tr>
                    <th>Transaction mode</th>
                    <td>{{$order->transaction->mode}}</td>
                </tr>
                <tr>
                    <th>Transaction status</th>
                    <td>{{$order->transaction->status}}</td>
                </tr>
                <tr>
                    <th>Transaction Date</th>
                    <td>{{$order->transaction->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>



</div>
