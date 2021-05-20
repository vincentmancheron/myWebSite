// Experiences, Formations et Skills:
const expMainTimeline = document.querySelector('#exp .main-timeline');
const expTimeline = document.querySelector('#exp .timeline');
const trainMainTimeline = document.querySelector('#trainings .main-timeline');
const trainTimeline = document.querySelector('#trainings .timeline');
const idProgress = document.querySelectorAll('#skills .itemSkill>div:first-child');
const progressBar = document.querySelectorAll('#skills .progress-bar');
const mentionProgress = document.querySelectorAll('#skills .itemSkill>div:last-child');

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
        const expBtn = document.querySelectorAll('#exp .btn');
        const expCollapse = document.querySelectorAll('#exp .collapse')
        for (let i = 0; i < experiences.length; i++) {
            expTitle[i].innerHTML = experiences[i].title;
            expText[i].innerHTML = experiences[i].text + expText[i].innerHTML
            expMissions[i].innerHTML = experiences[i].missions;
            expBtn[i].dataset.target = `#collapse${i+1}`;
            // expBtn[i].setAttribute('aria-controls', document.expBtn.getAttribute('aria-controls')) = `#collapse${i+1}`;
            expCollapse[i].id = `collapse${i+1}`;
            // expCollapse[i].ariaset.labelledby = `heading${i+1}`;
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
        // Injections valeurs Skills:
        const skills = data.skills;
        for (let i = 0; i < skills.length; i++) {
            idProgress[i].innerHTML = `<img class="mr-2" src="${skills[i].imgSrc}" alt="${skills[i].imgAlt}">`;
            idProgress[i].innerHTML = `${idProgress[i].innerHTML}<p>${skills[i].name}:</p>`;
            // progressBar[i].setAttribute('style',`width=${skills[i].value}%`);
            // progressBar[i].setAttribute('aria-valuenow', skills[i].value);
            mentionProgress[i].innerHTML = `<p>${skills[i].mention}</p>`;
        }
    })
    .catch((err) => {
        alert("Error JSON")
    })
// Fin Experiences, Formations et Skills