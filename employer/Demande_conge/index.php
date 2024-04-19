<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id'])) {
    $id_employe = $_SESSION['id'];
    
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
  <link rel="stylesheet" href="../asset/styles.css">
  <link rel="stylesheet" href="../asset/demand.css">
  <title>Document</title>
</head>

<body>
  <nav>
    <a href="index.php">
      <div class="logo">
        <strong>MATA</strong>
        <span>Company</span>
      </div>
    </a>
    <ul>
      <li>
        <a href="../php/logout.php" class=".lia">Logout</a>
      </li>
    </ul>
    <a href="#" class="lien-Ajout"></a>
  </nav>
  <div class="sidebar">
    <span class="lock1"> 
      <svg width="64px" height="64px" viewBox="-8.16 -8.16 40.32 40.32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-8.16" y="-8.16" width="40.32" height="40.32" rx="20.16" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.43200000000000005"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.4453 2.75 16.5018 4.42242 17.0846 6.68694C17.1879 7.08808 17.5968 7.32957 17.9979 7.22633C18.3991 7.12308 18.6405 6.7142 18.5373 6.31306C17.788 3.4019 15.1463 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg></span>
      <span class="lock2">
        <svg width="64px" height="64px" viewBox="-7.44 -7.44 38.88 38.88" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.44" y="-7.44" width="38.88" height="38.88" rx="19.44" fill="#7ed0ec" strokewidth="0"/></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" d="M2 16C2 13.1716 2 11.7574 2.87868 10.8787C3.75736 10 5.17157 10 8 10H16C18.8284 10 20.2426 10 21.1213 10.8787C22 11.7574 22 13.1716 22 16C22 18.8284 22 20.2426 21.1213 21.1213C20.2426 22 18.8284 22 16 22H8C5.17157 22 3.75736 22 2.87868 21.1213C2 20.2426 2 18.8284 2 16Z" fill="#1C274C"/> <path d="M12 18C13.1046 18 14 17.1046 14 16C14 14.8954 13.1046 14 12 14C10.8954 14 10 14.8954 10 16C10 17.1046 10.8954 18 12 18Z" fill="#1C274C"/> <path d="M6.75 8C6.75 5.10051 9.10051 2.75 12 2.75C14.8995 2.75 17.25 5.10051 17.25 8V10.0036C17.8174 10.0089 18.3135 10.022 18.75 10.0546V8C18.75 4.27208 15.7279 1.25 12 1.25C8.27208 1.25 5.25 4.27208 5.25 8V10.0546C5.68651 10.022 6.18264 10.0089 6.75 10.0036V8Z" fill="#1C274C"/> </g></svg>
      </span>
    <span class="space">
      <span>Espace Employe</span>
    </span>
  <ul>
    <li class="list">
      <a href="../php/profil.php">
        <span class="icon"><span class="profile"><svg fill="#000000" width="800px" height="800px" viewBox="0 0 64 64"version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"xml:space="preserve" xmlns:serif="http://www.serif.com/"style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1216,-192)"><rect id="Icons" x="0" y="0" width="1280" height="800" style="fill:none;" /><g id="Icons1" serif:id="Icons"><g id="Strike"></g><g id="H1"></g><g id="H2"> </g><g id="H3"></g><g id="list-ul"></g><g id="hamburger-1"></g><g id="hamburger-2"></g><g id="list-ol"></g><g id="list-task"></g><g id="trash"></g><g id="vertical-menu"></g><g id="horizontal-menu"></g><g id="sidebar-2"></g><g id="Pen"></g><g id="Pen1" serif:id="Pen"></g><g id="clock"></g><g id="external-link"></g><g id="hr"></g><g id="info"></g><g id="warning"></g><g id="plus-circle"></g><g id="minus-circle"></g><g id="vue"></g><g id="cog"> </g><g id="logo"></g><g id="radio-check"></g><g id="eye-slash"></g><g id="eye"></g><g id="toggle-off"></g><g id="shredder"></g><g id="spinner--loading--dots-" serif:id="spinner [loading, dots]"></g><g id="react"></g><g id="check-selected"></g><g id="turn-off"></g><g id="code-block"></g><g id="user" transform="matrix(1.03318,0,0,1.03318,-20.8457,199.979)"><g transform="matrix(0.909091,0,0,0.909091,1182.28,-18.6364)"><path d="M50,46.5C42.8,46.5 37,40.7 37,33.5C37,26.3 42.8,20.5 50,20.5C57.2,20.5 63,26.3 63,33.5C63,40.7 57.2,46.5 50,46.5ZM50,24.5C45,24.5 41,28.5 41,33.5C41,38.5 45,42.5 50,42.5C55,42.5 59,38.5 59,33.5C59,28.5 55,24.5 50,24.5Z"style="fill-rule:nonzero;" /></g><g transform="matrix(1,0,0,1,1177.7,-20.5)"><path d="M34.036,58.5L34.036,67L30.4,67L30.4,58.5C30.4,51.318 39.218,45.773 50.4,45.773C61.582,45.773 70.4,51.318 70.4,58.5L70.4,67L66.764,67L66.764,58.5C66.764,53.591 59.309,49.409 50.4,49.409C41.491,49.409 34.036,53.591 34.036,58.5Z"style="fill-rule:nonzero;" /></g></g><g id="coffee-bean"></g><g transform="matrix(0.638317,0.368532,-0.368532,0.638317,785.021,-208.975)"><g id="coffee-beans"><g id="coffee-bean1" serif:id="coffee-bean"></g></g></g><g id="coffee-bean-filled"></g><g transform="matrix(0.638317,0.368532,-0.368532,0.638317,913.062,-208.975)"><g id="coffee-beans-filled"><g id="coffee-bean2" serif:id="coffee-bean"></g></g></g><g id="clipboard"></g><g transform="matrix(1,0,0,1,128.011,1.35415)"><g id="clipboard-paste"></g></g><g id="clipboard-copy"></g><g id="Layer1"></g></g></g></svg></span></span>
        <span class="text">Profile</span>
      </a>
    </li>
    <li class="list">
      <a href="../Demande_conge/index.php">
        <span class="icon"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"xmlns="http://www.w3.org/2000/svg"><path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="1.5"stroke-linecap="round" /><path d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" /></svg></span>
        <span class="text">Demande de congé</span>
      </a>
    </li>
    <li class="list">
      <a href="../Absence/index.php">
        <span class="icon"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path d="M9.5 14.4L10.9286 16L14.5 12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M2 11.9997C2 7.28562 2 4.9286 3.46447 3.46413C4.70529 2.22331 6.58687 2.03382 10 2.00488M22 11.9997C22 7.28562 22 4.9286 20.5355 3.46413C19.2947 2.22331 17.4131 2.03382 14 2.00488" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/> <path d="M10 22C7.19974 22 5.79961 22 4.73005 21.455C3.78924 20.9757 3.02433 20.2108 2.54497 19.27C2 18.2004 2 16.8003 2 14C2 11.1997 2 9.79961 2.54497 8.73005C3.02433 7.78924 3.78924 7.02433 4.73005 6.54497C5.79961 6 7.19974 6 10 6H14C16.8003 6 18.2004 6 19.27 6.54497C20.2108 7.02433 20.9757 7.78924 21.455 8.73005C22 9.79961 22 11.1997 22 14C22 16.8003 22 18.2004 21.455 19.27C20.9757 20.2108 20.2108 20.9757 19.27 21.455C18.2004 22 16.8003 22 14 22" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/> </g></svg></span>
        <span class="text">Absence</span>
      </a>
    </li>
  </ul>
