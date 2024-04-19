<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id_directeur'])) {
    $id_employe = $_SESSION['id_directeur'];
    
} else {
  header("location:../connexion.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../asset/profiles.css">
  <link rel="stylesheet" href="../asset/styles.css">
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


<?php
    
        $serveur = "Localhost";
        $utilisateur = "root";
        $motdepasse = "";
        $base = "rh";
    
        $sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);
    
        $resultat = mysqli_query($sum, "SELECT * FROM employes WHERE id_employe ='$id_employe'");
        while ($ligne = mysqli_fetch_row($resultat)) {
            $nom = $ligne[1];
            $prenom = $ligne[2];
            $date_de_naissance = $ligne[3];
            $adresse = $ligne[4];
            $telephone = $ligne[5];
            $email = $ligne[6];
            $date_embauche = $ligne[7];
            $departement = $ligne[8];
            $poste = $ligne[9];
        }
    
        echo'
        
    <form action="../php/profil_modify.php" method="POST" class="form">
      <span class="item1">Nom :</span>
      <span class="item1S"><input type="text" name="nom" value= '.$nom.'></span>
      <span class="item2">Prenom :</span>
      <span class="item2S"><input type="text" name="prenom" value='.$prenom.'></span>
      <span class="item3">Telephone :</span>
      <span class="itme3S"><input type="number" name="telephone" value="'.$telephone.'"></span>
      <span class="item4">Date de Naissance</span>
      <span class="item4S"><input type="date" name="date_de_naissance" value="'.$date_de_naissance.'"></span>
      <span class="item5">Email</span>
      <span class="item5S"><input type="email" name="email" value="'.$email.'"></span>
      <span class="item8">Addresse</span>
      <span class="item8S"><input type="text" name="adresse" value="'.$adresse.'"></span>
      <span class="item6">Departement</span>
      <span class="item6S"><input type="text" name="departement" value="'. $departement.'"></span>
      <span class="item7">Poste</span>
      <span class="item7S"><input type="text" name="poste" value="'.$poste.'"></span>
      <span class=" lien-conn"><a href="../php/utilisateur.php">Info-Connexion</a></span>
      <span class="lien-Modifier"><input type="submit" name="mod" value="Modifier"></a></span> ';?>
    </form>
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
</body>
</html>