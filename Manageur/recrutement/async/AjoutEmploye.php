<?php
session_start();
if (isset($_SESSION['ids'])) {
    $id_manageur = $_SESSION['ids'];
    
} else {
    
  header("location:../index.html");
  exit;
}
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

$success = 0;
$msg = "insertion terminée";
$data = [];
$id_candidat = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

$post = $_POST["post"];
$depart = $_POST["depart"];



$resul = mysqli_query($sum, "SELECT * FROM candidats WHERE id_candidats='$id_candidat'");
$l = mysqli_fetch_assoc($resul);

$a=$l['id_candidats'];
$b=$l['nom'];
$c=$l['prenom'];
$d=$l['date_de_naissance'];
$e=$l['adresse'];
$f=$l['telephone'];
$g=$l['email'];
$x=$l['id_utilisateur'];


$req = mysqli_query($sum, "INSERT INTO employes (nom, prenom,
 date_de_naissance, adresse, telephone, email, departement,
poste, id_utilisateur) 
VALUES ('$b','$c','$d','$e','$f','$g','$depart','$post','$x')");

if (!$req) {
    $msg = "Erreur lors de l'insertion de la employer : " . mysqli_error($sum);
    
}

     else {

        $del = mysqli_query($sum, "DELETE FROM candidats WHERE id_candidats='$id_candidat'");

    }

    if ($del) {

        $util = mysqli_query($sum, "UPDATE utilisateurs SET
        id_role='2' WHERE id_utilisateurs='$x' ");

    }

    if ($util==0) {
        $msg = "Erreur lors de l'insertion de la employer : " . mysqli_error($sum);
    $success = 0;
    }
    else {
        echo " <script>alert(Felicitation vous aves bien ajoute l employe )</script> "; 
        $success = 1;
    }

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $type
];

echo json_encode($res);
?>
