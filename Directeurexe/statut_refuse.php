


<?php



$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

/* Recuperation des donnees par le Supprimer.html */

$id = $_GET["id"];

/* Creation de la requête */

$r=mysqli_query($sum, "UPDATE  demande_congé set statut='Refusé'  WHERE id_congé='$id'");

if($r==0){
    echo "<script>alert('Une erreur s'est produite lors de la Refus'); window.history.back();</script>";
}
else{

    echo "<script>alert(' la demande a ete Refuser'); window.history.back();</script>";

}
?>