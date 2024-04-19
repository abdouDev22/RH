<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id_directeur'])) {
    $id_employe = $_SESSION['id_directeur'];
    
} else {
    echo "<script>alert('Erreur de session'); window.history.back();</script>";
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$a=$_POST["motif"];
$b=$_POST["type1"];
$c=$_POST["demande_id"];


$resultat = mysqli_query($sum, "UPDATE demande_congé SET id_type_conge='$b', motif='$a' where id_employe ='$id_employe ' and id_congé ='$c' ");
if (!$resultat) {
    // Gestion des erreurs
    echo "<script>alert('Erreur de mise à jour : " . mysqli_error($sum) . "'); window.history.back();</script>";
} else {
    echo "<script>alert('Votre information a été mise à jour'); window.history.back();</script>";
}

// Fermez la connexion à la base de données
mysqli_close($sum);
?>
