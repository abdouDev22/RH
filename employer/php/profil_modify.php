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

$nom = mysqli_real_escape_string($sum, $_POST["nom"]);
$prenom = mysqli_real_escape_string($sum, $_POST["prenom"]);
$date_de_naissance = mysqli_real_escape_string($sum, $_POST["date_de_naissance"]);
$adresse = mysqli_real_escape_string($sum, $_POST["adresse"]);
$telephone = mysqli_real_escape_string($sum, $_POST["telephone"]);
$email = mysqli_real_escape_string($sum, $_POST["email"]);
$departement = mysqli_real_escape_string($sum, $_POST["departement"]);
$poste = mysqli_real_escape_string($sum, $_POST["poste"]);

$resultat = mysqli_query($sum, "UPDATE employes SET
    nom='$nom',
    prenom='$prenom',
    date_de_naissance='$date_de_naissance',
    adresse='$adresse',
    telephone='$telephone',
    email='$email',
    departement='$departement',
    poste='$poste'
    WHERE id_employe='$id_employe'");

if (!$resultat) {
    // Gestion des erreurs
    echo "<script>alert('Erreur de mise à jour'); window.history.back();</script>";
} else {
    echo "<script>alert('Votre information a été mise à jour'); window.history.back();</script>";
}

// Fermez la connexion à la base de données
mysqli_close($sum);
?>
