<?php
session_start();
if (isset($_SESSION['id_directeur'])) {
    $id_manageur = $_SESSION['id_directeur'];
    
} else {
    
  header("location:../connexion.html");
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
$id_employe = isset($_POST['local_storage_value']) ? $_POST['local_storage_value'] : null;

$type=$_POST["type1"];

// Convert type to an integer if needed
if ($type =='Promotion') {
    $type = 1;
} elseif ($type =='Assurances santé') {
    $type = 2;
} elseif ($type =='congés payés') {
    $type = 3;
}
elseif ($type =='Prime') {
    $type = 4;
}

$description = $_POST["Des"];
$dateA = $_POST["DateA"];
$dateB = $_POST["DateB"];

if ($dateA>$dateB) {

    echo "<script>alert('Veuillez corriges les date');</script>";
    
    # code...
  }else{

$req = mysqli_query($sum, "INSERT INTO avantages_sociaux
  (id_types_avantages  , date_debut, date_fin, commentaire , id_employe ) 
    VALUES ('$type', '$dateA','$dateB','$description','$id_employe')");
  }
if (!$req) {
    $msg = "Erreur lors de l'insertion de la sanction : " . mysqli_error($sum);
    $success = 0;
}

     else {
        $msg = "avantag social bien insere.";
        $success = 0;
    }

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $type
];

echo json_encode($res);
?>
