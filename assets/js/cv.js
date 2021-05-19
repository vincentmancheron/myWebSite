// Experiences et Formations:
const expMainTimeline = document.querySelector('#exp .main-timeline');
const expTimeline = document.querySelector('#exp .timeline');
const trainMainTimeline = document.querySelector('#trainings .main-timeline');
const trainTimeline = document.querySelector('#trainings .timeline');

fetch('../assets/ress/donnees.json')
    .then((response) => response.json())
    .then((data) => {
        // Clonage expériences:
        const experiences = data.experiences
        for (let i = 1; i < experiences.length; i++) {
            let clone = expTimeline.cloneNode(true);
            expMainTimeline.appendChild(clone);
        }
        // Injections des données expériences:
        const expTitle = document.querySelectorAll('#exp .title');
        const expText = document.querySelectorAll('#exp .description');
        const expMissions = document.querySelectorAll('#exp .card-body');
        for (let i = 0; i < experiences.length; i++) {
            expTitle[i].innerHTML = experiences[i].title;
            expText[i].innerHTML = experiences[i].text + expText[i].innerHTML
            expMissions[i].innerHTML = experiences[i].missions;
        }
        // Clonage Trainings:
        const trainings = data.trainings
        for (let i = 1; i < trainings.length; i++) {
            let clone = trainTimeline.cloneNode(true);
            trainMainTimeline.appendChild(clone);
        }
        // Injections des données trainings:
        const trainTitle = document.querySelectorAll('#trainings .title');
        const trainImg = document.querySelectorAll('#trainings img');
        const trainDesc = document.querySelectorAll('#trainings .description');
        const trainLink = document.querySelectorAll('#trainings .timeline-content');
        for (let i = 0; i < trainings.length; i++) {
            trainTitle[i].innerHTML = trainings[i].title;
            trainImg[i].src = trainings[i].imgSrc;
            trainImg[i].alt = trainings[i].imgAlt;
            trainDesc[i].innerHTML = trainDesc[i].innerHTML + trainings[i].description;
            trainLink[i].href = trainings[i].link;
        }
    })
    .catch((err) => {
        alert("Error JSON")
    })
// Fin Experiences et Formations