@props(['id', 'text' => '???', 'icon' ])
@php($empty = 'placeholder=obs')

<x-forms.title text='{{ $text }}' icon='{{ $icon ?? "fa-syringe" }}'/>
<div class='d-flex align-items-baseline mb-4'>
    <x-forms.input id='{{ $id }}-date' type='date'/>
    <x-forms.input id='{{ $id }}-obs'  class='ms-4' extra='{{ $empty }}'/>
</div>