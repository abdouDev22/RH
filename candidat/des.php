
<?php
  
  // Récupérez les informations de l'utilisateur depuis la base de données en utilisant les variables de session
  $serveur = "localhost";
  $utilisateur = "root";
  $motdepasse = "";
  $base = "rh";
  $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
  
  $id=$_GET["id"];
  
  $resul = mysqli_query($connexion, "DELETE FROM postuler  WHERE id_postuler='$id' ");

  if ($resul==0) {
    
    echo "<script>alert('Une erreur s'est produite lors du suppresion'); window.history.back();</script>";
      
  }
  else {
  
    echo "<script>alert('vous avez bien Renoncer a cette post'); window.history.back();</script>";
      
  }