
<?php session_start();?>

<?php
// Vérifiez d'abord si l'utilisateur est connecté
  if(!isset($_SESSION['login']) || !isset($_SESSION['motdepasse'])) {
     // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
     header('Location: login.php');
     exit();
  }?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> login_pass</title>
   
  <body>
       <center>
        <h3>mouna<br /><span>php</span></h3>
        <br> <a href="deconnexion.php">deconnexion</a>
</center>
     
  </body>
</html>
