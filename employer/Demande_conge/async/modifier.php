<?php session_start();
$id_employe = $_SESSION['id'];
?>

<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// echo json_encode($_POST);

define('​', 'success');

$success = 0;
$msg = "Modification terminer";
$data = [];

$id_conge="";
$id_conge = $_POST['local_storage_value'];
echo $id_conge;

if (!empty($_POST['datedeb']) AND !empty($_POST['datelim'])  AND !empty($_POST['type1'])) {
  $datedeb = mysqli_real_escape_string($sum, $_POST['datedeb']);
  $datelim = mysqli_real_escape_string($sum, $_POST['datelim']);
  $id_type_conge = mysqli_real_escape_string($sum, $_POST['type1']);
  if ($id_type_conge == 'Malade') {
    $id_type_conge = 1;
} elseif ($id_type_conge == 'Deuil') {
    $id_type_conge = 2;
} elseif ($id_type_conge == 'Probleme') {
    $id_type_conge = 3;
} else {
    // Handle other cases if needed
}

if ($datedeb>$datelim) {

  echo "<script>alert('Veuillez corriges les date');</script>";
  
  # code...
}else{


  $query = "UPDATE demande_congé SET id_employe='$id_employe',date_début='$datedeb', date_fin='$datelim', id_type_conge='$id_type_conge' WHERE  id_congé='$id_conge'";

  $result = mysqli_query($sum, $query);}
  if ($result === false) {
    $msg = "Une erreur est survenue lors de la mise a jour ";
  } else {
    $msg = " Felicitation vous avez bien  mise a jour ";
    $success = 1;
  }
} else {
  $msg = "Veuillez renseigner tous les champs";
}

$res = [
  "success" => $success,
  "msg" => $msg,
  "data"=>[
    'id_conge' => $id_conge // Inclure l'ID mis à jour
  ]
];

echo json_encode($res);​
?>