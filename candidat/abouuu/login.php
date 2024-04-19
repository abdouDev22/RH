<html>
<head>
<title>login</title>
</head>

<body>
<form action="" method="POST">
Votre login : <input type="text" name="login">
<br />
Votre mot de passé : <input type="password" name="motdepasse"><br />
<input type="submit"   name="con"  value="Connexion">
</form>

</body>
</html>


<?php

if(isset($_POST['con'])){

$login=$_POST["login"];
$motdepasse = $_POST["motdepasse"];


    if($login=='itisme' && $motdepasse=='justme'){
        // on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $login;
		$_SESSION['motdepasse'] = $motdepasse;

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: acceuil.php');
	}
	else {
		echo '<body onLoad="alert(You clicked the button)">';
		// puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=login.php">';
		
	}
}




    ?>

