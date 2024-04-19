<?php
session_start();
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$success = 0;
$msg = "Modification terminée";
$id_employe = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;
$type = isset($_POST["NEW"]) ? $_POST["NEW"] : null;

if ($type == 'Recrutement et Acquisition de Talents') {
    $types = 1;
} elseif ($type == 'Formation et Développement') {
    $types = 2;
} elseif ($type == 'Gestion des Performances') {
    $types = 3;
} elseif ($type == 'Santé et Sécurité au Travail') {
    $types = 4;
} elseif ($type == 'Développement Organisationnel') {
    $types = 5;
}

// Vérifier si l'employé a déjà une affectation
$res = mysqli_query($sum, "SELECT id_affectation FROM affectation WHERE id_employe = '$id_employe'");
if (mysqli_num_rows($res) > 0) {
    // Si une affectation existe déjà, mettez à jour le champ nouveau_departement
    $reqs = mysqli_query($sum, "UPDATE affectation SET id_type_affectation='$types',
    nouveau_departement = '$type', date_affectation = CURRENT_DATE WHERE id_employe = '$id_employe'");
    
    if ($reqs) {
        $msg = "Vous avez bien modifié.";
        $success = 1;
    } else {
        $msg = "Erreur lors de la modification : " . mysqli_error($sum);
        $success = 0;
    }
} else {
    // S'il n'y a pas d'affectation existante, insérer une nouvelle affectation
    $req = mysqli_query($sum, "INSERT INTO affectation (id_employe, id_type_affectation, ancien_departement, nouveau_departement, date_affectation)
    VALUES ('$id_employe', '$types', '$type', '$type', CURRENT_DATE)");
    
    if ($req) {
        // Mettre à jour le département de l'employé dans la table employe
        $update_departement = mysqli_query($sum, "UPDATE employes SET departement ='$type' WHERE id_employe ='$id_employe'");
        
        if ($update_departement) {
            $msg = "Vous avez bien modifié.";
            $success = 1;
        } else {
            $msg = "Erreur lors de la mise à jour du département de l'employé : " . mysqli_error($sum);
            $success = 0;
        }
    }
}

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $id_employe,
    "id_affectation" => $id_affectation
];

echo json_encode($res);
?>
