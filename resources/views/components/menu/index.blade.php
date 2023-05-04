<div class='menu-bar d-flex flex-column h-100'>

    <x-menu.logo/>

    <div class='menu' style='margin-top:8em;'>
        <ul class='m-0 p-0'>
        {{ $slot }}
        </ul>
    </div>

    <div class='bottom-content mt-auto' style='margin-bottom:60px;'>
        <x-menu.item id='logout' text='Cerrar Sesión' icon='bx-log-out'/>
        <x-menu.switch lightText='Modo Claro' darkText='Modo Oscuro'/>
    </div>
</div>
