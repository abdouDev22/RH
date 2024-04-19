<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RH</title>
    <script type="module" crossorigin src="assets/index-d0a2bcc0.js"></script>
    <link rel="stylesheet" href="assets/index-948518.css">
  </head>
  <body>
 
  <nav>
      <div class="logo">
        <strong>R.H</strong>
        <span>Company</span>
      </div>
      <ul>
        <li><a href="#">inscription</a></li>
        <li><a href="conne.html">Connexion</a> </li>
        <li><a href="contact.html">Contacts</a></li>
      </ul>

    </nav>
    <div class="sidebar">
    <ul>
        <li class="list">
          <a href="acceuil.php">
            <span class="icon"><img src="/assets/search-symbolic-svgrepo-com-724e840b.svg" alt=""></span>
            <span class="text">Home</span>
          </a>
        </li>
        <li class="list">
          <a href="index.php">
            <span class="icon"><img src="/assets/search-symbolic-svgrepo-com-724e840b.svg" alt=""></span>
            <span class="text">Demande Congé</span>
          </a>
        </li>
        <li class="list">
          <a href="commentaire.php">
            <span class="icon"><img src="/assets/search-symbolic-svgrepo-com-724e840b.svg" alt=""></span>
            <span class="text">Commentaire</span>
          </a>
        </li>
      </ul>
    </div>
    
<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);


$id_conge=$_GET['id'];

echo'<div class="v1">
<div class="cong">
  <H2>liste Demande de congé</H2>
  <table>
    <tr>
      <td> ID</td>
      <td > Date debut</td>
      <td > Date fin</td>
      <td > Type congé</td>
    </tr>';

$result=mysqli_query($sum,"SELECT * FROM demande_congé,type_conge where id_employe=$id_conge and demande_congé.id_type_conge = type_conge.id_type_conge ");
while($ligne=mysqli_fetch_row($result)){
  $id=$ligne[0];
  $date_debut=$ligne[2];
  $date_fin=$ligne[3];
  $type_conge=$ligne[8];
  echo' <tr>
  <td>'.$id.'</td>
  <td >'.$date_debut.'</td>
  <td >'.$date_fin.'</td>
  <td >'.$type_conge.'</td>
  </tr> 
';
}
echo'
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td><a href="employé.php?id='.$id_conge.'" class="lien">Retour</a></td>
  </tr>
</table>
</div>
</div>  ';


    





?>








<script>
      let list= document.querySelectorAll('.list');
      for (let i=0;i<list.length;i++){
        list[i].onclick =function(){
          let j =0;
          while(j<list.length){
            list[j++].className='list';
          }
          list[i].className = 'list active';
        }
      }
    </script>
    
    
    

  </body>
</html>
