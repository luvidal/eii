@props(['id', 'text' => '???', 'icon' ])
@php($style = "style='width:150px;'")

<x-forms.title text='{{ $text }}' icon='{{ $icon ?? "fa-syringe" }}'/>
<div class='d-flex align-items-baseline mb-4 w-50'>
    <x-forms.radio name='{{ $id }}-if' value='Y' label='SI' class='me-3'/>
    <x-forms.radio name='{{ $id }}-if' value='N' label='NO' class='me-4'/>
    <x-forms.input id='{{ $id }}-date' type='date'/>
</div>