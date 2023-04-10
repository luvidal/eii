<x-forms.fieldset label='5-ASA'>
	<x-forms.title text='Tipo 5-ASA' icon='fa-capsules'/>
	<x-forms.select id='tratamientos-5asa_farmaco' options='Sulfazalasina/Mesalazina'/>
	<div class='mt-4 ms-4'>
		<x-forms.title text='Dosis Oral' icon='fa-flask' class='mb-1' style='font-size:0.8em;'/>
		<x-forms.select id='tratamientos-5asa_farmaco' options='Dividida/Mono Dosis' sub='Tipo'/>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-5asa_oral_indicada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='Indicada'/>
			<x-forms.input id='tratamientos-5asa_oral_real'     type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Real'/>
		</div>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-5asa_oral_desde' type='date' class='w-100 ms-0' sub='Desde'/>
			<x-forms.input id='tratamientos-5asa_oral_hasta' type='date' class='w-100 ms-4' sub='Hasta'/>
		</div>
	</div>
	<div class='mt-4 ms-4'>
		<x-forms.title text='Dosis Tópica' icon='fa-flask' class='mb-1' style='font-size:0.8em;'/>
		<x-forms.select id='tratamientos-5asa_farmaco' options='Supositorio 500 mg/Supositorio 1.000 mg/Espuma 1.000 mg/Enema 4.000 mg' sub='Tipo'/>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-5asa_tópica_indicada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='Indicada'/>
			<x-forms.input id='tratamientos-5asa_tópica_real'     type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Real'/>
		</div>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-5asa_tópica_desde' type='date' class='w-100 ms-0' sub='Desde'/>
			<x-forms.input id='tratamientos-5asa_tópica_hasta' type='date' class='w-100 ms-4' sub='Hasta'/>
		</div>
	</div>
	<div class='mt-4'>
		<x-forms.title text='Rx Adversa' icon='fa-sad-tear'/>
		<x-forms.text id='tratamientos-5asareacción_adversa' rows='2'/>
	</div>
</x-forms.fieldset>

<x-forms.fieldset label='Inmuno Modulador'>
	<x-forms.title text='Fármaco IM' icon='fa-capsules'/>
	<x-forms.select id='tratamientos-im_farmaco' options='Metrotexato/Azatioprina/6 MP' class='mb-4'/>
	<x-forms.title text='Indicación' icon='fa-file-prescription'/>
	<x-forms.select id='tratamientos-im_indicacion' options='CorticoD/CorticoR' class='mb-4'/>
	<x-forms.title text='Vía' icon='fa-syringe'/>
	<x-forms.select id='tratamientos-im_via' options='Oral/Subcutánea/Intramuscular' class='mb-4'/>
	<div class='mb-4 ms-4'>
		<x-forms.title text='Dosis' icon='fa-flask' style='font-size:0.8em;'/>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-im_indicada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='Indicada'/>	
			<x-forms.input id='tratamientos-im_real'     type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Real'/>	
			<x-forms.input id='tratamientos-im_adecuada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Adecuada'/>	
		</div>
		<x-forms.title text='Metabolitos' icon='fa-flask' style='font-size:0.8em;'/>
		<div class='d-flex mt-2'>
			<x-forms.input id='tratamientos-im_6TGN' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='6-TGN'/>	
			<x-forms.input id='tratamientos-im_6MMP' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='6-MMP'/>	
		</div>
	</div>
	<x-forms.title text='Uso' icon='fa-calendar-alt'/>
	<div class='d-flex mt-2'>
		<x-forms.input id='tratamientos-im_desde' type='date' class='w-100 ms-0' sub='Desde'/>	
		<x-forms.input id='tratamientos-im_hasta' type='date' class='w-100 ms-4' sub='Hasta'/>	
	</div>
	<div class='mt-4'>
		<x-forms.title text='Rx Adversa' icon='fa-sad-tear'/>
		<x-forms.text id='tratamientos-im_reacciónadversa' rows='2'/>
	</div>
</x-forms.fieldset>

<x-forms.fieldset label='Corticoides'>
	<x-forms.title text='Tipo Corticoide' icon='fa-capsules'/>
	<x-forms.select id='tratamientos-corticoides_farmaco' options='Prednisona/Metilprednisolona/Hidrocortisona/Budesonida/Budesonida MMX/Otro' class='mb-4'/>
	<x-forms.title text='Vía' icon='fa-syringe'/>
	<x-forms.select id='tratamientos-corticoides_via' options='Oral/Endovenosa/Budesonida Espuma/HidroC Enema' class='mb-4'/>
	<x-forms.title text='Ciclos' icon='fa-undo'/>
	<x-forms.input id='tratamientos-corticoides_ciclos' type='number' min='0' max='100' empty='#' class='mb-4'/>
	<x-forms.title text='Dosis Oral' icon='fa-flask' style='font-size:0.8em;'/>
	<div class='d-flex mt-1'>
		<x-forms.input id='tratamientos-corticoides_oral_indicada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='Indicada'/>	
		<x-forms.input id='tratamientos-corticoides_oral_real'     type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Real'/>	
	</div>
	<x-forms.title text='Dosis Tópica' icon='fa-flask' style='font-size:0.8em;'/>
	<div class='d-flex mt-1 mb-4'>
		<x-forms.input id='tratamientos-corticoides_tópica_indicada' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-0' sub='Indicada'/>	
		<x-forms.input id='tratamientos-corticoides_tópica_real'     type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Real'/>	
	</div>
	<x-forms.title text='Uso' icon='fa-flask'/>
	<div class='d-flex mb-'>
		<x-forms.input id='tratamientos-corticoides_desd'  type='date' class='w-100 ms-0' sub='Desde'/>	
		<x-forms.input id='tratamientos-corticoides_hasta' type='date' class='w-100 ms-4' sub='Hasta'/>	
	</div>
	<x-forms.title text='Rx Adversa' icon='fa-sad-tear'/>
	<x-forms.text id='tratamientos-corticoides_reacciónadversa' rows='2'/>
