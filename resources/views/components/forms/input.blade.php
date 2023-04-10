@php

    $id    = isset($id)    ? "id='$id'"       : '';
    $name  = isset($name)  ? "name='$name'"   : '';
    $type  = isset($type)  ? "type='$type'"   : '';
    $value = isset($value) ? "value='$value'" : '';
    $style = isset($style) ? "style='$style'" : '';
    $empty = isset($empty) ? "placeholder='$empty'" : '';

    $min  = isset($min)  ? "min='$min'"   : '';
    $max  = isset($max)  ? "max='$max'"   : '';
    $step = isset($step) ? "step='$step'" : '';

    $props = "$id $name $type $value $empty $min $max $step $style";
    $props = implode(' ', array_filter(explode(' ', $props)));

@endphp
<div class='{{ $attributes->get("class") }}'>
    <input {!! $props !!} class='form-control bg-transparent'/>
    @isset($sub)<x-forms.sub label='{{ $sub }}'/>@endisset
</div>