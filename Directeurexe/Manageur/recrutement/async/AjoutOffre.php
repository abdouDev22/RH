<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$success = 0;
$msg = "";
$data = [];

$id_employe = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

$offre = $_POST["titre"];
$description = $_POST["Des"];
$dateA = $_POST["DateA"];
$dateB = $_POST["DateB"];

if ($dateA > $dateB) {
    $msg='Veuillez corriger les dates';
} else {
    // Vérifier si une offre similaire existe déjà
    $checkQuery = mysqli_query($sum, "SELECT * FROM offres WHERE titre_offre = '$offre'");
    if (mysqli_num_rows($checkQuery) > 0) {
        // Une offre similaire existe déjà
        $msg = "Cette offre existe déjà.";
    } else {
        // Aucune offre similaire trouvée, procéder à l'insertion
        $insertQuery = mysqli_query($sum, "INSERT INTO offres (titre_offre, description, date_publication, date_limite) 
                                           VALUES ('$offre', '$description', '$dateA', '$dateB')");
        if (!$insertQuery) {
            $msg = "Erreur lors de l'insertion de l'offre.";
        } else {
            $success = 1;
            $msg = "Offre bien insérée.";
        }
    }
}

$res = [
    "success" => $success,
    "msg" => $msg
];

echo json_encode($res);
?>
