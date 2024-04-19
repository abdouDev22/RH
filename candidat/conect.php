<html>
<head>
<title>Formulaire d'identification</title>
</head>

<body>
<form action="" method="POST">
Votre login : <input type="text" name="login">
<br />
Votre mot de passé : <input type="password" name="pwd"><br />
<input type="submit"   name="con"  value="Connexion">
</form>

</body>
</html>


<?php

if(isset($_POST['con'])){
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";
$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);

$login=$_POST["login"];
$pwd = $_POST["pwd"];


$resul =mysqli_query($sum,"SELECT * FROM utilisateurs where nom_utilisateur='$login' AND mot_de_passe='$pwd'");

 while ($l = mysqli_fetch_row($resul)){;
    if($login=$l[1] && $pwd=$l[2]){
        // on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $l[1];
		$_SESSION['pwd'] = $l[2];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: rh.php');
	}
	else {
		echo '<body onLoad="alert(You clicked the button)">';
		// puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=conect.php">';
		
	}
}
}



    ?>

