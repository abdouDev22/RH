<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RH</title>
    <script type="module" crossorigin src="/assets/index-92ee810a.js"></script>
    <link rel="stylesheet" href="description1.css">
  </head>
  <body>
    <nav>
      <div class="logo">
        <strong><a href="index.html">R.H</strong>
        <span>Company</a></span>
      </div>
      <ul>
        <li><a href="inscription.html" class="a">inscription</a></li>
        <li><a href="connexion.html" class="a">Connexion</a> </li>
        <li><a href="contact/contact.html" class="a">Contacts</a></li>
      </ul>

    </nav>
    <?php 
    $id_offres=$_GET['id'];
       $connect=mysqli_connect("localhost","root","","rh");
       $req=mysqli_query($connect,"SELECT * From offres WHERE id_offres=$id_offres");
       while($row=mysqli_fetch_array($req)){
        echo '
        <a href="offre.php" class="retourne"><b>retour</b><i></i></a>
          <a href="connexion.html" class="postuler">Postuler</a>
          <h1>Poste pour un(e): <span>', $row[1], '</span></h1>
          <h2>Description de l\'offre</h2>
          <p class="descip">
          ',$row[2],'
          </p>
          <p class="datep">Date de publication : <span>',$row[3],'</span></p>
          <p class="datel">Date limite : <span>',$row[4],'</span></p> 
          <a href="connexion.html" class="postuler1">Postuler</a>
        ';
      }
     ?>
  </body>
</html>
