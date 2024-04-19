<?php
session_start();

// Assurez-vous que les variables de session existent
if (isset($_SESSION['id']) && isset($_SESSION['nom'])) {
    $login = $_SESSION['id'];
    $nom = $_SESSION['nom'];
} else {
    
  header("location:./partieEmployes/");
  exit;
}?>
<?php
$serveur = "localhost";
 $utilisateur = "root";
 $motdepasse = "";
 $base = "rh";
 $connexion = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

 
$login = $_SESSION['id'];
$resul = mysqli_query($connexion, "SELECT * FROM utilisateurs,candidats WHERE utilisateurs.id_utilisateurs= 
candidats.id_utilisateur  and id_utilisateur='$login' ");
$l = mysqli_fetch_assoc($resul);


$a=$l['id_candidats'];
 

 $b=$_POST["nom"];
$c=$_POST["Prenom"];
$d=$_POST["date"];
$e=$_POST["addresse"];
$f=$_POST["telephonne"];
$g=$_POST["maile"];
$h=$_POST["poste"]; 
 

 $resul = mysqli_query($connexion, " UPDATE candidats SET nom='$b'
 ,prenom='$c',date_de_naissance='$d',adresse
 ='$e',telephone='$f', email='$g', poste='$h'
  WHERE id_candidats='$a'");
  
if ($resul == 0) {
    echo "<script>alert('Une erreur s'est produite lors du modification deu donnee');window.history.back();</script>";
} else {

    echo "<script>alert('Les donnees ont ete bien modifies');window.history.back();</script>";

}





?>


