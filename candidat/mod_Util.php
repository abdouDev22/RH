
  <?php
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $base = "rh";
    $connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

    $util = $_GET["id"];

    $login = $_SESSION['id'];
    $resul = mysqli_query($connexion, "SELECT * FROM utilisateurs ");
    $l = mysqli_fetch_assoc($resul);

    // Récupérer les valeurs saisies dans les champs
    $ancien = $_POST['ancien'];
    $nouveau = $_POST['nouveau'];
    $confirm = $_POST['confirme'];

    if ($nouveau == $confirm) {
        $resul = mysqli_query($connexion, "UPDATE utilisateurs SET mot_de_passe='$confirm' WHERE id_utilisateurs='$util'");
    }

    if ($resul == 0) {
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Les données n\'ont pas été modifiées'
        });</script>";
    } else {
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: 'Les données ont été modifiées'
        });</script>";
    }

?>
