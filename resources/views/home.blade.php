<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <meta name='csrf-token' content='{{ csrf_token() }}'>
        <title>{{ config('app.name', 'EII') }}</title>
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
        <link rel='dns-prefetch' href='//fonts.gstatic.com'>
        <link href='https://fonts.bunny.net/css?family=Nunito' rel='stylesheet'>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <nav class='sidebar fixed-top z-2 h-100' style='padding:14px !important;'>
            <x-menu>
                <x-menu.item id='m_1' text='Controles'    icon='bx-first-aid'/>
                <x-menu.item id='m_2' text='Vacunas'      icon='fas bx-injection'/>
                <x-menu.item id='m_3' text='Tratamientos' icon='bx-vial'/>
                <x-menu.item id='m_4' text='Exámenes'     icon='bx-file'/>
                <x-menu.item id='m_5' text='Inspección'   icon='bx-search'/>
            </x-menu>
            <i id='btnShowHide' class='z-3 text-white bx bx-chevron-right bx-sm toggle'></i>
        </nav>
        <section class='home p-5'>
            <div id='s_0' class='section'>@include('sections.welcome')</div>
            <div id='s_1' class='section'>@include('sections.controles')</div>
            <div id='s_2' class='section'>@include('sections.vacunas')</div>
            <div id='s_3' class='section'>@include('sections.tratamientos')</div>
            <div id='s_4' class='section'>@include('sections.exámenes')</div>
            <div id='s_5' class='section'>@include('sections.inspección')</div>
        </section>
    </body>
</html>