// Fonction pour basculer le mode sombre
function toggleDarkMode() {
    var bodyElement = document.body;
    var elementsToToggle = [
        document.getElementById('nav'),
        document.getElementById('sidebar'),
        // Ajoutez d'autres éléments ici au besoin
    ];

    // Bascule du mode sombre pour le corps
    bodyElement.classList.toggle("dark-mode");

    // Bascule du mode sombre pour chaque élément sélectionné
    elementsToToggle.forEach(element => {
        element.classList.toggle("dark-mode");
    });

    // Vérifier si le mode sombre est activé
    var isDarkMode = bodyElement.classList.contains("dark-mode");

    // Enregistrer l'état du mode sombre dans le stockage local
    localStorage.setItem("darkMode", isDarkMode ? "enabled" : "disabled");
}

// Fonction pour charger l'état du mode sombre lors du chargement de la page
function loadDarkMode() {
    var bodyElement = document.body;
    var elementsToToggle = [
        document.getElementById('nav'),
        document.getElementById('sidebar'),
        // Ajoutez d'autres éléments ici au besoin
    ];

    // Vérifier si l'état du mode sombre est enregistré dans le stockage local
    var darkModeState = localStorage.getItem("darkMode");

    // Appliquer l'état du mode sombre en fonction de la valeur récupérée du stockage local
    if (darkModeState === "enabled") {
        bodyElement.classList.add("dark-mode");
        // Ajoutez d'autres logiques ici au besoin
    } else {
        bodyElement.classList.remove("dark-mode");
        // Ajoutez d'autres logiques ici au besoin
    }
}

// Appeler la fonction loadDarkMode lors du chargement de la page
window.addEventListener("load", loadDarkMode);