</x-forms.fieldset>

<x-forms.fieldset label='Biológicos'>
	<x-forms.title text='Tipo Biológico' icon='fa-capsules'/>
	<x-forms.select id='tratamientos-biológicos_farmaco' options='Infliximab/Adalimumab/Golimumab/Certolizumab/Natalizumab/Vedolizumab/Ustekinumab' class='mb-4'/>
	<x-forms.title text='Indicación' icon='fa-file-prescription'/>
	<x-forms.select id='tratamientos-biológicos_indicación' options='CorticoD/CorticoR/Inmuno Refractario/Crisis Grave EII/Crohn Perianal/Crohn Inicial/Otra' class='mb-4'/>
	<x-forms.title text='Dosis' icon='fa-flask' style='font-size:0.8em;'/>
	<div class='d-flex'>
		<x-forms.input id='tratamientos-biológicos_ndosis'     type='number' min='000' max='5000' step='001' empty='#     ' class='w-100 ms-0' sub='Veces'/>	
		<x-forms.input id='tratamientos-biológicos_mantención' type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Inducción'/>	
		<x-forms.input id='tratamientos-biológicos_inducción'  type='number' min='500' max='5000' step='500' empty='mg/día' class='w-100 ms-4' sub='Mantención'/>	
	</div>
	<x-forms.title text='Dosis' icon='fa-calendar-alt' style='font-size:0.8em;'/>
	<div class='d-flex mb-4'>
		<x-forms.input id='tratamientos-biológicos_ultdosis' type='date' class='w-100 ms-0' sub='Última'/>	
		<x-forms.input id='tratamientos-biológicos_prxdosis' type='date' class='w-100 ms-4' sub='Próxima'/>	
	</div>
	<x-forms.title text='Niveles' icon='fa-chart-bar'/>
	<div class='d-flex mb-2'>
		<x-forms.input id='tratamientos-biológicos_nivelesdroga'      type='number' min='000' max='5000' step='001' empty='#' class='w-100 ms-0' sub='Droga'/>	
		<x-forms.input id='tratamientos-biológicos_nivelesanticuerpo' type='number' min='500' max='5000' step='500' empty='#' class='w-100 ms-4' sub='Anticuerpo'/>	
	</div>
	<x-forms.title text='Uso' icon='fa-calendar-alt'/>
	<div class='d-flex mb-2'>
		<x-forms.input id='tratamientos-biológicos_desde' type='date' class='w-100 ms-0' sub='Desde'/>	
		<x-forms.input id='tratamientos-biológicos_hasta' type='date' class='w-100 ms-4' sub='Hasta'/>	
	</div>
	<x-forms.title text='Rx Adversa' icon='fa-sad-tear'/>
	<x-forms.text id='tratamientos-biológicos_reacciónadversa' rows='2'/>
</x-forms.fieldset>

<x-forms.fieldset label='Complementos'>
	<x-forms.title text='Medicina Complementaria' icon='fa-hand-holding-medical'/>
	<div class='d-flex mb-2'>
		<div>
			<x-forms.check name='tratamientos-medicina_complacupuntura' label='Acupuntura'/>
			<x-forms.check name='tratamientos-medicina_complmarihuana'  label='Marihuana'/>
			<x-forms.check name='tratamientos-medicina_complhipnósis'   label='Hipnósis'/>
			<x-forms.check name='tratamientos-medicina_complhierbas'    label='Hierbas'/>
		</div><div class='ms-4'>
			<x-forms.check name='tratamientos-medicina_complterapia'    label='Terapia'/>
			<x-forms.check name='tratamientos-medicina_complyoga'       label='Yoga'/>
			<x-forms.check name='tratamientos-medicina_complotras'      label='Otras'/>
		</div>
	</div>
	<x-forms.title text='Indicación' icon='fa-file-prescription'/>
	<x-forms.select id='tratamientos-medicina_complindicación' options='Autoindicada/Tratante/Otra' class='mb-4'/>
	<x-forms.title text='Efectividad' icon='fa-crosshairs'/>
	<x-forms.range id='tratamientos-medicina_complefectividad' class='mb-4'/>
	<x-forms.title text='Uso' icon='fa-calendar-alt'/>
	<div class='d-flex mb-2'>
		<x-forms.input id='tratamientos-medicina_compldesde' type='date' class='w-100 ms-0' sub='Desde'/>	
		<x-forms.input id='tratamientos-medicina_complhasta' type='date' class='w-100 ms-4' sub='Hasta'/>	
	</div>
	<x-forms.title text='Observación' icon='fa-thumbtack'/>
	<x-forms.text id='tratamientos-medicina_complobservación' rows='2'/>
</x-forms.fieldset>