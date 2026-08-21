@props([
    'width' => 268,
    'height' => 40,
    'alt' => 'logo',

])

<div  {{ $attributes->class([
    'logo'
]) }}>
    @if( active_link('home') )

        <img alt="{{ $alt }}" width="{{$width}}" height="{{$height}}" src="{{ asset('images/logo-footer.svg') }}">
    @else
        <a href="/" style="text-decoration: none">
            <img alt="{{ $alt }}" width="{{$width}}" height="{{$height}}" src="{{ asset('images/logo-footer.svg') }}">
        </a>
    @endif

</div>
