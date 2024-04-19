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
  <link rel="stylesheet" href="../asset/style.css">
  <link rel="stylesheet" href="../asset/jus-Absence.css">
  <link rel="stylesheet" href="">
  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
  <link
    href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet"
/>
  <title>Document</title>
</head>
<body>
  <nav>
    <a href="../Absence/">
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
          <span class="icon"><span class="profile"><svg fill="#000000" width="800px" height="800px" viewBox="0 0 64 64"
                version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve" xmlns:serif="http://www.serif.com/"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                <g transform="matrix(1,0,0,1,-1216,-192)">
                  <rect id="Icons" x="0" y="0" width="1280" height="800" style="fill:none;" />
                  <g id="Icons1" serif:id="Icons">
                    <g id="Strike">
                    </g>
                    <g id="H1">
                    </g>
                    <g id="H2">
                    </g>
                    <g id="H3">
                    </g>
                    <g id="list-ul">
                    </g>
                    <g id="hamburger-1">
                    </g>
                    <g id="hamburger-2">
                    </g>
                    <g id="list-ol">
                    </g>
                    <g id="list-task">
                    </g>
                    <g id="trash">
                    </g>
                    <g id="vertical-menu">
                    </g>
                    <g id="horizontal-menu">
                    </g>
                    <g id="sidebar-2">
                    </g>
                    <g id="Pen">
                    </g>
                    <g id="Pen1" serif:id="Pen">
                    </g>
                    <g id="clock">
                    </g>
                    <g id="external-link">
                    </g>
                    <g id="hr">
                    </g>
                    <g id="info">
                    </g>
                    <g id="warning">
                    </g>
                    <g id="plus-circle">
                    </g>
                    <g id="minus-circle">
                    </g>
                    <g id="vue">
                    </g>
                    <g id="cog">
                    </g>
                    <g id="logo">
                    </g>
                    <g id="radio-check">
                    </g>
                    <g id="eye-slash">
                    </g>
                    <g id="eye">
                    </g>
                    <g id="toggle-off">
                    </g>
                    <g id="shredder">
                    </g>
                    <g id="spinner--loading--dots-" serif:id="spinner [loading, dots]">
                    </g>
                    <g id="react">
                    </g>
                    <g id="check-selected">
                    </g>
                    <g id="turn-off">
                    </g>
                    <g id="code-block">
                    </g>
                    <g id="user" transform="matrix(1.03318,0,0,1.03318,-20.8457,199.979)">
                      <g transform="matrix(0.909091,0,0,0.909091,1182.28,-18.6364)">
                        <path
                          d="M50,46.5C42.8,46.5 37,40.7 37,33.5C37,26.3 42.8,20.5 50,20.5C57.2,20.5 63,26.3 63,33.5C63,40.7 57.2,46.5 50,46.5ZM50,24.5C45,24.5 41,28.5 41,33.5C41,38.5 45,42.5 50,42.5C55,42.5 59,38.5 59,33.5C59,28.5 55,24.5 50,24.5Z"
                          style="fill-rule:nonzero;" />
                      </g>
                      <g transform="matrix(1,0,0,1,1177.7,-20.5)">
                        <path
                          d="M34.036,58.5L34.036,67L30.4,67L30.4,58.5C30.4,51.318 39.218,45.773 50.4,45.773C61.582,45.773 70.4,51.318 70.4,58.5L70.4,67L66.764,67L66.764,58.5C66.764,53.591 59.309,49.409 50.4,49.409C41.491,49.409 34.036,53.591 34.036,58.5Z"
                          style="fill-rule:nonzero;" />
                      </g>
                    </g>
                    <g id="coffee-bean">
                    </g>
                    <g transform="matrix(0.638317,0.368532,-0.368532,0.638317,785.021,-208.975)">
                      <g id="coffee-beans">
                        <g id="coffee-bean1" serif:id="coffee-bean">
                        </g>
                      </g>
                    </g>
                    <g id="coffee-bean-filled">
                    </g>
                    <g transform="matrix(0.638317,0.368532,-0.368532,0.638317,913.062,-208.975)">
                      <g id="coffee-beans-filled">
                        <g id="coffee-bean2" serif:id="coffee-bean">
                        </g>
                      </g>
                    </g>
                    <g id="clipboard">
                    </g>
                    <g transform="matrix(1,0,0,1,128.011,1.35415)">
                      <g id="clipboard-paste">
                      </g>
                    </g>
                    <g id="clipboard-copy">
                    </g>
                    <g id="Layer1">
                    </g>
                  </g>
                </g>
              </svg></span></span>
          <span class="text">Profile</span>
        </a>
      </li>
      <li class="list">
        <a href="../Demande_conge/">  
          <span class="icon"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#1C274C" stroke-width="1.5"
                stroke-linecap="round" />
              <path
                d="M22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C21.5093 4.43821 21.8356 5.80655 21.9449 8"
                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
            </svg></span>
          <span class="text">Demande de congé</span>
        </a>
      </li>
      <li class="list">
        <a href="../absence/">
          <span class="icon"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M14 4C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V13M10 4C6.22876 4 4.34315 4 3.17157 5.17157C2 6.34315 2 8.22876 2 12C2 15.7712 2 17.6569 3.17157 18.8284C4.34315 20 6.22876 20 10 20H13"
                stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
              <path d="M10 16H6" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
              <circle cx="18" cy="17" r="3" stroke="#1C274C" stroke-width="1.5" />
              <path d="M20.5 19.5L21.5 20.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
              <path d="M2 10L7 10M22 10L11 10" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
            </svg></span>
          <span class="text">Absence</span>
        </a>
      </li>

    </ul>
  </div>
  
