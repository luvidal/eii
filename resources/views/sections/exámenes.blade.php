<x-forms.fieldset label='Sangre'>
    <div id='acordion-examensangre' class='accordion border-0'>
        <x-forms.accordion id='examensangre-1' header='Hemograma' parent='acordion-examensangre'>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Fecha</div>
                <div class='w-50'><x-forms.input id='hemograma-fecha' type='date'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Hemoglobina</div>
                <div class='w-50'><x-forms.input id='hemograma-hemoglobina'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Hematocrito</div>
                <div class='w-50'><x-forms.input id='hemograma-hematocrito'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>VCM</div>
                <div class='w-50'><x-forms.input id='hemograma-vcm'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>CHCH</div>
                <div class='w-50'><x-forms.input id='hemograma-chch'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Leucocitos</div>
                <div class='w-50'><x-forms.input id='hemograma-leucocitos'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Linfocitos</div>
                <div class='w-50'><x-forms.input id='hemograma-linfocitos'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>RAN</div>
                <div class='w-50'><x-forms.input id='hemograma-ran'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Plaquetas</div>
                <div class='w-50'><x-forms.input id='hemograma-plaquetas'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>VHS</div>
                <div class='w-50'><x-forms.input id='hemograma-vhs'/></div>
            </div>
        </x-forms.accordion>
        <x-forms.accordion id='examensangre-2' header='Parámetros Inflamatorios' parent='acordion-examensangre'>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Fecha</div>
                <div class='w-50'><x-forms.input id='paramsinfl-fecha' type='date'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>PCR</div>
                <div class='w-50'><x-forms.input id='paramsinfl-pcr'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Calprotectina</div>
                <div class='w-50'><x-forms.input id='paramsinfl-calprotectina'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Albúmina</div>
                <div class='w-50'><x-forms.input id='paramsinfl-albúmina'/></div>
            </div>
        </x-forms.accordion>
        <x-forms.accordion id='examensangre-3' header='Perfil Hepático' parent='acordion-examensangre'>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Fecha</div>
                <div class='w-50'><x-forms.input id='perfhepatico-fecha' type='date'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Bili T</div>
                <div class='w-50'><x-forms.input id='paramsinfl-bilit'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Bili D</div>
                <div class='w-50'><x-forms.input id='paramsinfl-bilid'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>GOT</div>
                <div class='w-50'><x-forms.input id='paramsinfl-got'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>GPT</div>
                <div class='w-50'><x-forms.input id='paramsinfl-gpt'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>FA</div>
                <div class='w-50'><x-forms.input id='paramsinfl-fa'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>GGT</div>
                <div class='w-50'><x-forms.input id='paramsinfl-ggt'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>INR</div>
                <div class='w-50'><x-forms.input id='paramsinfl-inr'/></div>
            </div>
        </x-forms.accordion>
        <x-forms.accordion id='examensangre-4' header='Exámenes Generales' parent='acordion-examensangre'>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Fecha</div>
                <div class='w-50'><x-forms.input id='examgrales-fecha' type='date'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Glicemia</div>
                <div class='w-50'><x-forms.input id='examgrales-glicemia'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>TPMT</div>
                <div class='w-50'><x-forms.input id='examgrales-tpmt'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>IgG VHA</div>
                <div class='w-50'><x-forms.input id='examgrales-iggvha'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>HBsAg</div>
                <div class='w-50'><x-forms.input id='examgrales-hbsag'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Anticore</div>
                <div class='w-50'><x-forms.input id='examgrales-anticore'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>VHC</div>
                <div class='w-50'><x-forms.input id='examgrales-vhc'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>IgG Varicela</div>
                <div class='w-50'><x-forms.input id='examgrales-iggvaricela'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>IgG VEB</div>
                <div class='w-50'><x-forms.input id='examgrales-iggveb'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Quantiferon</div>
                <div class='w-50'><x-forms.input id='examgrales-quantiferon'/></div>
            </div>
        </x-forms.accordion>
        <x-forms.accordion id='examensangre-5' header='Niveles' parent='acordion-examensangre'>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Fecha</div>
                <div class='w-50'><x-forms.input id='niveles-fecha' type='date'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>IFX</div>
                <div class='w-50'><x-forms.input id='niveles-ifx'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Ac IFX</div>
                <div class='w-50'><x-forms.input id='niveles-acifx'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>ADA</div>
                <div class='w-50'><x-forms.input id='niveles-ada'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>Ac ADA</div>
                <div class='w-50'><x-forms.input id='niveles-acada'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>6TGN</div>
                <div class='w-50'><x-forms.input id='niveles-6tgn'/></div>
            </div>
            <div class='d-flex align-items-center m-2'>
                <div class='w-50'>6MMP</div>
                <div class='w-50'><x-forms.input id='niveles-6mmp'/></div>
            </div>
        </x-forms.accordion>
    </div>
</x-forms.fieldset>

<x-forms.fieldset label='Otros'>
    <x-forms.title text='Orina' icon='fa-glass-whiskey'/>
    <x-forms.text id='exámenes-orina' rows='4'></x-textarea>
    <x-forms.title text='Deposiciones' icon='fa-poop' class='mt-4'/>
    <x-forms.text id='exámenes-deposiciones' rows='4'></x-textarea>
</x-forms.fieldset>

<x-forms.fieldset label='Imágenes'>
    <table id='imágenes' class='editable'>
		<thead>
			<th width='140'>Fecha</th>
			<th width='200'>Informe</th>
		</thead>
		<tbody>
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
        </tbody>
	</table>
</x-forms.fieldset>

<x-forms.fieldset label='Endoscopías'>
    <table id='endoscopías' class='editable'>
		<thead>
			<th width='140'>Fecha</th>
			<th width='200'>Informe</th>
		</thead>
		<tbody>
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
        </tbody>
	</table>
</x-forms.fieldset>

<x-forms.fieldset label='Histología'>
    <table id='histología' class='editable'>
		<thead>
			<th width='140'>Fecha</th>
			<th width='200'>Informe</th>
		</thead>
		<tbody>
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
            <tr>
                <td>&nbsp;
                <td>&nbsp;
        </tbody>
	</table>
</x-forms.fieldset>
