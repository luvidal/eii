
@php

    $id    = isset($id)    ? "id='$id'"       : '';
    $name  = isset($name)  ? "name='$name'"   : '';
    $value = isset($value) ? "value='$value'" : '';

    $minprop = isset($min) ? "min='$min'" : '';
    $maxprop = isset($max) ? "max='$max'" : '';

    $mintext  = $min ?? '0%';
    $maxtext  = $max ?? '100%';

    $props = "$id $name $value $minprop $maxprop";
    $props = implode(' ', array_filter(explode(' ', $props)));

@endphp
<div class='input-range border rounded p-4 {{ $attributes->get("class") }}'>
    <input type='range' {!! $props !!} class='form-control-range w-100'>
    <div class='d-flex d-flex justify-content-between px-2 text-muted w-100'>
        <small>{{ $mintext }}</small>
        <small>{{ $maxtext }}</small>
    </div>
</div>
