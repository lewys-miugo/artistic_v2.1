<!-- resources/views/livewire/art-color-page.blade.php -->

<div>
    <h1>{{ $color->name }}</h1>
    <ul>
        @foreach ($color->subColors as $subColor)
            <li>{{ $subColor->name }}</li>
        @endforeach
    </ul>

    <h2>Products of {{ $color->name }}</h2>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul>
</div>

