


<?php
   

   $serveur = "localhost";
   $utilisateur = "root";
   $motdepasse = "";
   $base = "TP6";
   
   $sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);
   
   
   $id=$_GET["id"];
   
   
   $result=mysqli_query ($sum,"SELECT * FROM exercice where id='$id' ");       
   
   while($ligne = mysqli_fetch_row($result)){
   
       $a=$ligne[0];
       $b=$ligne[1];
       $c=$ligne[2];
       $d=$ligne[3];
       
               }
   
               echo'
<html>
<head>
<title> Exercice</title>
</head>

<body>
    
<br><br><br>
<form action="" method="POST">
    <center>
        <fieldset> <legend>Ajoute_exercice</legend>
titre_exercice : <input type="text" name="titre" value="',$b,'"><br>
<br />
auteur de l exercice : <input type="text" name="auter"  value="',$c,'"><br /><br>
date_creation: <input type="date" name="date"  value="',$d,'"><br>
<br />
<input type="submit"   name="reset"  value="annuler">

<input type="submit"   name="mod"  value="Modifier">

</center>

   ';
           

   


if (isset($_POST['mod'])) {

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "TP6";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);


$a = $_POST["titre"];
$b = $_POST["auter"];
$c = $_POST["date"];

$resultat = mysqli_query($sum, "UPDATE exercice
 SET titre='$a',auteur='$b',date_creation='$c' WHERE id='$id' ");

 if($resultat==0)
             { echo "<center>les donnees ne sont pas bien enregistrees";
             }
             else 
                 { echo "les donnees  sont  bien enregistrees <br>";
                    header ('location: ajoute_exercice.php');
             }
           }     

   
   ?>
   
   </body>
   </html>