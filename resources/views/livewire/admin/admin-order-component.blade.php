<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="bg-gray-100 mx-4">
        <div>All Orders</div>
        @if(Session::has('order_message'))
            <div>{{Session::get('order_message')}}</div>
        @endif
        <div class="overflow-x-auto">
            <table class="w-full">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-blue-500 text-white">OrderID</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Subtotal</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Shipping</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Total</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">First Name</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Other Name</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Mobile</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Other mobile</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">email</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Status</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Order Date</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">Action</th>
                    <th class="py-2 px-4 bg-blue-500 text-white">status</th>


                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="bg-white">
                        <td class="py-2 px-4">{{$order->id}}</td>
                        <td class="py-2 px-4">ksh.{{$order->subtotal}}</td>
                        <td class="py-2 px-4">Ksh.{{$order->tax}}</td>
                        <td class="py-2 px-4">Ksh.{{$order->Total}}</td>
                        <td class="py-2 px-4">{{$order->firstname}}</td>
                        <td class="py-2 px-4">{{$order->lastname}}</td>
                        <td class="py-2 px-4">{{$order->mobile}}</td>
                        <td class="py-2 px-4">{{$order->line1}}</td>
                        <td class="py-2 px-4">{{$order->email}}</td>
                        <td class="py-2 px-4">{{$order->status}}</td>
                        <td class="py-2 px-4">{{$order->created_at}}</td>
                        <td class="py-2 px-4"><a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}">details</a></td>
                        <td class="py-2 px-4">
                            <ul>
                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a></li>
                                <li><a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a></li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        {{$orders->links()}}
    </div>
</div>
