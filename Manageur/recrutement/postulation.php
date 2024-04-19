<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['ids'])) {
    $id_employe = $_SESSION['ids'];
} else {
    
  header("location:../../connexion.html");
  exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/comt.css">
  <link rel="stylesheet" href="../asset/postulation.css">
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="recrutement.php">
      <div class="logo">
      <strong>MATA</strong>
      <span>Company</span>
    </div>
    </a>
    <ul>
      <li><a href="../php/logout.php">logout</a> </li>
    </ul>
  </nav>
  <div class="sidebar">
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
<a href="recrutement.php" class="retourne r"><b>retour</b><i></i></a>
<div class="grid">
<?php
  


  
  $serveur = "localhost";
  $utilisateur = "root";
  $motdepasse = "";
  $base = "rh";
  $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
 
  $id=$_GET["id"];
    
    $resul = mysqli_query($connexion, "SELECT * FROM offres,postuler,candidats where 
    offres.id_offres=postuler.id_offre and
    candidats.id_candidats=postuler.id_candidats and id_offres='$id'");
    
    while($l=mysqli_fetch_assoc($resul)){
      
      $ss=$l['titre_offre'];
      $sss=$l['id_candidats'];
    $a=$l['id_offres'];
    $b=$l['titre_offre'];
    $c=$l['description'];
    $d=$l['date_publication'];
    $e=$l['nom'];
    $f=$l['prenom'];
    $g=$l['poste'];
    $h=$l['date_de_naissance'];
    $i=$l['telephone'];
    $j=$l['email'];
    echo'
  <div class="item">
    <div class="item-content">
      <span class="prenom">Prenom :</span><span class="prenom1">'.$f.'</span>
  <span class="nom">Nom :</span><span class="nom1">'.$e.'</span>
  <span class="poste">Poste:</span><span class="poste1">'.$g.'</span>
  <span class="Date">Date de naissance</span><span class="Date1">'.$h.'</span>
  <span class="tele">Telephone :</span><span class="tele1">'.$i.'</span>
  <span class="no">'.$sss.'</span>
  <span class="email">Email :</span><span class="email email1"><input type="email" name="" id="" value="'.$j.'"></span>
  <span class="a"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
  <span class="b1"><a href="DossierCandidat.php?id='.$sss.'&ids='.$id.'"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4 2C2.34315 2 1 3.34315 1 5V9V10V19C1 20.6569 2.34315 22 4 22H7C7.55228 22 8 21.5523 8 21C8 20.4477 7.55228 20 7 20H4C3.44772 20 3 19.5523 3 19V10V9C3 8.44772 3.44772 8 4 8H11.7808H13.5H20.1C20.5971 8 21 8.40294 21 8.9V9C21 9.55228 21.4477 10 22 10C22.5523 10 23 9.55228 23 9V8.9C23 7.29837 21.7016 6 20.1 6H13.5H11.7808L11.3489 4.27239C11.015 2.93689 9.81505 2 8.43845 2H4ZM4 6C3.64936 6 3.31278 6.06015 3 6.17071V5C3 4.44772 3.44772 4 4 4H8.43845C8.89732 4 9.2973 4.3123 9.40859 4.75746L9.71922 6H4ZM22.1213 11.7071C20.9497 10.5355 19.0503 10.5355 17.8787 11.7071L16.1989 13.3869L11.2929 18.2929C11.1647 18.4211 11.0738 18.5816 11.0299 18.7575L10.0299 22.7575C9.94466 23.0982 10.0445 23.4587 10.2929 23.7071C10.5413 23.9555 10.9018 24.0553 11.2425 23.9701L15.2425 22.9701C15.4184 22.9262 15.5789 22.8353 15.7071 22.7071L20.5556 17.8586L22.2929 16.1213C23.4645 14.9497 23.4645 13.0503 22.2929 11.8787L22.1213 11.7071ZM19.2929 13.1213C19.6834 12.7308 20.3166 12.7308 20.7071 13.1213L20.8787 13.2929C21.2692 13.6834 21.2692 14.3166 20.8787 14.7071L19.8622 15.7236L18.3068 14.1074L19.2929 13.1213ZM16.8923 15.5219L18.4477 17.1381L14.4888 21.097L12.3744 21.6256L12.903 19.5112L16.8923 15.5219Z" fill="#000000"/> </g></svg></a></span>

  </div>
    </div>';}?>
</div>

<div class="popup2">
  <h1>Ajouter un Employe</h1>
  <div class="f3"><svg  width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M10.0303 8.96965C9.73741 8.67676 9.26253 8.67676 8.96964 8.96965C8.67675 9.26255 8.67675 9.73742 8.96964 10.0303L10.9393 12L8.96966 13.9697C8.67677 14.2625 8.67677 14.7374 8.96966 15.0303C9.26255 15.3232 9.73743 15.3232 10.0303 15.0303L12 13.0607L13.9696 15.0303C14.2625 15.3232 14.7374 15.3232 15.0303 15.0303C15.3232 14.7374 15.3232 14.2625 15.0303 13.9696L13.0606 12L15.0303 10.0303C15.3232 9.73744 15.3232 9.26257 15.0303 8.96968C14.7374 8.67678 14.2625 8.67678 13.9696 8.96968L12 10.9393L10.0303 8.96965Z" fill="#1C274C"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C6.06294 1.25 1.25 6.06294 1.25 12C1.25 17.9371 6.06294 22.75 12 22.75C17.9371 22.75 22.75 17.9371 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 17.1086 17.1086 21.25 12 21.25C6.89137 21.25 2.75 17.1086 2.75 12Z" fill="#1C274C"/> </g></svg></div>
  <form id="form1">
      <label for="" class="tt">Nom du candidat</label>
      <input type="text" class="tt1" >
      <label for="nom" class="no">Poste</label>
      <input class="no1" type="text" id="nom" name="post">
      <label for="email" class="nn">Departement</label>
      <select genre="1" class="nn1" type="text" id="email" name="depar">
      <?php
      $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
      $reqs=mysqli_query($connexion," SELECT* FROM type_affectation");
      while ($l=mysqli_fetch_assoc($reqs)) {
        $a=$l["departement"];
        # code...
      
      echo'
      
      <option value="'.$a.'">'.$a.'</option>
      
      ';} ?></select>
      <button class="valid" id="btnEnvoyerMail">Valider</button>
  </form>

</div>


<script>
  localStorage.setItem("get_id", undefined);
const items = document.querySelectorAll('.item');
const pop=document.querySelector('.popup2')
for (const item of items) {
const modifiers = item.querySelectorAll('.a');

for (const modifier of modifiers) {
 // Do something with the modifier
 modifier.addEventListener('click',()=>{
   const form = pop.querySelector('#form1');
   const item = modifier.closest('.item-content')
   const nom = item.querySelector('.nom1').innerHTML;
   const poste = item.querySelector('.poste1').innerHTML;
   const no = item.querySelector('.no').innerHTML;
   localStorage.setItem("get_id", no);
   console.log(localStorage.getItem("get_id"))
   const nomform = form.querySelector('.tt1');
   const posteform=form.querySelector('.no1');
   nomform.value = nom;
   posteform.value=poste
 
   
 })
}
}
</script>
  <script>
    var data = {};

  document.getElementById("form1").addEventListener("submit", function(e) {
    e.preventDefault();

    // Créez une requête AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "async/AjoutEmploye.php", true);
    xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
  formData.append("local_storage_value",localStorage.getItem('get_id'));
  xhr.send(formData);

    // Gérez la réponse
    xhr.onload = function() {
      if (xhr.status == 200) {
        // La requête AJAX a été réussie
        console.log(xhr.responseText);
        var data = JSON.parse(xhr.responseText);
        if (data.success) {
          console.log("Utilisateur inscrit !");
        } else {
          alert(data.msg);
        }
      } else {
        // La requête AJAX a échoué
        alert("Une erreur est survenue...");
      }
    };

    return false;
  });
  </script>
<script>


function afficherPopup2() {
  let popupBackground = document.querySelector(".popup2")
  
  popupBackground.classList.add("active3")
  popupBackground.style.transition = "500ms ease-in-out";
  
}



function cacherPopup2() {
  let popupBackground = document.querySelector(".popup2")
 
  popupBackground.classList.remove("active3")
}



function initAddEventListenerPopup2() {

  btnPartage = document.querySelectorAll(".a")
  for (let element of btnPartage) {
  let btn = element;
  let popup = document.querySelector(".f3")
  btn.addEventListener("click", () => {
      afficherPopup2()
  })
  popup.addEventListener("click", (event) => {
      cacherPopup2()
  })
  }
  
  


  
}
initAddEventListenerPopup2();
</script>


<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
<script>
  tippy('.a', {
    content:'<strong class="f" style="font-size: 1.5em;">Ajouter Comme un employe</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato',
    arrow: true,
});
tippy('.b1', {
    content:'<strong class="f" style="font-size: 1.5em;">Dossier du candidat</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'ss',
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

  




</script>
</body>
</html>