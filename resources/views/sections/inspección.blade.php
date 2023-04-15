<x-forms.fieldset label='Signos Vitales'>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='IMC' icon='fa-calculator'/></div>
        <div class='w-50'><x-forms.input id='imc' type='decimal' readonly='true' sub='Kg/m2'/></div>
    </div>
    <br>
    <br>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='PA' icon='fa-tint'/></div>
        <div class='w-50'><x-forms.input id='presión_arterial' empty='120-130' maxlen='7' sub='mmHg'/></div>
    </div>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='FC' icon='fa-heartbeat'/></div>
        <div class='w-50'><x-forms.input id='frecuencia_cardiaca' type='number' empty='120' maxlen='4' sub='lat/min'/></div>
    </div>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='Tº' icon='fa-thermometer-half'/></div>
        <div class='w-50'><x-forms.input id='temperatura' type='decimal' empty='37.5' maxlen='4' sub='Cº'/></div>
    </div>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='Peso' icon='fa-weight-hanging'/></div>
        <div class='w-50'><x-forms.input id='peso' type='decimal' empty='65' maxlen='4' sub='Kg'/></div>
    </div>
    <div class='d-flex m-2'>
        <div class='w-50'><x-forms.title text='Alt' icon='fa-ruler-vertical'/></div>
        <div class='w-50'><x-forms.input id='altura' type='decimal' empty='1.65' maxlen='4' sub='m'/></div>
    </div>
</x-forms.fieldset>

<x-forms.fieldset label='Examen por Sistemas'>
    <x-forms.title text='Cabeza y Cuello' icon='fa-clipboard'/>
    <x-forms.text id='exfísico-cabeza_y_cuello'></x-textarea>
    <x-forms.title text='Tórax' icon='fa-clipboard' class='mt-4'/>
    <x-forms.text id='exfísico-tórax'></x-textarea>
    <x-forms.title text='Abdomen' icon='fa-clipboard' class='mt-4'/>
    <x-forms.text id='exfísico-abdomen'></x-textarea>
    <x-forms.title text='Extremidades Inferiores' icon='fa-clipboard' class='mt-4'/>
    <x-forms.text id='exfísico-extremidades_inferiores'></x-textarea>
    <x-forms.title text='Examen Anal' icon='fa-clipboard' class='mt-4'/>
    <x-forms.text id='exfísico-examen_anal'></x-textarea>
</x-forms.fieldset>
