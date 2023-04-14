@php

    $icon = isset($icon) ? "icon='$icon'" : '';
    $text = isset($text) ? "text='$text'" : '';

    $props = "$icon $text";
    $props = implode(' ', array_filter(explode(' ', $props)));

@endphp

<div class='row align-items-baseline {{ $attributes->get("class") }}'>
    <div class='col-2'><x-forms.title {!! $props !!}/></div>
    <div class='col-2'>{{ $slot }}</div>
</div>
