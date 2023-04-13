<table id='harvbrad' cellpadding='5' class='mt-4'>
    <tr>
        <td class='text'><b>Harvey-Bradshaw</b>
        <td><x-forms.input id='controles-indice_harvbrad' extra='readonly'/>
    <tr>
        <td class='text'>Estado General
        <td><x-forms.select id='controles-harvbrad_estado' options='Muy Bien/Bien/Mal/Muy Mal/Terrible'/>
    <tr>
        <td class='text'>Dolor Abdominal
        <td><x-forms.select id='controles-harvbrad_dolor' options='Ninguno/Leve/Moderado/Severo'/>
    <tr>
        <td class='text'>Masa Abdominal
        <td><x-forms.select id='controles-harvbrad_masa' options='No Tiene/Dudosa/Definida/Sensible'/>
    <tr>
        <td class='text'>Complicaciones
        <td>
        <div id='acc-harvbrad_complicaciones' class='accordion'>
            <x-forms.accordion id='manifestaciones-1' header='Select options' class='text-black py-1 px-2' parent='acc-harvbrad_complicaciones'>
                <x-forms.check name='controles-harvbrad_complartralgia' label='Artralgia'/>
                <x-forms.check name='controles-harvbrad_compluveítis' label='Uveítis'/>
                <x-forms.check name='controles-harvbrad_compleritema' label='Eritema Nodoso'/>
                <x-forms.check name='controles-harvbrad_complaftas' label='Aftas'/>
                <x-forms.check name='controles-harvbrad_complpioderma' label='Pioderma Gangrenoso'/>
                <x-forms.check name='controles-harvbrad_complfisura' label='Fisura Anal'/>
                <x-forms.check name='controles-harvbrad_complfístulas' label='Fístulas'/>
                <x-forms.check name='controles-harvbrad_complabcesos' label='Abcesos'/>
            </x-forms.accordion>
        </div>
</table>