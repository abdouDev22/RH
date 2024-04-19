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
$id_employe = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

$newPassword=$_POST["password"];

$resultat = mysqli_query($sum, "SELECT * FROM employes
WHERE  id_employe='$id_employe' ");

while($ligne=mysqli_fetch_assoc($resultat)){
  $a=$ligne["id_utilisateur"];
}
$req=mysqli_query($sum," UPDATE utilisateurs set mot_de_passe='$newPassword' WHERE id_utilisateurs='$a' ");

if ($req) {
    # code...
   $msg = " Modification du mot de passe Reussit.";
}
else {
    # code...
    $msg = "Erreur lors du Modification du mot de passe.";
    $success=1;
}

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $id_employe
         
    ]
;

echo json_encode($res);
?>
