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

define('SUCCESS', 'success'); // Correction ici

$success = 0;
$msg = "insertion terminer";
$data = [];

if (!empty($_POST['datedeb']) AND !empty($_POST['datelim']) AND !empty($_POST['motif']) AND !empty($_POST['type1'])) {
  $datedeb = mysqli_real_escape_string($sum, $_POST['datedeb']);
  $datelim = mysqli_real_escape_string($sum, $_POST['datelim']);
  $motif = mysqli_real_escape_string($sum, $_POST['motif']);
  $id_type_conge = mysqli_real_escape_string($sum, $_POST['type1']);

  if ($datedeb>$datelim) {

    echo "<script>alert('Veuillez corriges les date');</script>";
    
    # code...
  }else{

  $query = "INSERT INTO demande_congé (id_employe ,date_début, date_fin,id_type_conge ,motif) 
              VALUES ('$id_employe','$datedeb', '$datelim','$id_type_conge','$motif')";
  }
  $result = mysqli_query($sum, $query);
  if ($result === false) {
    $msg = "Une erreur est survenue lors de l'insertion du demande dans la base de données";
  } else {
    $success = 1;
  }
} else {
  $msg = "Veuillez renseigner tous les champs";
}

$res = [
  "success" => $success,
  "msg" => $msg,
  
];

echo json_encode($res); // Correction ici
?>
