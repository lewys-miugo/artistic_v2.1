<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="mx-4">
        <p class="text-left text-xs text-[#6a767e]"><a href="/" class="uppercase">Home</a> > Customers-Users</p>
    </div>

    <h1 class="text-center">All Users</h1>

    <div class="mx-8">
        @if(Session::has('message'))
            <div class="flex items-center justify-center bg-green-200 text-green-700 p-4 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <span class="font-semibold">Success! | {{Session::get('message')}}</span>
            </div>
        @endif
        <table class="w-full px-8 border rounded-lg ">
            <thead>
                <tr class="bg-blue-200">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">USR/ADM</th>
                <th class="py-2 px-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i=($users->currentPage()-1)*$users->perPage();
                @endphp
                @foreach($users as $user)
                    <tr class="even:bg-gray-100 odd:bg-white">
                        <td class="py-2 px-4 whitespace-nowrap text-center">{{++$i}}</td>
                        <td class="py-2 px-4  text-center">{{$user->name}}</td>
                        <td class="py-2 px-4  text-center">{{$user->email}}</td>
                        <td class="py-2 px-4  text-center">{{$user->utype}}</td>
                        <td class="py-2 px-4 whitespace-nowrap text-center">
                            <a href="{{-- route('admin.category.edit',['category_id'=>$category->id]) --}}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded">Edit</a>
                        </td>
                    </tr>

                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
            {{$users->links()}}

    </div>

</div>

</div>