<?php
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","rh");
$resultat = mysqli_query($connect, "SELECT * FROM absences 
    INNER JOIN justificatifs ON absences.id_absences = justificatifs.id_absences 
    INNER JOIN type_absences ON type_absences.id_type_absences = absences.id_type_absences 
    WHERE absences.id_absences ='$id'");
    
while($ligne=mysqli_fetch_assoc($resultat)){

$a=$ligne["titre"];
$x=$ligne["id_type_absences"];

$i=$ligne["id_absences"];
$b=$ligne["date_debut"];
$z=$ligne["T_manager"];
$f=$ligne["Statut_Justificatif"];
$c=$ligne["date_fin"];
$k=$ligne["description"];
$h=$ligne["dateCreation"];
$d=$ligne["Chemin_Fichier"];
$e=$ligne["Description_Justificatif"];
}
          echo '

  <div class="des">
    <span class="lien-Mod1"><input type="submit" value="Modifier"></span>  
    <a href="Abjustifier.php" class="retourne"><b>retour</b><i></i></a>
    <h1 class="titre">Absence Justifier</h1>
    <span class="no">No :</span><span class="no1"><input type="number" value="'.$i.'"></span>
    <span class="mana">T-Manager</span><span class="mana1"><input type="text" value="'.$z.'"></span>
    <span class="datcre">Date de creation</span><span class="datcre1"><input type="datime" value="'.$h.'"></span>
    <span class="type">Type d Absence</span><span class="type1"><input type="text" value="'.$a.'"></span>
    <span class="sta">Statut</span><span class="sta1"><input type="text" value="'.$f.'"></span>
    <span class="datb">Date  de Debut</span> <span class="datb1"><input type="date" value="'.$b.'"></span>
    <span class="datl">Date de fin</span><span class="datl1"><input type="date" value="'.$c.'"></span>
    <span class="dossier"><svg class="d1s" width="800px" height="800px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M864 32H160a32 32 0 0 0-32 32v896a32 32 0 0 0 32 32h704a32 32 0 0 0 32-32V640a32 32 0 0 0-64 0v288H192V96h640v64a32 32 0 0 0 64 0V64a32 32 0 0 0-32-32z" fill="#231815" /><path d="M864 384a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM886.72 265.28a32 32 0 0 0-45.44 0 32 32 0 0 0-6.72 10.56A26.56 26.56 0 0 0 832 288a32 32 0 0 0 9.28 22.72 36.8 36.8 0 0 0 10.56 6.72 30.08 30.08 0 0 0 24.32 0 28.8 28.8 0 0 0 17.28-17.28 30.08 30.08 0 0 0 0-24.32 32 32 0 0 0-6.72-10.56zM608 160h-192a32 32 0 0 0-32 32v32H288a32 32 0 0 0-32 32v576a32 32 0 0 0 32 32h448a32 32 0 0 0 32-32V256a32 32 0 0 0-32-32h-96V192a32 32 0 0 0-32-32z m-160 64h128v64h-128z m256 64v512H320V288h64v32a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V288z" fill="#231815" /><path d="M608 416h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64zM608 544h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64zM608 672h-192a32 32 0 0 0 0 64h192a32 32 0 0 0 0-64z" fill="#231815" /></svg></span>
    <span class="descrip">Description</span>
    <div class="descrip1"><textarea name="" id="" cols="30" rows="10" >'.$k.'</textarea></div>
      <span class="lien-Mod"><input type="submit" value="Modifier"></span>  
  </div>
';?>

  
<div class="popupBackground">
      <div class="popup">
          <h1>Justifier l'Absence</h1>
          <form id="form2" enctype="multipart/form-data">
       
                      <input type='file' name='imageFile' >
                 
              <label for="nom" class="gg">Date de debut</label>
              <input class="gg1" type="date" id="nom" name="nom">
              <label class="type" for="">Type</label>
              <select class="type1" name="type1" id="">
                <option value="Malade">Malade</option>
                <option value="Cas personnel">Cas personnel</option>
                <option value="Mariage">Mariage</option>
              </select>
              <label for="" class="dd">Commentaire</label>
              <div class="dd1"><textarea name="con" id="" cols="30" rows="10"></textarea></div>
              <button class="valid" id="btnEnvoyerMail">Valider</button>
          </form>
      </div>
    </div>
 
  <div class="popupBackground1">
    <div class="popup1">
        <h1>Dossier des justicatif</h1>
        <form id="form2"> 
            <?php
$resultat = mysqli_query($connect, "SELECT * FROM absences 
    INNER JOIN justificatifs ON absences.id_absences = justificatifs.id_absences 
    INNER JOIN type_absences ON type_absences.id_type_absences = absences.id_type_absences 
    WHERE absences.id_absences ='$id'");
    
while($ligne=mysqli_fetch_assoc($resultat)){
$d=$ligne["Chemin_Fichier"];
$a=$ligne["Description_Justificatif"];}
echo'
            <span class="download"><a href="/RH/RH/document/'.$d.'" download="BREUVE"><svg class="dow" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="#1C274C"/> <path class="fleche" fill-rule="evenodd" clip-rule="evenodd" d="M12 16.75C12.2106 16.75 12.4114 16.6615 12.5535 16.5061L16.5535 12.1311C16.833 11.8254 16.8118 11.351 16.5061 11.0715C16.2004 10.792 15.726 10.8132 15.4465 11.1189L12.75 14.0682V3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V14.0682L8.55353 11.1189C8.27403 10.8132 7.79963 10.792 7.49393 11.0715C7.18823 11.351 7.16698 11.8254 7.44648 12.1311L11.4465 16.5061C11.5886 16.6615 11.7894 16.75 12 16.75Z" fill="#1C274C"/> </g></svg></a></span>
            <label for="" class="dd">Commentaire</label>
            <div class="dd1"><textarea name="con" id="" cols="30" rows="10">'.$a.'</textarea></div>
            ';?>
        </form>
    </div>
  </div>

  <script src="https://unpkg.com/popper.js@1"></script>
<script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>

  <script defer>
    tippy('.d1s', {
    content:'<strong class="f" style="font-size: 1.5em;">Consulter votre Dossier</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato',
    arrow: true,
    delay: [950,300]
});
tippy('.dow', {
    content:'<strong class="f" style="font-size: 1.5em;">Télécharger l\'image</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato1',
    arrow: true,
    delay: [650,200]
});
    
  </script>

  <script>
    if(localStorage.getItem("retour")==1){
      const lien_retour=document.querySelector(".retourne")
      lien_retour.href="toutAbsence.php"
      localStorage.setItem("retour",0)
    }
    
  </script>

  <script>
    var data = {};
  
  document.getElementById("form2").addEventListener("submit", function(e) {
    e.preventDefault();
  
    // Créez une requête AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "async/Modifier.php", true);
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


  <script>
    function afficherPopup() {
    let popupBackground = document.querySelector(".popupBackground")
    popupBackground.classList.add("active")
    const form = popupBackground.querySelector('#form2');
     
      const no = document.querySelector('.no1 input').value;
      const type1 = document.querySelector('.type1 input').value;
      const selectType = form.querySelector('.type1');
      const optionType = selectType.querySelector(`option[value="${type1}"]`);
      console.log(optionType)
      optionType.selected = true;
      
      const datedeb1 = document.querySelector('.datb1 input').value;
      
      localStorage.setItem("get_id", no);
      console.log(localStorage.getItem("get_id"))
      const inputNo = form.querySelector('.gg1');
      const nn1 = form.querySelector('.nn1');
      inputNo.value = datedeb1;
  }
  function afficherDossier(){
    let popupBackground1 = document.querySelector(".popupBackground1")
    popupBackground1.classList.add("active")
  }
  function cacherDossier(){
    let popupBackground1 = document.querySelector(".popupBackground1")
    popupBackground1.classList.remove("active")
  }
  
  
  function cacherPopup() {
    let popupBackground = document.querySelector(".popupBackground")
    popupBackground.classList.remove("active")
  }
  
  
  
  function initAddEventListenerPopup() {
    
   btnjus =document.querySelector(".lien-Mod")
    btnPartage = document.querySelector(".lien-Mod1")
    const popupBackground = document.querySelector('.popupBackground')
    const popupBackground1 = document.querySelector('.popupBackground1')
    btnDosiier =document.querySelector(".d1s")
  
    if(btnjus!==null){
      btnjus.addEventListener("click", () => {
        
        afficherPopup()
    })
    }
    if(btnDosiier!==null){
      btnDosiier.addEventListener("click", () => {
        
        afficherDossier()
    })
    }
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
    popupBackground1.addEventListener("click", (event) => {
        

        if (event.target === popupBackground1) {
            
            cacherDossier()
        }
    })
  
    
    
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
</body>
</html>