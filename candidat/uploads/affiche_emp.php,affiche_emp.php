<!DOCTYPE html>
<html lang="en" title="Coding design">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
    <link rel="stylesheet" href="affiches.css">
</head>

<body>
    <main class="table">
        <section class="table__header">
            <h1>Customer's Orders</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="search.png">
            </div>
            <div class="export__file">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> id </th>
                        <th> id_emp</th>
                        <th>  date </th>
                        <th> date </th>
                        <th> id_type </th>
                        <th> statut</th>
                        <th> motif</th>
                        <th> action1</th>
                        <th> action2</th>
                    </tr>
                </thead>
                <tbody>
                    
                        
            
        </section>
    </main>


<?php





// partie connexion 

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

$sum = mysqli_connect($serveur,$utilisateur,$motdepasse,$base);


$result=mysqli_query($sum,"SELECT * FROM demande_congé");       

while($ligne = mysqli_fetch_row($result)){
	$a=$ligne[0];
	$b=$ligne[1];
    $c=$ligne[2];
    $d=$ligne[3];
    $e=$ligne[4];
    $f=$ligne[5];
    $g=$ligne[6];

   
    echo " <tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td> $f
    </td><td>$g</td><td>
    <a href='statut_valide.php?id=$ligne[0]'class='btn' >Traitement</a>
   
    
    ";
	}
    echo"</table></body>

    </html>";
  
?>