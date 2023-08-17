<div class="m-4 space-y-8">
    <style>
        /* .clamp-3-lines {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        } */
    </style>
    <div class=" ">
        <h2 class="text-[#46555f] text-center text-4xl pb-4">Welcome to Artistic Excursions</h2>
        <img src="{{asset('images/aboutus')}}/{{$aboutus->general_image}}" class="mx-auto max-h-[600px]" alt="">
    </div>

    <div class="text-[#46555f]">
        <div>
            <h2 class="text-center text-4xl">About Us</h2>
        </div>   
        @php
            $lines = explode("\n", $aboutus->general);
            $firstThreeLines = array_slice($lines, 0, 3);
        @endphp

        <div>
            {{-- implode("\n", $firstThreeLines) --}}
        </div>

        <div>
            <p class="text-center text-xl">
            {{$aboutus->general}}
            <!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto id excepturi vel fuga eaque maxime distinctio, corporis minima, ipsa accusamus sunt. Nisi ut earum perspiciatis facere eos inventore odit excepturi tenetur commodi impedit delectus modi illum explicabo, iure natus aliquid voluptate nulla quibusdam nostrum quaerat ab quam? Molestiae, consequuntur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta iusto quaerat eos eius similique. Aut eveniet vel, excepturi odit perspiciatis architecto eum tempore illum eligendi expedita, accusantium, commodi ex saepe! -->
            <!-- <p class="clamp-3-lines">
                Nulla dolor velit adipisicing duis excepteur esse in duis nostrud occaecat mollit incididunt deserunt sunt. Ut ut sunt laborum ex occaecat eu tempor labore enim adipisicing minim ad. Est in quis eu dolore occaecat excepteur fugiat dolore nisi aliqua fugiat enim ut cillum. Labore enim duis nostrud eu. Est ut eiusmod consequat irure quis deserunt ex. Enim laboris dolor magna pariatur. Dolor et ad sint voluptate sunt elit mollit officia ad enim sit consectetur enim.
            </p>

            <p class="line-clamp-3">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac erat lacinia, fermentum neque eu, dictum metus. Fusce in lorem at est vehicula ultrices et at nisi. Aenean efficitur, lorem vehicula dapibus auctor, velit turpis interdum tellus, at cursus quam odio in mauris.
            </p> -->

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
    <!-- <div class="flex flex-col md:flex-row text-[#46555f]">
        
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
    </div> -->
    <!-- TEam/Art -->
    <div class="flex flex-col md:flex-row text-[#46555f]">
        
        <div class="m-4 md:w-2/5">
            <div>
                <p class="text-center text-4xl">Our Art</p>
            </div>
            <div>
                <p class="text-xl">{{$aboutus->our_art}}</p>
            </div>
        </div>

        <div class="md:w-3/5 flex justify-center">
            <img src="{{asset('images/aboutus')}}/{{$aboutus->art_image}}" class="max-h-[600px]" alt="">
        </div>
    </div>
</div>
