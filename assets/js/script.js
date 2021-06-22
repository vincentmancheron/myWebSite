// Fonctions bloquées:
block = (id) => id.forEach(element => element.onclick = () => alert('Cette fonctionnalité n\'est pas encore disponible.'))
block(document.querySelectorAll('.blocked'));
// Fin Fonctions bloquées

// Bouton langue:
    document.querySelectorAll('.flagSelect').forEach(element => {
        element.onclick = () => {
            document.querySelector('#flag').setAttribute('src',element.src);
        }
    })
// Fin Bouton langue

// Color Mode:
const body = document.querySelector('body');
const headerHome = document.querySelector ('header');
const main = document.querySelector('main');
const section = document.querySelectorAll('section');
const fauxFooter = document.querySelector('#footer');
const footer = document.querySelector('footer');

const colorMod = () => {
    var lSColorMod = JSON.parse(localStorage.getItem('colorMod'));
    if (lSColorMod) {
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

const changeColorMod = () => {
    var lSColorMod = JSON.parse(localStorage.getItem('colorMod'));
    if (!lSColorMod) {
        localStorage.setItem('colorMod', 'true'); 
    } else {
        localStorage.setItem('colorMod', 'false');
    }
    colorMod();
}

colorMod();

document.getElementById('colorMod').onclick = () => changeColorMod();
// Fin Color Mode