<?php



$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "TP6";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

/* Recuperation des donnees par le Supprimer.html */

$id = $_GET["id"];

/* Creation de la requête */

$r=mysqli_query($sum, "DELETE FROM exercice WHERE id='$id'");

if($r==0){
    echo "le numero $id a ete bien suprimme ";;
}
else{

    header('location: ajoute_exercice.php');

}
?>