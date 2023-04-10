@extends('layouts.app')

@php

    function checkbox($a, $b, $c) { echo "<x-forms.check name='$a' label='$b' value=''/>\n"; }

    function titulo($a, $b) 
    {
        $a = str_replace('fas ', '', $a);
        return "<x-forms.title text='$b' icon='$a'/>\n"; 
    }

    function titulito($a, $b) 
    {
        $a = str_replace('fas ', '', $a);
        return "<x-forms.title text='$b' icon='$a'/>\n"; 
    }

    function select($a, $items)
    { 
        $arr = [];
        foreach($items as $key => $value) $arr[] = (object)[ $key => $value ];
        $json = json_encode($arr);

        return "$json\n<x-forms.select id='$a' :options=''/>"; 
    }

    function textarea($a, $b, $c = '')
    {
        return "<x-forms.text id='$a' rows='$b' extra='$c'/>\n";
    }

    function input($a, $b, $c = '', $d = '')
    {
        return "<x-forms.input id='$a' type='$b' extra='$c' class='$d'/>\n";
    }

    function row_laboratorio($id, $nombre, $icon = 'fas fa-syringe') { return "<x-rows.lab id='$id' text='$nombre' icon='$icon'/>\n"; }

	function rango($id, $min, $max) { return "<x-forms.range id='$id' min='$min' max='$max'></x-textarea>"; }

    function row_vacuna($id, $nombre, $icon = 'fas fa-syringe') { return "<x-rows.vac id='$id' text='$nombre' icon='$icon'/>\n"; }   

    function inputrow($text, $icon, $control, $sub = '')
	{
		return "<x-rows.row :text='$text' :icon='$icon' :sub='$sub'>".$control."</x-rows.row>\n";
	}

    function sub($textos, $extra = '')
	{
		$s = "<div class='sub-r'>";
			foreach($textos as $texto)
				$s .= "<div $extra>$texto</div>";
		$s .= "</div>";
		return "$s\n";
	}

@endphp

@section('main')
    <div class='d-flex flex-grow-1 border rounded shadow m-3 p-4 overflow-hidden'>
        <div class='d-flex flex-grow-1 overflow-auto px-4'>
            <div class='d-flex flex-grow-1 flex-column'>

<!-- START MAIN CONTENT -->

                @include('sections.tratamientos')

<!-- END MAIN CONTENT -->

            </div>
        </div>
    </div>
@endsection

