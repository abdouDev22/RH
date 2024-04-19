<?php
session_start();
if (isset($_SESSION['ids'])) {
    $id_manageur = $_SESSION['ids'];
} else {
    header("location: ../connexion.html");
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$success = 0;
$msg = "Modification terminée";
$data = [];
$id_employe = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

$type = $_POST["type1"];

// Convert type to an integer if needed
if ($type == 'Malade') {
    $type = 1;
} elseif ($type == 'Cas personnel') {
    $type = 2;
} elseif ($type == 'Mariage') {
    $type = 3;
}

$description = mysqli_real_escape_string($sum, $_POST["Des"]);
$dateA = $_POST["DateA"];
$dateB = $_POST["DateB"];

if ($dateA > $dateB) {
    $msg = 'Veuillez corriger les dates';
} else {
    $req = mysqli_query($sum, "INSERT INTO absences (id_type_absences, date_debut, date_fin, dateCreation, id_employe, description, ID_Manager) 
        VALUES ('$type', '$dateA', '$dateB', '$dateA', '$id_employe', '$description', '$id_manageur')");

    if ($req) {
        $last_inserted_id = mysqli_insert_id($sum); // Récupérer l'ID de la dernière insertion
        $req1 = mysqli_query($sum, "INSERT INTO justificatifs (id_absences) VALUES ('$last_inserted_id')");

        if ($req1) {
            $msg = "Modification du mot de passe réussie.";
            $success = 1;
        } else {
            $msg = "Erreur lors de la modification du mot de passe.";
        }
    } else {
        $msg = "Erreur lors de l'insertion des absences.";
    }
}

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $type
];

echo json_encode($res);
?>
