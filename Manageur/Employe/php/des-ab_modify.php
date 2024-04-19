<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id'])) {
    $id_employe = $_SESSION['id'];
    
} else {
    echo "<script>alert('Erreur de session'); window.history.back();</script>";
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$b=$_POST["type1"];
$c=$_POST["demande_id"];

$resultat = mysqli_query($sum, "UPDATE absences  SET id_type_absences='$b' where id_employe ='$id_employe ' and id_absences='$c' ");
if (!$resultat) {
    // Gestion des erreurs
    echo "<script>alert('Erreur de mise à jour : " . mysqli_error($sum) . "'); window.history.back();</script>";
} else {
    echo "<script>alert('Votre information a été mise à jour'); window.history.back();</script>";
}

// Fermez la connexion à la base de données
mysqli_close($sum);
?>
