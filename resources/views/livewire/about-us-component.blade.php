<div class="m-4 space-y-8">
    <div class=" ">
        <h2 class="text-[#46555f] text-center text-4xl pb-4">Welcome to Artistic Excursions</h2>
        <img src="{{asset('images/aboutus')}}/{{$aboutus->general_image}}" class="mx-auto max-h-[600px]" alt="">
    </div>

    <div class="text-[#46555f]">
        <div>
            <h2 class="text-center text-4xl">About Us</h2>
        </div>   
        <div>
            <p class="text-center text-xl">
            {{$aboutus->general}}
            </p>
        </div>
    </div>

    <!-- vision -->

    <div class="flex flex-col md:flex-row text-[#46555f]">
        <div class="md:w-3/5">
            <img src="{{asset('images/aboutus')}}/{{$aboutus->vision_image}}" class="max-h-[600px]" alt="">
        </div>
        <div class="md:w-2/5 m-4">
            <div>
                <p class="text-center text-4xl">Our Vision</p>
            </div>
            <div>
                <p class="text-lg">{{$aboutus->our_vision}}</p>
            </div>
        </div>
    </div>

    <!-- Objective -->
    <div class="flex flex-col md:flex-row text-[#46555f]">
        
        <div class="m-4 md:w-2/5">
            <div class="">
                <p class="text-center text-4xl">Our Objective</p>
            </div>
            <div>
                <p class="text-xl">{{$aboutus->our_objective}}</p>
            </div>
        </div>
        <div class="md:w-3/5">
            <img src="{{asset('images/aboutus')}}/{{$aboutus->objective_image}}" class="max-h-[600px]" alt="">
        </div>
    </div>
    <!-- TEam/Art -->
    <div class="flex flex-col md:flex-row text-[#46555f]">
        <div class="md:w-3/5 flex justify-center">
            <img src="{{asset('images/aboutus')}}/{{$aboutus->art_image}}" class="max-h-[600px]" alt="">
        </div>
        <div class="m-4 md:w-2/5">
            <div>
                <p class="text-center text-4xl">Our Art</p>
            </div>
            <div>
                <p class="text-xl">{{$aboutus->our_art}}</p>
            </div>
        </div>
    </div>
</div>
