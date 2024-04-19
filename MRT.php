//db_connect
<?php

$host = "localhost";
$user = "votre_utilisateur_mysql";
$password = "votre_mot_de_passe_mysql";
$database = "votre_base_de_donnees";

$mysqli = new mysqli($host, $user, $password, $database);

if ($mysqli->connect_error) {
    die("Échec de la connexion à MySQL : " . $mysqli->connect_error);
}

?>

//produits
<?php

require 'db_connect.php';

class ProduitsAPI {

    private $conn;

    function __construct() {
        $this->conn = $GLOBALS['mysqli'];
    }

    function getAllProduits() {
        // Implémentez la récupération de toutes les données de produits depuis la base de données
        // Utilisez SELECT * FROM produits
    }

    function getProduitById($id) {
        // Implémentez la récupération des données d'un produit en fonction de son ID
        // Utilisez SELECT * FROM produits WHERE id = $id
    }

    function addProduit($data) {
        // Implémentez l'ajout d'un nouveau produit dans la base de données
        // Utilisez INSERT INTO produits (champs) VALUES (valeurs)
    }

    function updateProduit($id, $data) {
        // Implémentez la mise à jour des données d'un produit en fonction de son ID
        // Utilisez UPDATE produits SET champs = valeurs WHERE id = $id
    }

    function deleteProduit($id) {
        // Implémentez la suppression d'un produit en fonction de son ID
        // Utilisez DELETE FROM produits WHERE id = $id
    }
}

?>

//index

<?php
// Empêcher l'accès direct aux fichiers du répertoire
header("HTTP/1.1 403 Forbidden");
?>

//post


<?php

// Ce fichier permet d'envoyer une requête POST à notre API REST pour tester l'ajout d'un nouveau produit.

$url = 'http://localhost/api/produits';

$data = array(
    'nom' => 'Nouveau Produit',
    'prix' => 19.99,
    'description' => 'Description du nouveau produit'
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Affiche la réponse du serveur
echo $result;

?>



//put

<?php

// Ce fichier permet d'envoyer une requête PUT à notre API REST pour tester la mise à jour d'un produit existant.

$url = 'http://localhost/api/produits/1'; // Remplacez 1 par l'ID du produit que vous souhaitez mettre à jour

$data = array(
    'nom' => 'Produit Mis à Jour',
    'prix' => 29.99,
    'description' => 'Nouvelle description du produit mis à jour'
);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'PUT',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// Affiche la réponse du serveur
echo $result;

?>


//htaccess


<IfModule mod_rewrite.c>
    Options -MultiViews
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [QSA,L]
</IfModule>


// CREATE TABLE produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
