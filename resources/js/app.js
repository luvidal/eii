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

/* ------------------------ SECTIONS ----------------------------- */

const sections = document.getElementsByClassName('section')
const section  = localStorage.getItem('section') || 's_0';

for(let i = 0; i < sections.length; i++)
    sections[i].style.display = (sections[i].id == section) ? 'flex' : 'none';


/* ------------------------ BUTTONS ------------------------------ */

const buttons = document.getElementsByClassName('menubutton')

for(let i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', () => 
    {
        const section = 's_' + buttons[i].id.split('_')[1];
        localStorage.setItem('section', section);
         
        for(let i = 0; i < sections.length; i++)
            sections[i].style.display = (sections[i].id == section) ? 'flex' : 'none';
    })
}
