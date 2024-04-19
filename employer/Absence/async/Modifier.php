<?php
session_start();

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$success = 0;
$msg = "Modification terminée";
$data = [];
$id_absence = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

// Check if an absence ID is provided
if ($id_absence !== null) {
    $statut = "justifié";

    // Create an array to store missing fields
    $champsManquants = [];

    if (empty($_POST['con'])) {
        $champsManquants[] = "Commentaire";
    }

    if (empty($_POST['type1'])) {
        $champsManquants[] = "Type";
    }

    // Check if a file is uploaded
    if (!empty($_FILES['imageFile']['name'])) {
        $motif = $_POST['con'];
        $type = $_POST["type1"];

        // Convert type to an integer if needed
        if ($type == 'Malade') {
            $type = 1;
        } elseif ($type == 'Cas personnel') {
            $type = 2;
        } elseif ($type == 'Mariage') {
            $type = 3;
        }

        // Répertoire où vous souhaitez stocker les fichiers téléchargés
        $targetDir = "C:/xampp/htdocs/RH/RH/document/";
        $uploadedFileName = $_FILES['imageFile']['name']; // Nom du fichier téléchargé
        $uploadedFileTemp = $_FILES['imageFile']['tmp_name']; // Emplacement temporaire du fichier téléchargé

        // Générez un nom de fichier unique pour éviter les écrasements
        $uniqueFileName = uniqid() . '_' . $uploadedFileName; // Ajout d'un identifiant unique au nom du fichier pour éviter les écrasements
        $abou = $uniqueFileName; // Chemin du fichier pour la base de données

        // Déplacez le fichier téléchargé vers le répertoire d'uploads
        // Déplacez le fichier téléchargé vers le répertoire d'uploads
if (move_uploaded_file($uploadedFileTemp, $targetDir . $uniqueFileName)) {
    // Utilisez une instruction préparée pour éviter les injections SQL
    $query = "UPDATE justificatifs SET Description_Justificatif=?, Statut_Justificatif=?, Chemin_Fichier=? WHERE id_absences=?";
    $stmt = mysqli_prepare($sum, $query);

    // Liez les paramètres et exécutez la requête
    mysqli_stmt_bind_param($stmt, 'sssi', $motif, $statut, $uniqueFileName, $id_absence);
    $result = mysqli_stmt_execute($stmt);

    // Vérifiez le résultat de la mise à jour
    if ($result === false) {
        $msg = "Une erreur est survenue lors de la mise à jour du justificatif.";
    } else {
                // Mise à jour du type d'absence
                $query = "UPDATE absences SET id_type_absences=? WHERE id_absences=?";
                $stmt = mysqli_prepare($sum, $query);

                // Liez les paramètres et exécutez la requête
                mysqli_stmt_bind_param($stmt, 'si', $type, $id_absence);
                $result = mysqli_stmt_execute($stmt);

                // Vérifiez le résultat de la mise à jour
                if ($result === false) {
                    $msg = "Erreur lors de la mise à jour du type d'absence.";
                } else {
                    // Mise à jour réussie
                    $success = 1;
                }
            }
        } else {
            $msg = "Erreur lors du téléchargement de l'image.";
        }
    } else {
        $msg = "Veuillez sélectionner une image.";
    }
} else {
    $msg = "ID d'absence non fourni.";
}

$res = [
    "success" => $success,
    "msg" => $msg,
    "id" => [
        $id_absence
    ]
];

echo json_encode($res);
?>
