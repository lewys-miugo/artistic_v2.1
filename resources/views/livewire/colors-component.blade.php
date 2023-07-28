<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h1>colors</h1>
    <ul>
    @foreach ($colors as $color)
        <li>
            <a href="{{route('art.color',['slug'=>$color->slug])}}">
                {{$color->name}}
            </a>
        </li>
    @endforeach
    </ul>
</div>
