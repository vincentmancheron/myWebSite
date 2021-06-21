// Fonctions bloquées:
block = (id) => id.onclick = () => alert('Cette fonctionnalité n\'est pas encore disponible');
block(document.querySelector('#contactForm'));
// Fin Fonctions bloquées

// Carousel:
const innerCarousel = document.querySelector('.carousel-inner');
const itemCarousel = document.querySelector('.carousel-item');

fetch('assets/json/carousel.json')
    .then((response) => response.json())
    .then((data) => {
        // Clonage expériences:
        const carousel = data.carousel
        for (let i = 1; i < carousel.length; i++) {
            let clone = itemCarousel.cloneNode(true);
            innerCarousel.appendChild(clone);
        }
        // Injections des données carousel:
        const carouselCaption = document.querySelectorAll('.carousel-caption');
        const carouselLink = document.querySelectorAll('.carousel-item a');
        const carouselImg = document.querySelectorAll('.carousel-item img');
        for (let i = 0; i < carousel.length; i++) {
            carouselCaption[i].innerHTML = `<h5>${carousel[i].title}</h5>`;
            carouselCaption[i].innerHTML = carouselCaption[i].innerHTML + `<p>${carousel[i].subTitle}</p>`;
            carouselLink[i].href = carousel[i].link;
            carouselImg[i].src = carousel[i].imgSrc;
            carouselImg[i].alt = carousel[i].imgAlt;
        }
    })
    .catch((err) => {
        alert("Error JSON carousel")
    })
// Fin Carousel

// Formulaire:
// Liste Pays:
fetch('/assets/json/states.json')
    .then(response => response.json())
    .then(data => {
        const states = data.states;
        for (i=0; i<states.length; i++) {
            document.querySelector('#inputState').innerHTML += `<option value="${states[i]}">${states[i]}</option>`
        }
    })
    .catch(error => alert("Erreur JSON States"));

// Fin Formulaire