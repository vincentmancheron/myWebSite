// Light Mode:
const body = document.querySelector('body');
const headerHome = document.querySelector ('header');
const section = document.querySelectorAll('section');
const footer = document.querySelector('footer');

function colorMode () {
    var lightMode = JSON.parse(localStorage.getItem('lightMode'));
    if (lightMode) {
        body.style.color = "black";
        headerHome.style.backgroundColor = 'white';
        section.forEach(element => {
            element.style.backgroundImage = 'none';
            element.style.backgroundColor = 'white';
        })
        footer.style.backgroundColor= 'white';
    } else {
        body.style.color = "whitesmoke";
        headerHome.style.backgroundColor = 'black';
        section.forEach(element => {
            element.style.backgroundImage = 'url(/assets/img/oldBlack.jpg)';
            element.style.backgroundColor = 'black';
        })
        footer.style.backgroundColor = 'black';
    }
}

colorMode();

document.getElementById('lightMode').onclick = () => {
    var lightMode = JSON.parse(localStorage.getItem('lightMode'));
    if (!lightMode) {
        localStorage.setItem('lightMode', 'true'); 
    } else {
        localStorage.setItem('lightMode', 'false');
    }
    colorMode();
}
// Fin Light Mode