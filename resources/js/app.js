import './bootstrap';
import '../css/app.css';
import '../css/theme.css'; 

const body = document.querySelector('body');

document.getElementById('btnShowHide').addEventListener('click', () => body.querySelector('nav').classList.toggle('close') )
document.getElementById('btnSwitch').addEventListener('click', () => SwitchColors() ); 
document.querySelector("a[href='#']").addEventListener('click', e => e.preventDefault() );

function SwitchColors()
{
    body.classList.toggle('dark');
    const switchText = document.getElementById('switchText');
    switchText.innerHTML = body.classList.contains('dark') ? lightText : darkText;
}

SwitchColors();

/* ------------------------ SECTIONS & BUTTONS----------------------------- */

const sections = document.getElementsByClassName('section')
const buttons  = document.getElementsByClassName('menubutton')

const section  = localStorage.getItem('section') || 'section_0';
const button   = localStorage.getItem('button');

for(let i = 0; i < sections.length; i++) // show section
    sections[i].style.display = (sections[i].id == section) ? 'flex' : 'none';

for(let j = 0; j < buttons.length; j++) // highlight menu button
    buttons[j].style.backgroundColor = (buttons[j].id == button) ? 'var(--primary-color)' : 'transparent';

/* ------------------------ BUTTONS ------------------------------ */

for(let i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', event => 
    {
        const section = 'section_' + buttons[i].id.split('_')[1];
        localStorage.setItem('section', section);
        localStorage.setItem('button', buttons[i].id);

        for(let i = 0; i < sections.length; i++) // show section
            sections[i].style.display = (sections[i].id == section) ? 'flex' : 'none';

        for(let j = 0; j < buttons.length; j++) // highlight menu button
            buttons[j].style.backgroundColor = (buttons[j].id == buttons[i].id) ? 'var(--primary-color)' : 'transparent';
    })
}
