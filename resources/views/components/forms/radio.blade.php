@php

    $id    = isset($id)    ? "id='$id'"       : '';
    $name  = isset($name)  ? "name='$name'"   : '';
    $value = isset($value) ? "value='$value'" : '';
    $style = isset($style) ? "style='$style'" : '';

    $props = "$id $name $value $style";
    $props = implode(' ', array_filter(explode(' ', $props)));

@endphp
<div class='text-nowrap text {{ $attributes->get("class") }}'>
    <input type='radio' {!! $props !!} class='form-check-input me-1'>
    {{ $label }}
</div>
