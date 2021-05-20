// Color Mode:
const body = document.querySelector('body');
const headerHome = document.querySelector ('header');
const main = document.querySelector('main');
const section = document.querySelectorAll('section');
const fauxFooter = document.querySelector('#footer');
const footer = document.querySelector('footer');

colorMode = () => {
    var lightMode = JSON.parse(localStorage.getItem('lightMode'));
    if (lightMode) {
        body.style.color = "black";
        // body.borderColor = "black";
        headerHome.style.backgroundColor = 'white';
        main.style.backgroundColor = 'grey';
        section.forEach(element => {
            element.style.backgroundImage = 'none';
            element.style.backgroundColor = 'white';
            element.style.borderColor = "blue";
            element.style.borderStyle = "solid";
            element.style.borderWidth = "2px";
        })
        fauxFooter.querySelectorAll('a').forEach(element => element.style.color = "black");
        footer.style.backgroundColor= 'white';
    } else {
        body.style.color = "whitesmoke";
        // body.borderColor = "white";
        headerHome.style.backgroundColor = 'black';
        main.style.backgroundColor = 'black';
        section.forEach(element => {
            element.style.backgroundImage = 'url(/assets/img/oldBlack.jpg)';
            element.style.backgroundColor = 'black';
            element.style.borderColor = "green";
            element.style.borderStyle = "solid";
            element.style.borderWidth = "2px";
        })
        fauxFooter.querySelectorAll('a').forEach(element => element.style.color = "grey");
        footer.style.backgroundColor = 'black';
    }
}

colorMode();

document.getElementById('colorMode').onclick = () => {
    var lightMode = JSON.parse(localStorage.getItem('lightMode'));
    if (!lightMode) {
        localStorage.setItem('lightMode', 'true'); 
    } else {
        localStorage.setItem('lightMode', 'false');
    }
    colorMode();
}
// Fin Color Mode