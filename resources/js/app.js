import './bootstrap';
import '../css/app.css';
import '../css/theme.css'; 

const body = document.querySelector('body');

document.getElementById('btnShowHide').addEventListener('click', () => body.querySelector('nav').classList.toggle('close') )
document.getElementById('btnSwitch').addEventListener('click', () => SwitchColors() ); 
document.querySelector("a[href='#']").addEventListener('click', e => e.preventDefault() );

function SwitchColors()
{
    const ifdark = body.classList.toggle('dark');
    document.getElementById('switchText').innerHTML = ifdark ? lightText : darkText;
    localStorage.setItem('session', ifdark ? 'dark' : 'light')
}

const ifdark = localStorage.getItem('session') == 'dark';
if (ifdark) SwitchColors();
document.getElementById('switchText').innerHTML = ifdark ? lightText : darkText;

/* ------------------------ SECTIONS & BUTTONS----------------------------- */

const sections = document.getElementsByClassName('section')
const buttons  = document.getElementsByClassName('menubutton')

const section  = localStorage.getItem('section') || 'section_0';
const button   = localStorage.getItem('button');

SetSections(section);
SetButtons(button);

/* ------------------------ BUTTONS ------------------------------ */

for(let i = 0; i < buttons.length; i++) 
{
    buttons[i].addEventListener('click', event => 
    {
        const section = 'section_' + buttons[i].id.split('_')[1];
        localStorage.setItem('section', section);
        SetSections(section);

        const button = buttons[i].id;
        localStorage.setItem('button', button);
        SetButtons(button);
    })
}

function SetSections(selected)
{
    for(let i = 0; i < sections.length; i++)
        sections[i].style.display = (sections[i].id == selected) ? 'flex' : 'none'; 
}

function SetButtons(selected)
{
    for(let j = 0; j < buttons.length; j++)
        (buttons[j].id == selected) ? 
            buttons[j].classList.add('selected') : 
            buttons[j].classList.remove('selected');
}