
<?php
  
  // Récupérez les informations de l'utilisateur depuis la base de données en utilisant les variables de session
  $serveur = "localhost";
  $utilisateur = "root";
  $motdepasse = "";
  $base = "rh";
  $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
  
  $id=$_GET["id"];
  
  $resul = mysqli_query($connexion, "UPDATE absences set T_manager='Refusé' WHERE id_absences ='$id' ");

  if ($resul==0) {
    
    echo "<script>alert('Une erreur s'est produite lors de la Refus'); window.history.back();</script>";
      
  }
  else {
  
    echo "<script>alert('la demande a ete refuser'); window.history.back();</script>";
      
  }