  
<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id']) && isset($_SESSION['nom'])) {
    $login = $_SESSION['id'];
    $nom = $_SESSION['nom'];
} else {
    
  header("location:../connexion.html");
  exit;
}?>
<?php
  
  // Récupérez les informations de l'utilisateur depuis la base de données en utilisant les variables de session
  $serveur = "localhost";
  $utilisateur = "root";
  $motdepasse = "";
  $base = "rh";
  $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
  
  $resul = mysqli_query($connexion, "SELECT * FROM utilisateurs,candidats WHERE utilisateurs.id_utilisateurs= 
  candidats.id_utilisateur  and id_candidats='$login' ");
  $l = mysqli_fetch_assoc($resul);

  $a=$l['id_candidats'];
  $b=$l['nom'];
  
  $c=$l['prenom'];
  $_SESSION['prenom']=$c;
  $_SESSION['id_candidats'] = $a;
  $_SESSION['nom'] = $b;
  ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RH</title>
    <script type="module" crossorigin src="assets/index-cd88e9e2.js"></script>
    <link rel="stylesheet" href="assets/styled3.css">
    <script src="java.js"></script>
    
  </head>
  <body>
  <form action="post_insert.php" method="POST" enctype="multipart/form-data">
    <nav id='nav'>
      
    <div class="action">
      <div class="profile" onclick="menuToggle();">
        <img src="img/c.png">
      </div>
      <div class="menu">
      <h3>RH<br /><span>candidat</span></h3>
      <img src="./assets/icons/user.png" width="30px" height="30px" ><a class="a" href="profile.php" > Profile</a><br>
        <img src="./assets/icons/log-out.png" width="30px" height="30px" > <a class="a" href="../php/logout.php" >Déconnection</a></div>
      </div>
    </div>
    <script>
      function menuToggle() {
        const toggleMenu = document.querySelector(".menu");
        toggleMenu.classList.toggle("active");}


        document.addEventListener("DOMContentLoaded", function() {
  // Vérifier si le mode sombre est activé dans le stockage du navigateur
  var isDarkMode = localStorage.getItem("darkMode") === "enabled";
  
  // Appliquer la classe CSS "dark-mode" si le mode sombre est activé
  if (isDarkMode) {
    document.body.classList.add("dark-mode");
  }
});

    </script>
      <div class="logo">
        <strong><a href="profile.php">R.H</strong>
        <span>Company<a></span>
      </div>

      
<div class="dark">
    <input type="checkbox" id="darkmode-togle" onclick="toggleDarkMode()">
    <label for="darkmode-togle">
      
      <svg class="moon" fill="#000" height="80px" width="800px" version="1.1" id="Capa_1"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 383.852 383.852"
        xml:space="preserve">
        <g>
          <g>
            <path d="M382.667,248.54c-2.528-6.168-8.48-9.896-14.776-9.904c-0.032,0-0.064-0.008-0.096-0.008c-0.104,0-0.192,0.04-0.296,0.048
			c-1.232,0.032-2.464,0.232-3.688,0.56c-0.456,0.12-0.888,0.24-1.328,0.392c-0.224,0.08-0.456,0.112-0.688,0.2
			c-20.072,8.248-41.392,12.432-63.384,12.432c-91.976,0-166.808-74.832-166.808-166.808c0-21.992,4.176-43.312,12.432-63.384
			c0.12-0.28,0.16-0.576,0.256-0.864c0.12-0.352,0.224-0.704,0.32-1.072c0.36-1.32,0.584-2.648,0.6-3.976
			c0-0.056,0.024-0.112,0.024-0.176c0-0.016-0.008-0.04-0.008-0.056c0-0.96-0.112-1.904-0.288-2.832c-0.04-0.2-0.072-0.4-0.112-0.6
			c-0.208-0.92-0.472-1.832-0.84-2.696c-0.144-0.336-0.344-0.624-0.504-0.944c-1.672-3.336-4.44-6.144-8.168-7.672
			c-4.36-1.784-9.024-1.464-12.96,0.416c-0.04,0.016-0.088,0.024-0.128,0.048c-23.912,9.832-45.496,24.264-64.152,42.92
			c-77.432,77.528-77.432,203.672,0.008,281.216c38.768,38.72,89.68,58.072,140.6,58.072s101.84-19.36,140.616-58.08
			c18.592-18.6,33-40.112,42.832-63.944c0.048-0.088,0.064-0.192,0.104-0.288c0.456-0.952,0.824-1.944,1.088-2.976
			c0.016-0.08,0.048-0.152,0.072-0.232C384.155,255.18,383.995,251.772,382.667,248.54z M316.691,303.148
			c-65.064,64.968-170.92,64.968-235.968,0c-64.976-65.056-64.976-170.912-0.008-235.96c6.944-6.944,14.448-13.064,22.312-18.576
			c-2.256,12.064-3.424,24.36-3.424,36.848c0,109.624,89.184,198.808,198.808,198.808c12.48,0,24.784-1.168,36.848-3.424
			C329.739,288.7,323.635,296.204,316.691,303.148z" />
          </g>
        </g>
      </svg>
      <svg class="sun" fill="#000000" height="80px" width="800px" version="1.1" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 512 512">
        <g>
          <g>
            <path
              d="m256,105.5c-83.9,0-152.2,68.3-152.2,152.2 0,83.9 68.3,152.2 152.2,152.2 83.9,0 152.2-68.3 152.2-152.2 0-84-68.3-152.2-152.2-152.2zm0,263.5c-61.4,0-111.4-50-111.4-111.4 0-61.4 50-111.4 111.4-111.4 61.4,0 111.4,50 111.4,111.4 0,61.4-50,111.4-111.4,111.4z" />
            <path
              d="m256,74.8c11.3,0 20.4-9.1 20.4-20.4v-23c0-11.3-9.1-20.4-20.4-20.4-11.3,0-20.4,9.1-20.4,20.4v23c2.84217e-14,11.3 9.1,20.4 20.4,20.4z" />
            <path
              d="m256,437.2c-11.3,0-20.4,9.1-20.4,20.4v22.9c0,11.3 9.1,20.4 20.4,20.4 11.3,0 20.4-9.1 20.4-20.4v-22.9c0-11.2-9.1-20.4-20.4-20.4z" />
            <path
              d="m480.6,235.6h-23c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.1,20.4 20.4,20.4h23c11.3,0 20.4-9.1 20.4-20.4 0-11.3-9.1-20.4-20.4-20.4z" />
            <path
              d="m54.4,235.6h-23c-11.3,0-20.4,9.1-20.4,20.4 0,11.3 9.1,20.4 20.4,20.4h22.9c11.3,0 20.4-9.1 20.4-20.4 0.1-11.3-9.1-20.4-20.3-20.4z" />
            <path
              d="M400.4,82.8L384.1,99c-8,8-8,20.9,0,28.9s20.9,8,28.9,0l16.2-16.2c8-8,8-20.9,0-28.9S408.3,74.8,400.4,82.8z" />
            <path
              d="m99,384.1l-16.2,16.2c-8,8-8,20.9 0,28.9 8,8 20.9,8 28.9,0l16.2-16.2c8-8 8-20.9 0-28.9s-20.9-7.9-28.9,0z" />
            <path
              d="m413,384.1c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l16.2,16.2c8,8 20.9,8 28.9,0 8-8 8-20.9 0-28.9l-16.2-16.2z" />
            <path
              d="m99,127.9c8,8 20.9,8 28.9,0 8-8 8-20.9 0-28.9l-16.2-16.2c-8-8-20.9-8-28.9,0-8,8-8,20.9 0,28.9l16.2,16.2z" />
          </g>
        </g>
      </svg>
    </label>


  </div>



    </nav>

    <div id="toggle" class="toggle-button">
  <div class="toggle-line"></div>
  <div class="toggle-line"></div>
</div>
    <div id="sidebar"><?php
    echo"
    
    <div class='im'> <img src='img/c.png' alt='' width='100' height='100'><br><br>",$_SESSION['nom'] . " " . $_SESSION['prenom'] ;?><br><br>Candidat</div>
       <ul><br><br><br><br>
        <li><img src='img/profile.png' width="35px" height="35px"  ><a class="a" href="profile.php" >profile </a></li>
        <li><img src='img/email.png' width="35px" height="35px"><a class="a"  href="offre.php">offre</a></li><br>
      <li><img src='img/email.png' width="35px" height="35px"><a class="a"  href="postulation.php">consulter sont postulation</a></li><br>

        
       </ul>
    </div>

 
 
  

    
    <script>
   const toggle = document.querySelector('.toggle-button');
const sidebar = document.getElementById('sidebar');

toggle.addEventListener('click', (e) => {
  if (toggle.classList.contains('active')) {
    sidebar.classList.remove('active');
  } else {
    sidebar.classList.add('active');
  }

  toggle.classList.toggle('active');
});

    </script>
<?php

    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $base = "rh";
    $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
    
    $resul = mysqli_query($connexion, "SELECT * FROM offres,postuler,candidats where 
    offres.id_offres=postuler.id_offre and
    candidats.id_candidats=postuler.id_candidats ");
    
    while($l=mysqli_fetch_assoc($resul)){
      
      $ss=$l['nom'];
      $sss=$l['id_candidats'];
    $a=$l['id_offres'];
    $b=$l['titre_offre'];
    $c=$l['description'];
    $d=$l['date_publication'];
    $e=$l['date_limite'];
    
  
    }
    $ids = $_GET["ids"];
    
    $id = $_GET["id"];
      
    echo  '

    <input type="hidden" name="id" value="'.$id.'">
    
    <a href="description.php?id=',$id,' &titre=',$ids,' "  class="retourne"><b>retour</b><i></i></a>

      <html><head>
      </head>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <body><post>
            <div class="poste">
              <div class="titles">Postuler</div>
              <div class="poste-content">
              
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="poste-detail">
                   
                    
                    <div class="input-post">
                      <span class="details">candidats</span>';echo"
                      <input type='text' name='can'  value=' $_SESSION[nom]'>
                    </div>
    
                    <div class='input-post'>
                      <span class='details'>offre</span>
                      <input type='text' name='off'  value='$ids'>
                      
                    </div>
                    <div class='p'><p2>cv</p2>
                    <input type='file' name='cv' class='s' required>
                </div>
  
                <div class='p'><p1>lettre</p1>
                <input type='file' name='let' class='t' required>
            </div>
                  
                    
                  
                    <div class='input-eng'>
                  <input type='submit' name='enregistre' value='Enregistre'>
                </div>
                    </div>
        
                    
                
              </div>
            
            
          
    
          
      ";?>
    
    </nav>
  </poste>
</form>
</body>
</html>
    
  