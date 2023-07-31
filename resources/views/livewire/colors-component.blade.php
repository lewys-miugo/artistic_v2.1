<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="">
        <div class="bg-white" >
            <div class="flex justify-center">
                <p class="my-8 text-xs text-[#6a767e] uppercase">
                    <a href="/" class="uppercase">Home</a> <span class="font-bold">> By Color</span>
                </p>
            </div>

            <!-- <p class="text-[#6a767e]">text-[#46555F]</p> -->
            <div class="flex flex-row justify-center text-[#46555f]">
                <p class=" font-extrabold text-5xl font-serif">
                    By Color
                </p>
                <p class="text-3xl font-light ml-8 text-center flex justify-center mt-2">
                    Wall Art
                </p>
            </div>

            <div class="flex justify-center text-[#46555f] my-4 pb-4">
                <p>Does your space call for a pop of color? Maybe soft and balanced shades? Play with the colors in your interior to set the right tone!</p>
            </div>
        </div>

        <div class="bg-[EFF0F2]">
            <div class="flex flex-row justify-center space-x-8 my-8">
                <div class="border-2">
                    <a href="#allColors" class="text-[#46555f] p-8">All Colors</a>
                </div>
                
                <div class="border-2 text-[#596c8a] hover:bg-[#46555f] hover:text-[#ffffff]">
                    <a href="#combinationColors" class=" p-4 text-[#46555f]">Color Combinations</a>
                </div>
            </div>

            <div>
                <p class="uppercase text-center " id="allColors">All Colors</p>
                <hr class="mx-12 my-4">
                <div>
                    <div class="p-8 flex flex-row flex-wrap space-x-8 space-y-8">
                        @foreach ($singleColors as $color)
                            <div class="{{count($color->subColors) > 0 ? 'has-child-subcolor':''}} flex flex-row mt-8 ">
                                <a href="{{route('art.color',['slug'=>$color->slug])}}">
                                    <div>
                                        <img src="{{asset('images/colors')}}/{{$color->image}}" alt="" class="h-52 max-w-52 ">
                                        <p class="text-center">{{$color->name}}</p>
                                    </div>
                                </a>

                                <!-- ,'scolor_slug'=>$scolor->slug -->

                                @if (count($color->subColors)>0)
                                    <div class="m-2">
                                        @foreach ($color->subColors as $scolor)
                                            <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}" class="flex flex-row">
                                                <img src="{{asset('images/colors')}}/{{$scolor->image}}" class="h-4 w-8" alt="">
                                                <div class="pl-2 text-center pb-2">
                                                    {{$scolor->name}}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div>
                    <div class="p-8 flex flex-row flex-wrap space-x-8 space-y-8">
                        @foreach ($colors as $color)
                            <div class="{{count($color->subColors) > 0 ? 'has-child-subcolor':''}} flex flex-row mt-8 ">
                                <a href="{{route('art.color',['slug'=>$color->slug])}}">
                                    <div>
                                        <img src="{{asset('images/colors')}}/{{$color->image}}" alt="" class="h-52 max-w-52 ">
                                        <p class="text-center">{{$color->name}}</p>
                                    </div>
                                </a>

                                @if (count($color->subColors)>0)
                                    <div class="m-2">
                                        @foreach ($color->subColors as $scolor)
                                            <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}" class="flex flex-row">
                                                <img src="{{asset('images/colors')}}/{{$scolor->image}}" class="h-4 w-8" alt="">
                                                <div class="pl-2 text-center pb-2">
                                                    {{$scolor->name}}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div> -->
            </div>

            <div id="combinationColors">
                <p class="uppercase text-center" >combination Colors</p>
                <hr class="px-12 my-4">
                <div>
                    <div class="p-8 flex flex-row flex-wrap space-x-8 space-y-8">
                        @foreach ($combinationColors as $color)
                            <div class="{{count($color->subColors) > 0 ? 'has-child-subcolor':''}} flex flex-row mt-8 ">
                                <a href="{{route('art.color',['slug'=>$color->slug])}}">
                                    <div>
                                        <img src="{{asset('images/colors')}}/{{$color->image}}" alt="" class="h-52 max-w-52 ">
                                        <p class="text-center">{{$color->name}}</p>
                                    </div>
                                </a>

                                <!-- ,'scolor_slug'=>$scolor->slug -->

                                @if (count($color->subColors)>0)
                                    <div class="m-2">
                                        @foreach ($color->subColors as $scolor)
                                            <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}" class="flex flex-row">
                                                <img src="{{asset('images/colors')}}/{{$scolor->image}}" class="h-4 w-8" alt="">
                                                <div class="pl-2 text-center pb-2">
                                                    {{$scolor->name}}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div>
                    <div class="p-8 flex flex-row flex-wrap space-x-8 space-y-8">
                        @foreach ($colors as $color)
                            <div class="{{count($color->subColors) > 0 ? 'has-child-subcolor':''}} flex flex-row mt-8 ">
                                <a href="{{route('art.color',['slug'=>$color->slug])}}">
                                    <div>
                                        <img src="{{asset('images/colors')}}/{{$color->image}}" alt="" class="h-52 max-w-52 ">
                                        <p class="text-center">{{$color->name}}</p>
                                    </div>
                                </a>

                                @if (count($color->subColors)>0)
                                    <div class="m-2">
                                        @foreach ($color->subColors as $scolor)
                                            <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}" class="flex flex-row">
                                                <img src="{{asset('images/colors')}}/{{$scolor->image}}" class="h-4 w-8" alt="">
                                                <div class="pl-2 text-center pb-2">
                                                    {{$scolor->name}}
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div> -->
            </div>
        </div>
        <div class="flex flex-row mx-8 text-[#6a767e]">
            <div class="w-1/3 text-right px-8 text-4xl">
                By Color
            </div>

            <div class="w-2/3 text-lg">
            Play with the colors in your interior design to set the tone and evoke different emotions. Does your space call for a bold, red statement? Maybe soft and balanced whites? Or cooler tones of blue for a relaxing vibe? Browse through our colorful selection of canvas wall art to find the right piece to complement your space. 
            </div>
        </div>
    
    </div>

    <!-- <h1>colors</h1>
    <ul>
    @foreach ($colors as $color)
        <li class="{{count($color->subColors) > 0 ? 'has-child-subcolor':''}}">
            <a href="{{route('art.color',['slug'=>$color->slug])}}">
                <div>
                    <img src="{{asset('images/colors')}}/{{$color->image}}" alt="" class="h-32 w-auto">
                    <p>{{$color->name}}</p>
                </div>
            </a>

            ,'scolor_slug'=>$scolor->slug

            @if (count($color->subColors)>0)
                <ul>
                    @foreach ($color->subColors as $scolor)
                        <a href="{{route('art.color',['slug'=>$color->slug,'scolor_slug'=>$scolor->slug])}}">
                        <li class="bg-red-500">
                            {{$scolor->name}}
                        </li>
                        </a>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
    </ul> -->
</div>
