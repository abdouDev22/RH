<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['ids'])) {
    $id_employe = $_SESSION['ids'];
    
} else {
    
  header("location:../../connexion.html");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/comt.css">
  <link rel="stylesheet" href="../asset/validation.css">
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="Validation.php">
      <div class="logo">
      <strong>MATA</strong>
      <span>Company</span>
    </div>
    </a>
    <a href="consultationAbsence.php" class="consul"> <b>Consultation Absence</b></a>
    <ul>
      <li><a href="../php/logout.php">logout</a> </li>
    </ul>
  </nav>
  < <div class="sidebar">
    <span class="lock1"> 
      <svg width="64px" height="64px" viewBox="-8.16 -8.16 40.32 40.32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-8.16" y="-8.16" width="40.32" height="40.32" rx="20.16" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.43200000000000005"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.4453 2.75 16.5018 4.42242 17.0846 6.68694C17.1879 7.08808 17.5968 7.32957 17.9979 7.22633C18.3991 7.12308 18.6405 6.7142 18.5373 6.31306C17.788 3.4019 15.1463 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg></span>
      <span class="lock2">
        <svg width="64px" height="64px" viewBox="-7.44 -7.44 38.88 38.88" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.44" y="-7.44" width="38.88" height="38.88" rx="19.44" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg>
      </span>
    <span class="space">
      <span>Espace Manager</span>
    </span>
  <ul>
    <li class="list">
        <a href="../Employe/">
          <span class="icon"><span class="employe"><svg fill="#000000" width="800px" height="800px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><title>employee_group_line</title><g id="e1709d41-49e9-409f-9912-e2615f9236f6" data-name="Layer 3"><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M21.91,17.65a20.6,20.6,0,0,0-13,2A1.77,1.77,0,0,0,8,21.25v3.56a1,1,0,0,0,2,0V21.38a18.92,18.92,0,0,1,12-1.68Z"/><path d="M33,22H26.3V20.52a1,1,0,0,0-2,0V22H17a1,1,0,0,0-1,1V33a1,1,0,0,0,1,1H33a1,1,0,0,0,1-1V23A1,1,0,0,0,33,22ZM32,32H18V24h6.3v.41a1,1,0,0,0,2,0V24H32Z"/><rect x="21.81" y="27.42" width="5.96" height="1.4"/><path d="M10.84,12.24a18,18,0,0,0-7.95,2A1.67,1.67,0,0,0,2,15.71v3.1a1,1,0,0,0,2,0v-2.9a16,16,0,0,1,7.58-1.67A7.28,7.28,0,0,1,10.84,12.24Z"/><path d="M33.11,14.23a17.8,17.8,0,0,0-7.12-2,7.46,7.46,0,0,1-.73,2A15.89,15.89,0,0,1,32,15.91v2.9a1,1,0,1,0,2,0v-3.1A1.67,1.67,0,0,0,33.11,14.23Z"/><path d="M10.66,10.61c0-.23,0-.45,0-.67a3.07,3.07,0,0,1,.54-6.11,3.15,3.15,0,0,1,2.2.89,8.16,8.16,0,0,1,1.7-1.08,5.13,5.13,0,0,0-9,3.27,5.1,5.1,0,0,0,4.7,5A7.42,7.42,0,0,1,10.66,10.61Z"/><path d="M24.77,1.83a5.17,5.17,0,0,0-3.69,1.55,7.87,7.87,0,0,1,1.9,1,3.14,3.14,0,0,1,4.93,2.52,3.09,3.09,0,0,1-1.79,2.77,7.14,7.14,0,0,1,.06.93,7.88,7.88,0,0,1-.1,1.2,5.1,5.1,0,0,0,3.83-4.9A5.12,5.12,0,0,0,24.77,1.83Z"/></g></svg></span></span>
          <span class="text">Employe</span>
        </a>
      </li>
    <li class="list">
      <a href="../index.php">
        <span class="icon"><span class="profile"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V13.0002M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V12.0002M8 4.00195C5.82497 4.01406 4.64706 4.11051 3.87868 4.87889C3.11032 5.64725 3.01385 6.82511 3.00174 9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M9 17.5H15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#1C274C" stroke-width="1.5"/><path d="M8 14H9M16 14H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M17 10.5H15M12 10.5H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/></svg></span></span>
        <span class="text">Manager</span>
      </a>
    </li>
  </ul>
</div>


<div class="grid">
  
<?php

$connect=mysqli_connect("localhost","root","","rh");
$resultat = mysqli_query($connect, "SELECT DISTINCT*
    FROM absences
    JOIN employes ON employes.id_employe = absences.id_employe
    JOIN type_absences ON type_absences.id_type_absences = absences.id_type_absences
    JOIN justificatifs ON absences.id_absences = justificatifs.id_absences
    JOIN utilisateurs ON employes.id_utilisateur = utilisateurs.id_utilisateurs
    WHERE justificatifs.Statut_Justificatif = 'justifié'  AND T_manager = 'En-attente'
    AND utilisateurs.id_role ='2';
");



$nombreLignes = mysqli_num_rows($resultat);

if ($nombreLignes > 0) {
while($ligne=mysqli_fetch_assoc($resultat)){

$a=$ligne["titre"];
$x=$ligne["id_type_absences"];
$b=$ligne["date_debut"];
$c=$ligne["date_fin"];
$e=$ligne["T_manager"];
$f=$ligne["id_absences"];
$n=$ligne["nom"];
$p=$ligne["prenom"];
$D=$ligne["dateCreation"];
$i=$ligne["id_employe"];
    echo'
  <div class="item">
    <div class="item-content">
      <span class="nom">Nom De l employe</span><span class="nom1">'.$n.'</span>
        <span class="prenom">Prenom de l employe</span><span class="prenom1">'.$p.'</span>
        <span class="type">Type d Absence</span><span class="type1">'.$a.'</span>
        <span class="num">'.$f.'</span>
          
        <span class="dateD">Date de debut</span>
        <span class="dateD1">'.$b.'</span>
        <span class="dateF">Date de fin</span>
        <span class="dateF1">'.$c.'</span>
        <span class="dateC">Date de creation</span>
        <span class="dateC1">'.$D.'</span>
        <a href="dossierjus.php?id='.$f.'"><span class="dossier"><svg class="d1s" width="800px" height="800px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M864 32H160a32 32 0 0 0-32 32v896a32 32 0 0 0 32 32h704a32 32 0 0 0 32-32V640a32 32 0 0 0-64 0v288H192V96h640v64a32 32 0 0 0 64 0V64a32 32 0 0 0-32-32z" fill="#231815" /><path d="M864 384a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM886.72 265.28a32 32 0 0 0-45.44 0 32 32 0 0 0-6.72 10.56A26.56 26.56 0 0 0 832 288a32 32 0 0 0 9.28 22.72 36.8 36.8 0 0 0 10.56 6.72 30.08 30.08 0 0 0 24.32 0 28.8 28.8 0 0 0 17.28-17.28 30.08 30.08 0 0 0 0-24.32 32 32 0 0 0-6.72-10.56zM608 160h-192a32 32 0 0 0-32 32v32H288a32 32 0 0 0-32 32v576a32 32 0 0 0 32 32h448a32 32 0 0 0 32-32V256a32 32 0 0 0-32-32h-96V192a32 32 0 0 0-32-32z m-160 64h128v64h-128z m256 64v512H320V288h64v32a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V288z" fill="#231815" /><path d="M608 416h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64zM608 544h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64zM608 672h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64z" fill="#231815" /></svg></span></a>
        <span class="lien valider"><a href="valide.php?id='.$f.'"><B>valider</B></a></span>
        <span class="lien refuser"><a href="refuse.php?id='.$f.'"><B>Refuser</B></a></span>
    </div>
    </div>';}}
    else {
      echo '<br><br><br><br><br><br>  <center><img src="../gif.gif" width="340" height="300"  alt="Texte alternatif"></center>';
  
    }?>
  </div>


  <script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
<script>
  tippy('.d1s', {
    content:'<strong class="f" style="font-size: 1.5em;">Dossier de l\'employe</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'dossier',
    arrow: true,
});
</script>

<script>
  const s = document.querySelector('.lock1');
s.classList.add('z');
const s2 = document.querySelector('.lock2');
const q = document.querySelector('.sidebar');
s.addEventListener('click', () => {
q.classList.add('hover');
q.classList.add('blocked');
s2.classList.add('z');
});
s2.addEventListener('click', () =>{
q.classList.remove('blocked');
s2.classList.remove('z');
})
</script>
<script>
 const sidebar = document.querySelector('.sidebar');
const listItems = document.querySelectorAll('.list');

// Calculer la hauteur de la sidebar et la position des éléments de la liste
const sidebarHeight = sidebar.offsetHeight;
const listItemHeight = listItems[0].offsetHeight;
const listHeight = listItems.length * listItemHeight;
const padding = (sidebarHeight - listHeight + 1) / 8;

// Ajouter une marge supérieure et inférieure aux éléments de la liste
listItems.forEach((item) => {
item.style.marginTop = padding + 'px';
item.style.marginBottom = padding + 'px';
});

</script>
<script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
<script>
  const btns = document.querySelectorAll('.btn');
  btns.forEach(btn => {
    btn.addEventListener('click', function () {
      // Ajoute la classe active au bouton cliqué
      btns.forEach(otherBtn => {
        otherBtn.classList.remove('active');
      });
      btn.classList.add('active');
    });

    btn.onmousemove = function (e) {
      const x = e.pageX - btn.offsetLeft;
      const y = e.pageY - btn.offsetTop;
      btn.style.setProperty('--x', x + 'px');
      btn.style.setProperty('--y', y + 'px');
    };
  });
  var grid = new Muuri('.grid', {
    dragEnabled: true,
    dragHandle: '.item-content', // Activer la poignée de glisser-déposer pour déplacer les éléments
    layout: {
      fillGaps: true,
      horizontal: false,
    },
    layoutDuration: 500
  });
  function resizeGrid() {
    grid.layout();
  }
  grid.refreshItems().layout();
  window.addEventListener('load', resizeGrid);

  var sortButton = document.getElementById('sort-button');
  var isAscending = true;
  sortButton.addEventListener('click', function () {
    isAscending = !isAscending;

    grid.sort(function (itemA, itemB) {
      var dateA = new Date(itemA.getElement().querySelector('.date').innerHTML);
      var dateB = new Date(itemB.getElement().querySelector('.date').innerHTML);

      if (isAscending) {
        return dateA - dateB;
      } else {
        return dateB - dateA;
      }
    });
  });
  var filterButton = document.getElementById('filter-button');
  filterButton.addEventListener('click', function () {
    var items = grid.getItems();
    for (var i = 0; i < items.length; i++) {
      var title = items[i].getElement().querySelector('h3').textContent;
      if (title.includes('informatique') || title.includes('Dév') || title.includes('web') || title.includes('Full-stack')) {
        items[i].getElement().setAttribute('data-category', 'informatique');
      } else {
        items[i].getElement().setAttribute('data-category', '');
      }
    }
    grid.filter('[data-category="informatique"]');
  });


  var filterButton1 = document.getElementById('filter-button1');
  filterButton1.addEventListener('click', function () {
    var items = grid.getItems();
    for (var i = 0; i < items.length; i++) {
      var title = items[i].getElement().querySelector('h3').textContent;
      if (title.includes('informatique') || title.includes('Dév') || title.includes('web') || title.includes('Full-stack')) {
        items[i].getElement().setAttribute('data-category', 'informatique');
      } else {
        items[i].getElement().setAttribute('data-category', '');
      }
    }
    grid.filter('[data-category=""]');
  });

  var resetButton = document.getElementById('reset-button');

  resetButton.addEventListener('click', function () {
    // Réinitialiser les filtres en affichant tous les éléments dans la grille

    // Réinitialiser les boutons de filtre
    var filterButtons = document.querySelectorAll('.btn-filter');
    filterButtons.forEach(function (button) {
      button.classList.remove('active');
    });

    // Réinitialiser les éléments filtrés
    grid.filter('*');
  });
</script>
</body>
</html>