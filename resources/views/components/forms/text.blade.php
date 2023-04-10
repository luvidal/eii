@php

    $id    = isset($id)    ? "id='$id'"       : '';
    $name  = isset($name)  ? "name='$name'"   : '';
    $style = isset($style) ? "style='$style'" : '';
    $rows  = isset($rows)  ? "rows='$rows'"   : '';
    $empty = isset($empty) ? "placeholder='$empty'" : '';

    $props = "$id $name $rows $empty $style";

@endphp
<div class='{{ $attributes->get("class") }}'>
    <textarea {!! $props !!} class='form-control bg-transparent'>
    {{ $value ?? '' }}
    </textarea>
    @if(isset($sub))<x-forms.sub label='{{ $sub }}'/>@endif
</div>