</div>
  <div>
    <button id="reset-button" class="btn"><span>Tout</span> </button>
    <button id="filter-button" class="btn"><span>En-attente</span> </button>
    <button id="filter-button1" class="btn"><span>Validé</span> </button>
    <button id="filter-button2" class="btn"><span>Refusé</span> </button>
    
  </div>

  <div class="grid">
    <?php

$connect=mysqli_connect("localhost","root","","rh");
$resultat = mysqli_query($connect, "SELECT DISTINCT* FROM demande_congé 
    JOIN employes ON employes.id_employe = demande_congé.id_employe 
    JOIN type_conge ON type_conge.id_type_conge = demande_congé.id_type_conge 
    WHERE employes.id_employe = '$id_employe'
    ORDER BY demande_congé.DateCreation ASC");


$nombreLignes = mysqli_num_rows($resultat);

if ($nombreLignes > 0) {
while($ligne=mysqli_fetch_assoc($resultat)){

$a=$ligne["type_conge"];
$x=$ligne["id_type_conge"];
$b=$ligne["date_début"];
$c=$ligne["date_fin"];
$d=$ligne["statut"];
$e=$ligne["motif"];
$f=$ligne["id_congé"];

    echo'
    
    <div class="item">
      <div class="item-content">
        <span class="no">No :</span><span class="no1"><input type="number" value="'.$f.'" readonly></span>
        <span class="type">Type de congé</span><span class="type1">'.$a.'</span>
        <span class="statut">Statut: </span> <span class="statut1">'.$d.'</span>
        <span class="datedeb"><strong> Date debut:</strong></span> <span class="datedeb1 date">'.$b.'</span>
        <span class="datelim"><strong> Date limite:</strong></span> <span class="datelim1">'.$c.'</span>';
        if ($d=='En-attente') {
          echo'<span class="modifier"><svg class="n" width="64px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7 5.12758L19.266 6.37458C19.4172 6.51691 19.5025 6.71571 19.5013 6.92339C19.5002 7.13106 19.4128 7.32892 19.26 7.46958L18.07 8.89358L14.021 13.7226C13.9501 13.8037 13.8558 13.8607 13.751 13.8856L11.651 14.3616C11.3755 14.3754 11.1356 14.1751 11.1 13.9016V11.7436C11.1071 11.6395 11.149 11.5409 11.219 11.4636L15.193 6.97058L16.557 5.34158C16.8268 4.98786 17.3204 4.89545 17.7 5.12758Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.033 7.61865C12.4472 7.61865 12.783 7.28287 12.783 6.86865C12.783 6.45444 12.4472 6.11865 12.033 6.11865V7.61865ZM9.23301 6.86865V6.11865L9.23121 6.11865L9.23301 6.86865ZM5.50001 10.6187H6.25001L6.25001 10.617L5.50001 10.6187ZM5.50001 16.2437L6.25001 16.2453V16.2437H5.50001ZM9.23301 19.9937L9.23121 20.7437H9.23301V19.9937ZM14.833 19.9937V20.7437L14.8348 20.7437L14.833 19.9937ZM18.566 16.2437H17.816L17.816 16.2453L18.566 16.2437ZM19.316 12.4937C19.316 12.0794 18.9802 11.7437 18.566 11.7437C18.1518 11.7437 17.816 12.0794 17.816 12.4937H19.316ZM15.8863 6.68446C15.7282 6.30159 15.2897 6.11934 14.9068 6.2774C14.5239 6.43546 14.3417 6.87397 14.4998 7.25684L15.8863 6.68446ZM18.2319 9.62197C18.6363 9.53257 18.8917 9.13222 18.8023 8.72777C18.7129 8.32332 18.3126 8.06792 17.9081 8.15733L18.2319 9.62197ZM8.30001 16.4317C7.8858 16.4317 7.55001 16.7674 7.55001 17.1817C7.55001 17.5959 7.8858 17.9317 8.30001 17.9317V16.4317ZM15.767 17.9317C16.1812 17.9317 16.517 17.5959 16.517 17.1817C16.517 16.7674 16.1812 16.4317 15.767 16.4317V17.9317ZM12.033 6.11865H9.23301V7.61865H12.033V6.11865ZM9.23121 6.11865C6.75081 6.12461 4.7447 8.13986 4.75001 10.6203L6.25001 10.617C6.24647 8.96492 7.58269 7.62262 9.23481 7.61865L9.23121 6.11865ZM4.75001 10.6187V16.2437H6.25001V10.6187H4.75001ZM4.75001 16.242C4.7447 18.7224 6.75081 20.7377 9.23121 20.7437L9.23481 19.2437C7.58269 19.2397 6.24647 17.8974 6.25001 16.2453L4.75001 16.242ZM9.23301 20.7437H14.833V19.2437H9.23301V20.7437ZM14.8348 20.7437C17.3152 20.7377 19.3213 18.7224 19.316 16.242L17.816 16.2453C17.8195 17.8974 16.4833 19.2397 14.8312 19.2437L14.8348 20.7437ZM19.316 16.2437V12.4937H17.816V16.2437H19.316ZM14.4998 7.25684C14.6947 7.72897 15.0923 8.39815 15.6866 8.91521C16.2944 9.44412 17.1679 9.85718 18.2319 9.62197L17.9081 8.15733C17.4431 8.26012 17.0391 8.10369 16.6712 7.7836C16.2897 7.45165 16.0134 6.99233 15.8863 6.68446L14.4998 7.25684ZM8.30001 17.9317H15.767V16.4317H8.30001V17.9317Z" fill="#000000"/> </g></svg></span>
          ';
        }
        echo'
         <a href="../Demande_conge/description.php?id_demande='.$f.'" class="voire" style="--clr:rgb(2, 2, 198);"><span>Voir plus</span><i></i></a>
          </div>
    </div>';}}
    else {
      echo '<br><br><br><br><br><br>  <center><img src="../Absence/gif.gif" width="340" height="300"  alt="Texte alternatif"></center>';
  }
?>
  </div>
  
  <div class="popupBackground c">
    <div class="popup1">
        <h1>Modifier</h1>
        <form id="form2">
            <label for="nom" class="no">Date de debut</label>
            <input class="probo " type="date" id="nom" name="datedeb" >
            <label for="email" class="nn">Date de fin</label>
            <input class="nn1 n"  type="date"  id="email" name="datelim">
            <label class="type" for="">Type congé</label>
            <select class="type1"  name="type1" id="">
              <option value="malade">malade</option>
              <option value="Deuil">Deuil</option>
              <option value="Probleme">Probleme</option>
            </select>
            <button class="valid2" id="val" type="submit">Valider</button>
        </form>
    </div>
  </div>
  <div class="popupBackground qq">
    <div class="popup">
        <h1>Ajouter demande de congé</h1>
        <form id="form1">
            <label for="nom" class="no">Date de debut</label>
            <input class="no1" type="date"  id="nom" name="datedeb" require >
            <label for="email" class="nn">Date de fin</label>
            <input class="nn1" type="date" id="email" name="datelim" require>
            <label class="type" for="">Type congé</label>
            <select class="type1" name="type1" id="" require>
              <option value="1">malade</option>
              <option value="2">Deuil</option>
              <option value="3">Probleme</option>
            </select>
            <label for="" class="dd">Description</label>
            <div class="dd1"><textarea name="motif" id="" cols="30" rows="10" require></textarea></div>
            <button class="valid1" type="submit">Valider</button>
        </form>
    </div>
</div>




<script>
  var data = {};

document.getElementById("form1").addEventListener("submit", function(e) {
  e.preventDefault();

  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "async/Ajoute.php", true);
  xhr.responseType = "text"; // ou xhr.responseType = "text";

  // Envoyez les données du formulaire
  const formData = new FormData(this);
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
    var data1 = {};

document.getElementById("form2").addEventListener("submit", function(e) {
  e.preventDefault();

  // Créez une requête AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "async/modifier.php", true);
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
      var data1 = JSON.parse(xhr.responseText);
      if (data1.success) {
        console.log("modification fini !");
      } else {
        alert(data1.msg);
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
  
function afficherPopup() {
  let popupBackground = document.querySelector(".qq")
  popupBackground.classList.add("active")

}


function cacherPopup() {
  let popupBackground = document.querySelector(".qq")
  popupBackground.classList.remove("active")
}



function initAddEventListenerPopup() {
  
  let btnjus = document.querySelectorAll('.lien-Mod1')
  btnPartage = document.querySelector(".lien-Ajout")
  const popupBackground = document.querySelector('.qq')
  

  if(btnPartage!==null){
    btnPartage.addEventListener("click", () => {
      
      afficherPopup()
  })
  }
  


  popupBackground.addEventListener("click", (event) => {
      
      if (event.target === popupBackground) {
          
          cacherPopup()
      }
  })

  for(let btnj of btnjus){
    btnj.addEventListener("click", () => {
      afficherPopup()
    })
  }
  
}
initAddEventListenerPopup();
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
  localStorage.setItem("get_id", undefined);
  const items = document.querySelectorAll('.item');
  const pop = document.querySelector('.c')

for (const item of items) {
  const modifiers = item.querySelectorAll('.modifier');

  for (const modifier of modifiers) {
    // Do something with the modifier
    modifier.addEventListener('click',()=>{
      pop.classList.add('active')
      const form = pop.querySelector('#form2');
      const item = modifier.closest('.item-content')
      const no = item.querySelector('.no1 input').value;
      const type1 = item.querySelector('.type1').innerHTML;
      const selectType = form.querySelector('.type1');
      const optionType = selectType.querySelector(`option[value="${type1}"]`);
      
      optionType.selected = true;
      
      const datedeb1 = item.querySelector('.datedeb1').innerHTML;
      const datelim1 = item.querySelector('.datelim1').innerHTML;
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"))
      const inputNo = form.querySelector('.probo');
      const nn1 = form.querySelector('.nn1');
      inputNo.value = datedeb1;
      nn1.value=datelim1
      

     

      
    })
  }
}

  

  pop.addEventListener('click',(event)=>{
    if(event.target===pop){
      pop.classList.remove('active')
    }
    
  })
</script>
<script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
<script defer>
  tippy('.lien-Ajout', {
    content:'<strong class="f" style="font-size: 1.5em;">Ajoute des demande de congé</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato',
    arrow: true,
    delay: [650,200]
});
tippy('.n', {
    content:'<strong class="f" style="font-size: 1.5em;">Modifier cette demande de cogé</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato1',
    arrow: true,
    delay: [530,200]
});
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

  <script defer>
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
      dragHandle: '.item-content', 
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

    var filterButton = document.getElementById('filter-button');
    filterButton.addEventListener('click', function () {
      var items = grid.getItems();
      for (var i = 0; i < items.length; i++) {
        var title = items[i].getElement().querySelector('.statut1').textContent;
        if (title.includes('En-attente') ) {
          items[i].getElement().setAttribute('data-category', 'En-attente');
        } else {
          items[i].getElement().setAttribute('data-category', '');
        }
      }
      grid.filter('[data-category="En-attente"]');
    });


    var filterButton1 = document.getElementById('filter-button1');
    filterButton1.addEventListener('click', function () {
      var items = grid.getItems();
      for (var i = 0; i < items.length; i++) {
        var title = items[i].getElement().querySelector('.statut1').textContent;
        if (title.includes('Validé') ) {
          items[i].getElement().setAttribute('data-category', 'Validé');
        } else {
          items[i].getElement().setAttribute('data-category', '');
        }
      }
      grid.filter('[data-category="Validé"]');
    });


      var filterButton1 = document.getElementById('filter-button2');
      filterButton1.addEventListener('click', function () {
        var items = grid.getItems();
        for (var i = 0; i < items.length; i++) {
          var title = items[i].getElement().querySelector('.statut1').textContent;
          if (title.includes('Refusé') )  {
            items[i].getElement().setAttribute('data-category', 'Refusé');
          } else {
            items[i].getElement().setAttribute('data-category', '');
          }
        }
        grid.filter('[data-category="Refusé"]');
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