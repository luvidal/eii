@php

    $id    = isset($id)    ? "id='$id'"       : '';
    $name  = isset($name)  ? "name='$name'"   : '';
    $value = isset($value) ? "value='$value'" : '';
    $style = isset($style) ? "style='$style'" : '';

    $props = "$id $name $value $style";
    $props = implode(' ', array_filter(explode(' ', $props)));

    $options = explode('/', $options ?? '');

@endphp

<div class='{{ $attributes->get("class") }}'>
    <select {!! $props !!} class='form-select bg-transparent'>
        <option value='' disabled selected>-</option>
        @foreach($options as $key => $value)
        <option value='{{ (string)$key }}'>{{ (string)$value }}</option>
        @endforeach
    </select>
    @if(isset($sub))<x-forms.sub label='{{ $sub }}'/>@endif
</div>