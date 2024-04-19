<?php
session_start();

    // Paramètres de connexion à la base de données
    $BD_serveur     = "localhost";
    $BD_utilisateur = "root";
    $BD_motDePasse  = "";
    $BD_base        = "etudiant";


       $sum = mysqli_connect($BD_serveur, $BD_utilisateur, $BD_motDePasse,$BD_base );
        
	$nomcompte    = $_POST["nom"];
	$motpass   = $_POST["password"];		  
			   
                       
  $query ="SELECT * FROM professeur WHERE nom_enseignant='$nomcompte' and Mdpasse_enseignant='$motpass'";
  
 $result = mysqli_query($sum,$query);

  $_SESSION['nom_enseignant'] = $nomcompte;
  

  if(mysqli_fetch_row($result) == 0){
  echo "<head><title>Connexion Enseignant</title>
  <link rel=stylesheet type=text/css href=Style.css>
  </head>
  <body>
  <div>
  <form class=box>
  <h1 class=title1>Votre nom ou mot de passe sont incorrectes</h1>
  <a href=Connexion_Enseignant.html><input class=btn type=button name=button value='Se connecter'></a>
  </form>
  </div>
  </body>";
}

else{
  header("Location: Menu_General_Enseignant.php");
  exit();
}

?>