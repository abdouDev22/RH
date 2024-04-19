<?php


session_start();

$id =$_SESSION['dossier_conge'];
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

/* Recuperation des donnees par le Supprimer.html */



/* Creation de la requête */

$r=mysqli_query($sum, "UPDATE  demande_congé set statut= 'Validé' WHERE id_congé='$id'");

if($r==0){
    
    echo "<script>alert('Une erreur s'est produite lors de la validation'); window.history.back();</script>";
}
else{

    echo "<script>alert('Felicitation vous avez bien valide'); window.history.back();</script>";

}
?>