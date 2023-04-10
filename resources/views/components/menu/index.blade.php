<div class='menu-bar d-flex flex-column h-100'>

    <div class='d-flex p-2'>
        <div class='icon border rounded-circle' style='min-width:40px; height:40px;'>
            <i class='fa fa-staff-snake fa-2xl'></i>
        </div>
        <div class='text ms-2' style='font-size:40px; line-height:42px; '>EII</div>
    </div>

    <div class='menu' style='margin-top:8em;'>
        <ul class='m-0 p-0'>
        {{ $slot }}
        </ul>
    </div>

    <div class='bottom-content mt-auto' style='margin-bottom:60px;'>
        <x-menu.item text='Cerrar Sesión' icon='bx-log-out'/>
        <x-menu.switch lightText='Modo Claro' darkText='Modo Oscuro'/>
    </div>
</div>
