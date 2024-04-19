<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['ids'])) {
    $id_employe = $_SESSION['ids'];
} else {
    
  header("location:../../../connexion.html");
  exit;
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/jus-Absence.css">
    <link rel="stylesheet" href="../../asset/comt.css">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="../index.php">
          <div class="logo">
            <strong>MATA</strong>
            <span>Company</span>
          </div>
        </a>
        <a href="index.php" class="retourne"><b>retour</b><i></i></a>
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
          <span>Espace Manager</span>
        </span>
      <ul>
        <li class="list">
            <a href="../index.php">
              <span class="icon"><span class="employe"><svg fill="#000000" width="800px" height="800px" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><title>employee_group_line</title><g id="e1709d41-49e9-409f-9912-e2615f9236f6" data-name="Layer 3"><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M18.42,16.31a5.7,5.7,0,1,1,5.76-5.7A5.74,5.74,0,0,1,18.42,16.31Zm0-9.4a3.7,3.7,0,1,0,3.76,3.7A3.74,3.74,0,0,0,18.42,6.91Z"/><path d="M21.91,17.65a20.6,20.6,0,0,0-13,2A1.77,1.77,0,0,0,8,21.25v3.56a1,1,0,0,0,2,0V21.38a18.92,18.92,0,0,1,12-1.68Z"/><path d="M33,22H26.3V20.52a1,1,0,0,0-2,0V22H17a1,1,0,0,0-1,1V33a1,1,0,0,0,1,1H33a1,1,0,0,0,1-1V23A1,1,0,0,0,33,22ZM32,32H18V24h6.3v.41a1,1,0,0,0,2,0V24H32Z"/><rect x="21.81" y="27.42" width="5.96" height="1.4"/><path d="M10.84,12.24a18,18,0,0,0-7.95,2A1.67,1.67,0,0,0,2,15.71v3.1a1,1,0,0,0,2,0v-2.9a16,16,0,0,1,7.58-1.67A7.28,7.28,0,0,1,10.84,12.24Z"/><path d="M33.11,14.23a17.8,17.8,0,0,0-7.12-2,7.46,7.46,0,0,1-.73,2A15.89,15.89,0,0,1,32,15.91v2.9a1,1,0,1,0,2,0v-3.1A1.67,1.67,0,0,0,33.11,14.23Z"/><path d="M10.66,10.61c0-.23,0-.45,0-.67a3.07,3.07,0,0,1,.54-6.11,3.15,3.15,0,0,1,2.2.89,8.16,8.16,0,0,1,1.7-1.08,5.13,5.13,0,0,0-9,3.27,5.1,5.1,0,0,0,4.7,5A7.42,7.42,0,0,1,10.66,10.61Z"/><path d="M24.77,1.83a5.17,5.17,0,0,0-3.69,1.55,7.87,7.87,0,0,1,1.9,1,3.14,3.14,0,0,1,4.93,2.52,3.09,3.09,0,0,1-1.79,2.77,7.14,7.14,0,0,1,.06.93,7.88,7.88,0,0,1-.1,1.2,5.1,5.1,0,0,0,3.83-4.9A5.12,5.12,0,0,0,24.77,1.83Z"/></g></svg></span></span>
              <span class="text">Employe</span>
            </a>
          </li>
        <li class="list">
          <a href="../../index.php">
            <span class="icon"><span class="profile"><svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V13.0002M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V12.0002M8 4.00195C5.82497 4.01406 4.64706 4.11051 3.87868 4.87889C3.11032 5.64725 3.01385 6.82511 3.00174 9" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M9 17.5H15" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#1C274C" stroke-width="1.5"/><path d="M8 14H9M16 14H12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/><path d="M17 10.5H15M12 10.5H7" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/></svg></span></span>
            <span class="text">Manager</span>
          </a>
        </li>
      </ul>
    </div>


    <div class="grid">
      <?php
     
     
     $serveur = "Localhost";
     $utilisateur = "root";
     $motdepasse = "";
     $base = "rh";
     
     $sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);
     
     $resultat = mysqli_query($sum, "SELECT DISTINCT* FROM absences 
         INNER JOIN justificatifs ON absences.id_absences = justificatifs.id_absences 
         INNER JOIN type_absences ON type_absences.id_type_absences = absences.id_type_absences 
         WHERE id_employe = '$id_employe' and Statut_Justificatif='justifié' AND T_manager='En-attente' ");
         
     $nombreLignes = mysqli_num_rows($resultat);
     
     if ($nombreLignes > 0) {
         while ($ligne = mysqli_fetch_assoc($resultat)) {
     
         $a = $ligne["titre"];
         $x = $ligne["id_type_absences"];
     
         $i = $ligne["id_absences"];
         $b = $ligne["date_debut"];
         $z = $ligne["T_manager"];
         $f = $ligne["Statut_Justificatif"];
         $c = $ligne["date_fin"];
     
         $h = $ligne["dateCreation"];
         $d = $ligne["Chemin_Fichier"];
         $e = $ligne["Description_Justificatif"];
         
         
             echo '
             <div class="item">
               <div class="item-content">
                  
                 <span class="no">No :</span><span class="no1"><input type="number" value="'.$i.'"></span>
                 <span class="type">Type d Absence</span><span class="type1">'.$a.'</span>
                 <span class="statut">Statut: </span> <span class="statut1">'.$f.'</span>
                 <span class="T-statut">T-Manager: </span> <span class="T-statut1">'.$z.'</span>
                 <span class="datedeb"><strong> Date Debut:</strong></span> <span class="datedeb1 date">'.$b.'</span>
                 <span class="datelim"><strong> Date fin:</strong></span> <span class="datelim1">'.$c.'</span>
                 <span class="download"><a href="/RH/RH/document/'.$d.'" download="BREUVE"><svg class="d1s" width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M3 14.25C3.41421 14.25 3.75 14.5858 3.75 15C3.75 16.4354 3.75159 17.4365 3.85315 18.1919C3.9518 18.9257 4.13225 19.3142 4.40901 19.591C4.68577 19.8678 5.07435 20.0482 5.80812 20.1469C6.56347 20.2484 7.56459 20.25 9 20.25H15C16.4354 20.25 17.4365 20.2484 18.1919 20.1469C18.9257 20.0482 19.3142 19.8678 19.591 19.591C19.8678 19.3142 20.0482 18.9257 20.1469 18.1919C20.2484 17.4365 20.25 16.4354 20.25 15C20.25 14.5858 20.5858 14.25 21 14.25C21.4142 14.25 21.75 14.5858 21.75 15V15.0549C21.75 16.4225 21.75 17.5248 21.6335 18.3918C21.5125 19.2919 21.2536 20.0497 20.6517 20.6516C20.0497 21.2536 19.2919 21.5125 18.3918 21.6335C17.5248 21.75 16.4225 21.75 15.0549 21.75H8.94513C7.57754 21.75 6.47522 21.75 5.60825 21.6335C4.70814 21.5125 3.95027 21.2536 3.34835 20.6517C2.74643 20.0497 2.48754 19.2919 2.36652 18.3918C2.24996 17.5248 2.24998 16.4225 2.25 15.0549C2.25 15.0366 2.25 15.0183 2.25 15C2.25 14.5858 2.58579 14.25 3 14.25Z" fill="#1C274C"/> <path class="fleche" fill-rule="evenodd" clip-rule="evenodd" d="M12 16.75C12.2106 16.75 12.4114 16.6615 12.5535 16.5061L16.5535 12.1311C16.833 11.8254 16.8118 11.351 16.5061 11.0715C16.2004 10.792 15.726 10.8132 15.4465 11.1189L12.75 14.0682V3C12.75 2.58579 12.4142 2.25 12 2.25C11.5858 2.25 11.25 2.58579 11.25 3V14.0682L8.55353 11.1189C8.27403 10.8132 7.79963 10.792 7.49393 11.0715C7.18823 11.351 7.16698 11.8254 7.44648 12.1311L11.4465 16.5061C11.5886 16.6615 11.7894 16.75 12 16.75Z" fill="#1C274C"/> </g></svg></a></span>
                 ';if ($z=='En-attente') {
                   echo'
                   
                 <span class="modifier lien-Mod1"><svg class="n" width="64px" height="64px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7 5.12758L19.266 6.37458C19.4172 6.51691 19.5025 6.71571 19.5013 6.92339C19.5002 7.13106 19.4128 7.32892 19.26 7.46958L18.07 8.89358L14.021 13.7226C13.9501 13.8037 13.8558 13.8607 13.751 13.8856L11.651 14.3616C11.3755 14.3754 11.1356 14.1751 11.1 13.9016V11.7436C11.1071 11.6395 11.149 11.5409 11.219 11.4636L15.193 6.97058L16.557 5.34158C16.8268 4.98786 17.3204 4.89545 17.7 5.12758Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12.033 7.61865C12.4472 7.61865 12.783 7.28287 12.783 6.86865C12.783 6.45444 12.4472 6.11865 12.033 6.11865V7.61865ZM9.23301 6.86865V6.11865L9.23121 6.11865L9.23301 6.86865ZM5.50001 10.6187H6.25001L6.25001 10.617L5.50001 10.6187ZM5.50001 16.2437L6.25001 16.2453V16.2437H5.50001ZM9.23301 19.9937L9.23121 20.7437H9.23301V19.9937ZM14.833 19.9937V20.7437L14.8348 20.7437L14.833 19.9937ZM18.566 16.2437H17.816L17.816 16.2453L18.566 16.2437ZM19.316 12.4937C19.316 12.0794 18.9802 11.7437 18.566 11.7437C18.1518 11.7437 17.816 12.0794 17.816 12.4937H19.316ZM15.8863 6.68446C15.7282 6.30159 15.2897 6.11934 14.9068 6.2774C14.5239 6.43546 14.3417 6.87397 14.4998 7.25684L15.8863 6.68446ZM18.2319 9.62197C18.6363 9.53257 18.8917 9.13222 18.8023 8.72777C18.7129 8.32332 18.3126 8.06792 17.9081 8.15733L18.2319 9.62197ZM8.30001 16.4317C7.8858 16.4317 7.55001 16.7674 7.55001 17.1817C7.55001 17.5959 7.8858 17.9317 8.30001 17.9317V16.4317ZM15.767 17.9317C16.1812 17.9317 16.517 17.5959 16.517 17.1817C16.517 16.7674 16.1812 16.4317 15.767 16.4317V17.9317ZM12.033 6.11865H9.23301V7.61865H12.033V6.11865ZM9.23121 6.11865C6.75081 6.12461 4.7447 8.13986 4.75001 10.6203L6.25001 10.617C6.24647 8.96492 7.58269 7.62262 9.23481 7.61865L9.23121 6.11865ZM4.75001 10.6187V16.2437H6.25001V10.6187H4.75001ZM4.75001 16.242C4.7447 18.7224 6.75081 20.7377 9.23121 20.7437L9.23481 19.2437C7.58269 19.2397 6.24647 17.8974 6.25001 16.2453L4.75001 16.242ZM9.23301 20.7437H14.833V19.2437H9.23301V20.7437ZM14.8348 20.7437C17.3152 20.7377 19.3213 18.7224 19.316 16.242L17.816 16.2453C17.8195 17.8974 16.4833 19.2397 14.8312 19.2437L14.8348 20.7437ZM19.316 16.2437V12.4937H17.816V16.2437H19.316ZM14.4998 7.25684C14.6947 7.72897 15.0923 8.39815 15.6866 8.91521C16.2944 9.44412 17.1679 9.85718 18.2319 9.62197L17.9081 8.15733C17.4431 8.26012 17.0391 8.10369 16.6712 7.7836C16.2897 7.45165 16.0134 6.99233 15.8863 6.68446L14.4998 7.25684ZM8.30001 17.9317H15.767V16.4317H8.30001V17.9317Z" fill="#000000"/> </g></svg></span>
                  ';} echo' <a href="descriptionModifier.php?id='.$i.'" class="voire" style="--clr:rgb(2, 2, 198);"><span>Voir plus</span><i></i></a>
                   </div>
             </div>';}}
             else {
               echo '<br><br><br><br><br><br>  <center><img src="../Absence/gif.gif" width="340" height="300"  alt="Texte alternatif"></center>';
           }
       ?>
           </div>
     
           <div class="popupBackground">
         <div class="popup">
             <h1>Justifier l'Absence</h1>
             <form id="form2" >
     
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
      
      <script src="https://unpkg.com/popper.js@1"></script>
      <script src="https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js"></script>
      <script>
         tippy('.d1s', {
    content:'<strong class="f" style="font-size: 1.5em;">Telecharger l\'image </strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato',
    arrow: true,
    delay: [650,200]
});
tippy('.n', {
    content:'<strong class="f" style="font-size: 1.5em;">Modifier les justificatif</strong>',
    animation:'tada',
    inertia: true,
    flip: true,
    theme: 'tomato1',
    arrow: true,
    delay: [650,200]
});
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
<script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>

<script async>
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


<script>
  localStorage.setItem("get_id", undefined);
const items = document.querySelectorAll('.item');
const pop = document.querySelector('.popupBackground')

for (const item of items) {
const modifiers = item.querySelectorAll('.lien-Mod1');

for (const modifier of modifiers) {
 // Do something with the modifier
 modifier.addEventListener('click',()=>{
   const form = pop.querySelector('#form2');
   const item = modifier.closest('.item-content')
   const no = item.querySelector('.no1 input').value;
   const type1 = item.querySelector('.type1').innerHTML;
   const selectType = form.querySelector('.type1');
   const optionType = selectType.querySelector(`option[value="${type1}"]`);
   console.log(optionType)
   optionType.selected = true;
   
   const datedeb1 = item.querySelector('.date').innerHTML;
   
   localStorage.setItem("get_id", no);
   console.log(localStorage.getItem("get_id"))
   const inputNo = form.querySelector('.gg1');
   const nn1 = form.querySelector('.nn1');
   inputNo.value = datedeb1;
 
   
 })
}
}
</script>
<script>
 
function afficherPopup() {
 let popupBackground = document.querySelector(".popupBackground")
 popupBackground.classList.add("active")
}


function cacherPopup() {
 let popupBackground = document.querySelector(".popupBackground")
 popupBackground.classList.remove("active")
}



function initAddEventListenerPopup() {
 
 let btnjus = document.querySelectorAll('.lien-Mod1')
 btnPartage = document.querySelector(".lien-Ajout")
 const popupBackground = document.querySelector('.popupBackground')
 

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
</body>
</html>