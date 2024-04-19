<?php
session_start();

if (!isset($_SESSION['id']) || !isset($_SESSION['nom'])) {
    header("location:../index.html");
    exit;
}

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$id=$_POST["id"];
$id_can = $_SESSION['id_candidats'];
$id_off = $id;

$resul = mysqli_query($connexion, "SELECT * FROM offres,postuler,candidats WHERE 
    offres.id_offres=postuler.id_offre AND
    candidats.id_candidats=postuler.id_candidats ");

$alreadyApplied = false;

while ($l = mysqli_fetch_assoc($resul)) {
    $ss = $l['nom'];
    $sss = $l['id_candidats'];
    $a = $l['id_offres'];

    if ($id_can == $sss && $id_off == $a) {
        $alreadyApplied = true;
        echo "<script>alert('Vous avez déjà postulé à cette offre'); window.history.back();</script>";
        break;
    }
}

// ... (votre code précédent)

if (empty($_FILES["cv"]["tmp_name"]) || empty($_FILES["let"]["tmp_name"])) {
    // ... (votre code précédent)
} else {
    if (!$alreadyApplied) {
        $let = file_get_contents($_FILES["let"]["tmp_name"]);
        $cv = file_get_contents($_FILES["cv"]["tmp_name"]);

        $target_dir = "C:/xampp/htdocs/RH/RH/document/";  // Utilisation du chemin absolu
        $cv_target_file = basename($_FILES["cv"]["name"]);
        $let_target_file = basename($_FILES["let"]["name"]);

        $uploadOk = 1;
        $pdfFileType = strtolower(pathinfo($cv_target_file, PATHINFO_EXTENSION));
        $pdfFileType = strtolower(pathinfo($let_target_file, PATHINFO_EXTENSION));

        // Vérifier la taille du fichier
        if ($_FILES["cv"]["size"] > 500000) {
            echo "<script>alert('Désolé, votre fichier CV est trop volumineux.'); window.history.back();</script>";
            $uploadOk = 0;
        }
        if ($_FILES["let"]["size"] > 500000) {
            echo "<script>alert('Désolé, votre fichier lettre est trop volumineux.'); window.history.back();</script>";
            $uploadOk = 0;
        }
        
        // Vérifier si $uploadOk est défini à 0 par une erreur
        if ($uploadOk == 0) {
            echo "<script>alert('Désolé, votre fichier n'a pas été téléchargé'); window.history.back();</script>";
        } else {
            if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_dir . $cv_target_file) && move_uploaded_file($_FILES["let"]["tmp_name"], $target_dir . $let_target_file) ) {
                // Fichier téléchargé avec succès

                // Utilisation de requêtes préparées pour éviter les injections SQL
                $stmt = $connexion->prepare("INSERT INTO postuler (id_candidats, id_offre, cv, lettre, chemin_cv, chemin_lettre) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("iissss", $id_can, $id_off, $cv, $let, $cv_target_file, $let_target_file);
                $resultats = $stmt->execute();

                if ($resultats === false) {
                    echo "<script>alert('Vous avez déjà postulé à cette offre'); window.history.back();</script>";
                } else {
                    echo "<script>alert('Félicitations, vous avez postulé avec succès'); window.history.back();</script>";
                }

                $stmt->close();
            } else {
                echo "<script>alert('Une erreur s'est produite lors du téléchargement du fichier CV'); window.history.back();</script>";
            }
        }
    }
}
?>
