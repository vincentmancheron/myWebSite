// Navigation:
const homeHeader = document.querySelector('#home');
const navIndex = document.querySelector('#navIndex');
const carousel = document.querySelector('#carousel');
const offers = document.querySelector('#offers');
const cvHeader = document.querySelector('#cvHeader');
const navCv = document.querySelector('#navCv');
const exp = document.querySelector('#exp');
const train = document.querySelector('#trainings');
const hobbies = document.querySelector('#hobbies');
const portfolios = document.querySelector('#portfolios');
const contact = document.querySelector('#contact');

const Nav = () => {
    var lSNav = JSON.parse(localStorage.getItem('Nav'));
    if (lSnav == "Index") {
        homeHeader.classList.remove('d-none');
        navIndex.classList.remove('d-none');
        carousel.classList.remove('d-none');
        offers.classList.remove('d-none');
        cvHeader.classList.add('d-none');
        navCv.classList.add('d-none');
        exp.classList.add('d-none'); 
        train.classList.add('d-none');
        hobbies.classList.add('d-none');
    } else if (lSnav == "CV") {
        homeHeader.classList.add('d-none');
        navIndex.classList.add('d-none');
        carousel.classList.add('d-none');
        offers.classList.add('d-none');
        cvHeader.classList.remove('d-none');
        navCv.classList.remove('d-none');
        exp.classList.remove('d-none'); 
        train.classList.remove('d-none');
        hobbies.classList.remove('d-none');
    }
}

document.querySelectorAll('.goCv').forEach(element => {
    element.onclick = () => localStorage.setItem('Nav','CV');
    Nav();
})
// Fin Navigation

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

const setColorMod = () => {
    var lSColorMod = JSON.parse(localStorage.getItem('colorMod'));
    if (!lSColorMod) {
        localStorage.setItem('colorMod', 'true'); 
    } else {
        localStorage.setItem('colorMod', 'false');
    }
    colorMod();
}

setColorMod();

document.getElementById('colorMod').onclick = () => setColorMod();
// Fin Color Mode