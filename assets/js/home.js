// Carousel:
const innerCarousel = document.querySelector('.carousel-inner');
const itemCarousel = document.querySelector('.carousel-item');

fetch('../assets/json/carousel.json')
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
        for (let i = 0; i < carousel.length; i++) {
            carouselTitle[i].innerHTML = carouseleriences[i].title;
            carouselText[i].innerHTML = carouseleriences[i].text + carouselText[i].innerHTML
            carouselMissions[i].innerHTML = carouseleriences[i].missions;
            carouselBtn[i].dataset.target = `#collapse${i+1}`;
            // carouselBtn[i].setAttribute('aria-controls', document.carouselBtn.getAttribute('aria-controls')) = `#collapse${i+1}`;
            carouselCollapse[i].id = `collapse${i+1}`;
            // carouselCollapse[i].ariaset.labelledby = `heading${i+1}`;
        }
    })
    .catch((err) => {
        alert("Error JSON")
    })
// Fin Carousel