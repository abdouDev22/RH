<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $connect = mysqli_connect("localhost", "root", "", "rh");

    $nom = $_POST["name"];
    $mdp = $_POST["pass"];

    $verif = mysqli_query($connect, "
                        SELECT id_utilisateurs,nom_utilisateur,mot_de_passe,id_role
                        FROM utilisateurs  ");
    $cpt = 0;
    while ($row = mysqli_fetch_array($verif)) {
        $v = 0;
        if ($nom == $row[1] && $mdp == $row[2] && $row[3] == '2') {
            $cpt = 1;
            $id_utlisateur = $row[0];
        } elseif ($nom == $row[1] && $mdp == $row[2] && $row[3] == '1') {
            $cpt = 2;
            $id_utlisateurd = $row[0];
        } elseif ($nom == $row[1] && $mdp == $row[2] && $row[3] == '3') {
            $cpt = 3;
            $id_utilisateur = $row[0];
        }
        elseif ($nom == $row[1] && $mdp == $row[2] && $row[3] == '4') {
            $cpt = 4;
            $id_directeur = $row[0];
        }
    }
    if ($cpt == 1) {
        $verif = mysqli_query($connect, " SELECT *
                        FROM employes WHERE id_utilisateur =' $id_utlisateur'");
        while ($row = mysqli_fetch_array($verif)) {
            $id = $row[0];
            $nom = $row[1];
            $util=$row[10];
        }
        $_SESSION['id'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['id_utilisateur'] = $util;
        header("location:../employer/php/profil.php");
        
    } elseif ($cpt == 2) {
        $verif = mysqli_query($connect, " SELECT *
                        FROM candidats WHERE id_utilisateur ='$id_utlisateurd'");
        while ($row = mysqli_fetch_array($verif)) {
            $id = $row[0];
            $nom = $row[1];
            $util=$row[10];
        }
        $_SESSION['id'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['id_utilisateur'] = $util;
        header("location:../candidat/profile.php");
    } elseif ($cpt == 3) {
        
        $verif = mysqli_query($connect, " SELECT *
                        FROM employes WHERE id_utilisateur ='$id_utilisateur'");
        while ($row = mysqli_fetch_array($verif)) {
            $id = $row[0];
            $nom = $row[1];
            $util=$row[10];
        }
        $_SESSION['ids'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['id_utilisateur'] = $util;
        header("location:../Manageur");
    } 
    
    if ($cpt == 4) {
        $verif = mysqli_query($connect, " SELECT *
                        FROM employes WHERE id_utilisateur ='$id_directeur'");
        while ($row = mysqli_fetch_array($verif)) {
            $id = $row[0];
            $nom = $row[1];
            $util=$row[10];
        }
        $_SESSION['id_directeur'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['id_utilisateur'] = $util;
        header("location:../Directeurexe/");
    }
    elseif ($cpt == 0) {
        
        echo "<script>alert('Ce nom ou ce mot de passe est incorrect veuillez réessayer'); window.history.back();</script>";
    }

    ?>
</body>

</html>
