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
    <a href="../Demande_conge/index.php">
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
        <a href="../Demande_conge/index.php">
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
        <a href="../Absence/index.php">
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
    $id=$_GET['id_demande'];
       $connect=mysqli_connect("localhost","root","","rh");
       $resultat = mysqli_query($connect, "SELECT DISTINCT* FROM demande_congé 
           JOIN type_conge ON type_conge.id_type_conge = demande_congé.id_type_conge 
           WHERE id_congé = '$id'");
       
       while($ligne=mysqli_fetch_assoc($resultat)){
       
       $a=$ligne["type_conge"];
       $x=$ligne["id_type_conge"];
       
       $b=$ligne["date_début"];
       
       $c=$ligne["date_fin"];
       
       $d=$ligne["statut"];
       $e=$ligne["motif"];
       
       $f=$ligne["id_congé"];
       $j=$ligne["DateCreation"];
       echo '
       <form action="../php/des_modify.php" method="POST">
         <div class="des">';
       if ($d == 'En-attente') {
         echo '<span class="lien-Mod1"><input type="submit" value="Modifier"></span>';
       }
       echo '
         <a href="../Demande_conge/index.php" class="retourne"><b>retour</b><i></i></a>
         <h1 class="titre">Demande de congé</h1>
         <span class="no">No :</span><span class="no1"><input type="number" value="'.$f.'" readonly></span>
         <span class="datcre">Date de création</span><span class="datcre1"><input type="date" value="'.$j.'" readonly></span>
         <span class="sta">Statut</span><span class="sta1"><input type="text" name="statut" value="'.$d.'" readonly></span>
         <span class="datb">Date de Début</span> <span class="datb1"><input type="date" name="date_d" value="'.$b.'" readonly></span>
         <span class="datl">Date de limite</span><span class="datl1"><input type="date" name="date_f" value="'.$c.'" readonly></span>
         <span class="descrip">Commentaire</span>';
       if ($d == 'En-attente') {
         // Champ caché pour l'ID de la demande de congé
         echo '<input type="hidden" name="demande_id" value="'.$f.'">';
         echo '<span class="lien-Mod"><input type="submit" name="motif" value="Modifier"></span>';
       
}
else {
}
echo'<div class="descrip1"><textarea name="motif" id="" cols="30" rows="10"  > '.$e.'</textarea></div>
     
    <span class="type">Type de congé</span><select class="type1" name="type1" id="">';
      
        echo '<option value="'.$x.'"> '.$a.'</option>';
        echo '<option value="1">malade</option>';
      
        echo '<option value="3"> probleme</option>';
      
        echo '<option value="2"> Deuil</option>';
      
      }
      
          
          
          echo'
      </select> 
  </div></form>';
  ?>
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