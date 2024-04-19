<?php
session_start();
if (isset($_SESSION['ids'])) {
    $id_manageur = $_SESSION['ids'];
    
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
if ($type =='Avertissement ou blâme') {
    $type = 1;
} elseif ($type =='Mise à pied') {
    $type = 2;
} elseif ($type =='Mutation') {
    $type = 3;
}
elseif ($type =='Rétrogradation') {
    $type = 4;
}
elseif ($type =='Licenciement') {
    $type = 5;
}

$description = $_POST["Des"];
$dateA = $_POST["DateA"];
$dateB = $_POST["DateB"];

if ($dateA>$dateB) {

    echo "<script>alert('Veuillez corriges les date');</script>";
    
    # code...
  }else{

$req = mysqli_query($sum, "INSERT INTO sanctions (id_type_sanctions , date_sanction, commentaire, id_employe , date_fin) 
    VALUES ('$type', '$dateA','$description','$id_employe','$dateB')");
  }
if (!$req) {
    $msg = "Erreur lors de l'insertion de la sanction : " . mysqli_error($sum);
    $success = 0;
}

     else {
        $msg = "sanction bien insere.";
        $success = 0;
    }

$res = [
    "success" => $success,
    "msg" => $msg,
    "id_employe" => $type
];

echo json_encode($res);
?>
