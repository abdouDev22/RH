<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id_directeur']) && isset($_SESSION['id_utilisateur'])) {
    $id_employe = $_SESSION['id_directeur'];
    $util = $_SESSION['id_utilisateur'];
} else {
    echo "<script>alert('Erreur de session'); window.history.back();</script>";
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// Filtrer et valider les données du formulaire
$ancien = mysqli_real_escape_string($sum, $_POST["ancien"]);
$pass = mysqli_real_escape_string($sum, $_POST["pass"]);

$con = mysqli_real_escape_string($sum, $_POST["con"]);

$verif= mysqli_query($sum," SELECT* FROM utilisateurs WHERE id_utilisateurs='$util'");

$l=mysqli_fetch_assoc($verif);
$a=$l["mot_de_passe"];

if ($ancien==$a && $con==$pass) {

$resultat = mysqli_query($sum, "UPDATE utilisateurs SET mot_de_passe='$con' WHERE id_utilisateurs='$util'");

}
else{
    echo"<script>alert('l ancien ou le confirmation ne correspond pas : " . mysqli_error($sum) . "'); window.history.back();</script>";

}


if ($resultat) {
    echo "<script>alert('Votre information a été mise à jour'); window.history.back();</script>";
}

// Fermez la connexion à la base de données
mysqli_close($sum);
?>
