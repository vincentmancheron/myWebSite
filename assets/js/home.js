// Formulaire:
// Liste Pays:
fetch('/assets/json/states.json')
    .then(response => response.json())
    .then(data => {
        const states = data.states;
        for (i=0; i<states.length; i++) {
            document.querySelector('#state').innerHTML += `<option value="${states[i]}">${states[i]}</option>`
        }
    })
    .catch(error => alert("Erreur JSON States"));

// Fin Formulaire