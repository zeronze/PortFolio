// Sélectionnez les éléments que vous souhaitez animer
const competencesSection = document.querySelector("#competences");
const competencesColumns = document.querySelectorAll("#competences .col-md-4");

// Créez une fonction pour activer l'animation des colonnes
const animateCompetences = () => {
  competencesColumns.forEach((column) => {
    column.classList.add("animate__animated", "animate__backInLeft");
  });
};

// Configurez Waypoints pour surveiller la section
new Waypoint({
  element: competencesSection,
  handler: animateCompetences,
  offset: "100%", // Ajustez cette valeur selon vos besoins
});





// Sélectionnez les éléments que vous souhaitez animer
const travauxSection = document.querySelector("#travaux");
const travauxColumns = document.querySelectorAll("#travaux .col-md-6");

// Créez une fonction pour activer l'animation des colonnes
const animateTravaux = () => {
    travauxColumns.forEach((column) => {
    column.classList.add("animate__animated", "animate__backInRight");
  });
};

// Configurez Waypoints pour surveiller la section
new Waypoint({
  element: travauxSection,
  handler: animateTravaux,
  offset: "100%", // Ajustez cette valeur selon vos besoins
});


// Sélectionnez les éléments que vous souhaitez animer
const firstSection = document.querySelector("#first");
const firstColumns = document.querySelectorAll("#first");

// Créez une fonction pour activer l'animation des colonnes
const animateFirst = () => {
    firstColumns.forEach((column) => {
    column.classList.add("animate__animated", "animate__backInLeft");
  });
};

// Configurez Waypoints pour surveiller la section
new Waypoint({
  element: firstSection,
  handler: animateFirst,
  offset: "100%", // Ajustez cette valeur selon vos besoins
});



// Sélectionnez l'élément que vous souhaitez animer
const firsttwoSection = document.querySelector("#firsttwo");

// Créez une fonction pour activer l'animation de l'élément
const animatefirsttwo = () => {
    firsttwoSection.classList.add("animate__animated", "animate__backInRight");
};

// Configurez Waypoints pour surveiller la section
new Waypoint({
  element: firsttwoSection,
  handler: animatefirsttwo,
  offset: "100%", // Ajustez cette valeur selon vos besoins
});




// Attendre que le DOM soit prêt
document.addEventListener("DOMContentLoaded", function () {
    // Sélectionnez l'élément que vous souhaitez animer
    const navSection = document.querySelector("#nav");

    // Créez une fonction pour activer l'animation de l'élément
    const animatenav = () => {
        navSection.classList.add("animate__animated", "animate__fadeInDown");
    };

    // Configurez Waypoints pour surveiller la section
    new Waypoint({
        element: navSection,
        handler: animatenav,
        offset: "100%", // Ajustez cette valeur selon vos besoins
    });
});



