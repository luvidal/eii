<x-forms.fieldset label='Consulta'>
    <x-forms.title text='Motivo Consulta' icon='fa-user-injured'/>
    <x-forms.text id='controles-motivo'></x-textarea>
    <x-forms.title text='Historia Clínica' icon='fa fa-book-medical' class='mt-4'/>
    <x-forms.text id='controles-historia' rows='3'></x-textarea>
    <x-forms.title text='Evolución Síntomas' icon='fa fa-file-signature' class='mt-4'/>
    <x-forms.text id='controles-síntomas' rows='2'></x-textarea>
    <x-forms.title text='Sensación de Dolor' icon='fa fa-sad-tear' class='mt-4'/>
    <x-forms.range id='controles-dolor' min='1' max='10'></x-textarea>
</x-forms.fieldset>

<x-forms.fieldset label='Manifestaciones ExtraIntestinales'>
    <div id='acc-manifestaciones' class='accordion border-0'>
        <x-forms.accordion id='manifestaciones-1' header='Músculo - Esqueléticas' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Artritis Pauciarticular'/>
            <x-forms.check name='controles-mei' label='Espondilitis Anquilosante'/>
            <x-forms.check name='controles-mei' label='Polimiositos'/>
            <x-forms.check name='controles-mei' label='Sacroileítis'/>
        </x-forms.accordion>
        <x-forms.accordion id='manifestaciones-2' header='Piel y Mucosas' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Aftas'/>
            <x-forms.check name='controles-mei' label='Eritema Nodoso'/>
            <x-forms.check name='controles-mei' label='Edema Labial'/>
            <x-forms.check name='controles-mei' label='Fisuras'/>
            <x-forms.check name='controles-mei' label='Fístulas'/>
            <x-forms.check name='controles-mei' label='Glositis'/>
            <x-forms.check name='controles-mei' label='Liquen Plano'/>
            <x-forms.check name='controles-mei' label='Pioderma Gangrenoso'/>
            <x-forms.check name='controles-mei' label='Pioestomatitis Vegetante'/>
            <x-forms.check name='controles-mei' label='Síndrome de Sweet'/>
            <x-forms.check name='controles-mei' label='Úlceras Orales'/>
        </x-forms.accordion>
        <x-forms.accordion id='manifestaciones-3' header='Hepato Bilio Pancreático' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Colecistolitiasis'/>
            <x-forms.check name='controles-mei' label='Esteatosis Hepática'/>
            <x-forms.check name='controles-mei' label='Hepatitis Autoinmune HAI'/>
            <x-forms.check name='controles-mei' label='Pancreatitis AutoInmune PAI'/>
            <x-forms.check name='controles-mei' label='Trombosis Portal'/>
        </x-forms.accordion>
        <x-forms.accordion id='manifestaciones-4' header='Oculares' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Cataratas'/>
            <x-forms.check name='controles-mei' label='Conjuntivitis'/>
            <x-forms.check name='controles-mei' label='Epiescleritis'/>
            <x-forms.check name='controles-mei' label='Escleritis'/>
            <x-forms.check name='controles-mei' label='Glaucoma'/>
            <x-forms.check name='controles-mei' label='Neuritis Óptica'/>
            <x-forms.check name='controles-mei' label='Queratitis Periférica'/>
            <x-forms.check name='controles-mei' label='Uveítis Anterior'/>
            <x-forms.check name='controles-mei' label='Uveítis Intermedia'/>
            <x-forms.check name='controles-mei' label='Vasculitis Retinal'/>
        </x-forms.accordion>
        <x-forms.accordion id='manifestaciones-5' header='Renales - Genitourinarias' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Falla Renal'/>
            <x-forms.check name='controles-mei' label='Glomerulonefritis Aguda'/>
            <x-forms.check name='controles-mei' label='Litiasis Renal'/>
            <x-forms.check name='controles-mei' label='Nefritis Intersticial'/>
        </x-forms.accordion>
        <x-forms.accordion id='manifestaciones-6' header='Cardiopulmonar' parent='acc-manifestaciones'>
            <x-forms.check name='controles-mei' label='Bronquiectasias'/>
            <x-forms.check name='controles-mei' label='BOOP'/>
            <x-forms.check name='controles-mei' label='Inespecíficas'/>
            <x-forms.check name='controles-mei' label='Mio o Pericarditis'/> 
        </x-forms.accordion>
    </div>
</x-forms.fieldset>

<x-forms.fieldset label='Diagnóstico'>
    <x-forms.title text='Hipótesis' icon='fa-crosshairs'/>
    <x-forms.select id='controles-diagnóstico' options='Colitis Ulcerosa/Enfermedad de Crohn/EII No Clasificada/EII Indeterminada/Otra'/>
    <x-forms.text id='controles-diagnóstico_extra' rows='4' class='mt-2'/>
    <div class='d-flex flex-row align-items-start justify-content-evenly flex-wrap'>
        @include('sections.controles-harvbrad')
        @include('sections.controles-mayo')
    </div>
</x-forms.fieldset>

<x-forms.fieldset label='Plan'>
    <x-forms.title text='Plan de Estudio' icon='fa-compass'/>
    <x-forms.text id='controles-plan_estudio' rows='4'></x-textarea>
    <x-forms.title text='Exámenes Solicitados' icon='fa-clipboard-list' class='mt-4'/>
    <x-forms.text id='controles-exámenes_solicitados' rows='4'></x-textarea>
</x-forms.fieldset>
