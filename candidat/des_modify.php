<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id']) && isset($_SESSION['nom'])) {
    $login = $_SESSION['id'];
    $nom = $_SESSION['nom'];
} else {
    header("location:./partieEmployes/");
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base);

if ($connexion->connect_error) {
    die("Connection failed: " . $connexion->connect_error);
}

if (empty($_FILES["cv"]["tmp_name"]) || empty($_FILES["let"]["tmp_name"])) {
    // CV ou lettre de motivation vide
    echo "<script>alert('Veuillez sélectionner un CV et une lettre de motivation'); window.history.back();</script>";
} else {
    $let = file_get_contents($_FILES["let"]["tmp_name"]);
    $cv = file_get_contents($_FILES["cv"]["tmp_name"]);

    $target_dir = "C:/xampp/htdocs/RH/RH/document/";  // Utilisation du chemin absolu
    $cv_target_file = basename($_FILES["cv"]["name"]);
    $let_target_file = basename($_FILES["let"]["name"]);

    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($cv_target_file, PATHINFO_EXTENSION));
    $pdfFileType = strtolower(pathinfo($let_target_file, PATHINFO_EXTENSION));
    // Vérifier la taille du fichier
    $maxFileSize = 800000; // Taille maximale du fichier (800 Ko)
    if ($_FILES["cv"]["size"] > $maxFileSize) {
        echo "<script>alert('Désolé, votre fichier CV est trop volumineux.'); window.history.back();</script>";
        $uploadOk = 0;
    }
    if ($_FILES["let"]["size"] > $maxFileSize) {
        echo "<script>alert('Désolé, votre fichier lettre est trop volumineux.'); window.history.back();</script>";
        $uploadOk = 0;
    }
    
    // Vérifier si $uploadOk est défini à 0 par une erreur
    if ($uploadOk == 0) {
        echo "<script>alert('Désolé, votre fichier n'a pas été téléchargé'); window.history.back();</script>";
    } else {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_dir . $cv_target_file) && move_uploaded_file($_FILES["let"]["tmp_name"], $target_dir . $let_target_file) ) {
            // Fichier téléchargé avec succès

            // Effectuer la modification dans la table "postuler"
            $id = $_POST["id"];
            $stmt = $connexion->prepare("UPDATE postuler SET cv=?, lettre=?, chemin_cv=?, chemin_lettre=? WHERE id_postuler=?");
            $stmt->bind_param("ssssi", $cv, $let, $cv_target_file, $let_target_file, $id); 

            if ($stmt->execute()) {
                echo "<script>alert('Félicitations, vous avez modifié avec succès');window.history.back();</script>";
            } else {
                echo "<script>alert('Une erreur s'est produite lors de la modification dans la base de données'); window.history.back();</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Une erreur s'est produite lors du téléchargement des fichiers'); window.history.back();</script>";
        }
    }
}

$connexion->close();
?>
