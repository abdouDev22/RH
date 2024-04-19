<html>
<head>
<title> bar_ajoute</title>
</head>

<body>
    
<br><br><br>
<form action="" method="POST">
    <center>
        <fieldset> <legend>Ajoute_exercice</legend>
titre_exercice : <input type="text" name="titre"><br>
<br />
auteur de l'exercice : <input type="text" name="auter"><br /><br>
date_creation: <input type="date" name="date"><br>
<br />
<input type="submit"   name="reset"  value="annuler">

<input type="submit"   name="ajoute"  value="ajoute">

</center>


<?php

 if (isset($_POST['ajoute'])) {

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "TP6";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);


$a = $_POST["titre"];
$b = $_POST["auter"];
$c = $_POST["date"];

$resultat = mysqli_query($sum, "INSERT INTO exercice
( titre, auteur, date_creation)
 VALUES ( '$a','$b','$c' )");

  if($resultat==0)
			  { echo "<center>les donnees ne sont pas bien enregistrees";
			  }
			  else 
				  { echo "les donnees  sont  bien enregistrees <br>";
			  }
            }     




echo'

            <table border=2>
                <thead border=2>
                    <tr>
                        <th> id </th>
                        <th> titre</th>
                        <th>  auteur </th>
                        <th> date_creation </th>
                        
                        <th> action1</th>
                        <th> action2</th>
                    </tr>
';

// partie connexion 

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "TP6";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);


$result=mysqli_query($sum,"SELECT * FROM exercice");       

while($ligne = mysqli_fetch_row($result)){
	$a=$ligne[0];
	$b=$ligne[1];
    $c=$ligne[2];
    $d=$ligne[3];
    
   
    echo " <tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>
    <a href='sup_exercice.php?id=$ligne[0]'class='btn'>supprimer</a>
   
    </td><td>
    <a href='modifier_exercice.php?id=$ligne[0]'>Modifier</a></td>
    ";
	}
    echo"</table></body>

    </html>";
  

    ?>
    
</form>

</body>
</html>