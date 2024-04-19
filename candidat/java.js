// Fonction pour basculer le mode sombre
function toggleDarkMode() {
    var bodyElement = document.body;
     document.getElementById('nav');
     document.getElementById('sidebar');
     document.getElementsByClassName('container');
     document.getElementsByClassName('button')
     document.getElementsByClassName('cont');
     document.getElementsByClassName('item-content');
     document.getElementsByClassName('im');
     document.getElementsByClassName('logo');
     document.getElementsByClassName('voire');
     document.getElementsByClassName('datep');
     document.getElementsByClassName('retourne');
     document.getElementsByClassName('datel');
     document.getElementsByClassName('postuler1');
     document.getElementsByClassName('containerd');
     document.getElementsByClassName('postuler');
    bodyElement.classList.toggle("dark-mode");
  
    // Vérifier si le mode sombre est activé
    var isDarkMode = bodyElement.classList.contains("dark-mode");
    
    // Enregistrer l'état du mode sombre dans le stockage local
    if (isDarkMode) {
      localStorage.setItem("darkMode", "enabled");
    } else {
      localStorage.removeItem("darkMode");
    }
  }
  
  // Fonction pour charger l'état du mode sombre lors du chargement de la page
  function loadDarkMode() {
    var bodyElement = document.body;
      document.getElementById('nav');
      document.getElementById('sidebar');
      document.getElementsByClassName('container');
      document.getElementsByClassName('button');
      document.getElementsByClassName('cont');
      document.getElementsByClassName('item-content');
      document.getElementsByClassName('im');
      document.getElementsByClassName('logo');
      document.getElementsByClassName('voire');
      document.getElementsByClassName('datep');
      document.getElementsByClassName('datel');
      document.getElementsByClassName('retourne');
      document.getElementsByClassName('postuler1');
      document.getElementsByClassName('postuler');
      document.getElementsByClassName('containerd');
    // Vérifier si l'état du mode sombre est enregistré dans le stockage local
    var darkModeState = localStorage.getItem("darkMode");
    
    // Appliquer l'état du mode sombre en fonction de la valeur récupérée du stockage local
    if (darkModeState === "enabled") {
      bodyElement.classList.add("dark-mode");
    } else {
      bodyElement.classList.remove("dark-mode");
    }
  }
  
  // Appeler la fonction loadDarkMode lors du chargement de la page
  window.addEventListener("load", loadDarkMode);
  
