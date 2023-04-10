import './bootstrap';
import '../css/app.css';
import '../css/theme.css'; 

const body = document.querySelector('body');

document.getElementById('btnShowHide').addEventListener('click', () =>
{
    console.log('togle click');    
    body.querySelector('nav').classList.toggle('close');
})

document.getElementById('btnSwitch').addEventListener('click', () =>
{
    SwitchColors();
}); 

document.querySelector("a[href='#']").addEventListener('click', function (e)
{
   e.preventDefault();
});

function SwitchColors()
{
    body.classList.toggle('dark');
    const switchText = document.getElementById('switchText');
    switchText.innerHTML = body.classList.contains('dark') ? lightText : darkText;
}


SwitchColors();