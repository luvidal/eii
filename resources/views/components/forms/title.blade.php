@php

    $style = isset($style) ? "style='$style'" : '';
    $props = "$style";

@endphp
<div {!! $props !!}  class='text p-1 {{ $attributes->get("class") }}'>
    @if(isset($icon))<i class='fa {{ $icon }} me-1'></i>@endif
    @if(isset($text))<span class='text-uppercase'>{{ $text }}</span>@endif
</div>
