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
const btnColorMod = document.querySelector('#colorMod');
const body = document.querySelector('body');
const headerHome = document.querySelector('header');
const logo = document.querySelector('#logo');
const nav = document.querySelector('#nav');
const logo2 = document.querySelector('#logo2');
const main = document.querySelector('main');
const section = document.querySelectorAll('section');
const fauxFooter = document.querySelector('#footer');
const footer = document.querySelector('footer');

const colorMod = () => {
    var lSColorMod = JSON.parse(localStorage.getItem('colorMod'));
    if (lSColorMod) {
        // Light Mode:
        btnColorMod.innerHTML = 'Dark Mode'
        body.style.color = "black";
        // body.borderColor = "black";
        if (window.location.search == '') {
            headerHome.style.backgroundColor = 'white';
            logo.setAttribute("src", "/assets/img/blackLogo.png");
        }
        nav.classList.remove('navbar-light','bg-light');
        nav.classList.add('navbar-dark','bg-dark');
        logo2.setAttribute("src", "/assets/img/whiteLogoNavBar.png");
        main.style.backgroundColor = 'grey';
        section.forEach(element => {
            element.style.backgroundImage = 'none';
            element.style.backgroundColor = 'white';
            element.style.borderColor = "blue";
            element.style.borderStyle = "solid";
            element.style.borderWidth = "2px";
        })
        fauxFooter.querySelectorAll('a').forEach(element => element.style.color = "black");
        footer.style.backgroundColor= 'grey';
    } else {
        // Dark Mode:
        btnColorMod.innerHTML = 'Light Mode'
        body.style.color = "whitesmoke";
        // body.borderColor = "white";
        if (window.location.search == '') {
            headerHome.style.backgroundColor = 'black';
            logo.setAttribute("src", "/assets/img/whiteLogo.png");
        }
        nav.classList.remove('navbar-dark','bg-dark');
        nav.classList.add('navbar-light','bg-light');
        logo2.setAttribute("src", "/assets/img/blackLogoNavBar.png");
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

document.getElementById('colorMod').onclick = () => {
    changeColorMod();
    // On recharge la page si on est sur le CV car le color mod ne fonctionne pas directement sur les textes chargés en json.
    if (window.location.search == '?nav=cv') {
        window.location.reload();
    }
}
// Fin Color Mode