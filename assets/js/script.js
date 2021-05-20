// Light Mode:
// Bouton:
document.getElementById('lightMode').onclick = () => {
    section = document.querySelectorAll('section');
    section.forEach(element => {
        element.style.backgroundImage = 'none';
        element.style.backgroundColor = 'white';
        element.style.color = "black";
    })
}
// Local Storage:

// Fin Light Mode