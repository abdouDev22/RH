<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $prenom = $_POST["Prenom"];
    $nom = $_POST["nom"];
    $date = $_POST["date"];
    $address = $_POST["Address"];
    $email = $_POST["mail"];
    $poste = $_POST["poste"];
    $tel = $_POST["Tel"];
    $username = $_POST["user"];
    $password = $_POST["passe"];
    $confirmPassword = $_POST["conf"];

    // Perform basic validation (you should add more validation as needed)
    if (empty($prenom) || empty($nom) || empty($date) || empty($address) || empty($email) || empty($poste) || empty($tel) || empty($username) || empty($password) || empty($confirmPassword)) {
        echo "<script>alert('Veuillez remplir tous les champs'); window.history.back();</script>";
    } elseif ($password != $confirmPassword) {
             echo "<script>alert('La confirmation et le mot de passe ne sont pas identiques'); window.history.back();</script>";
    } else {
        // Connect to your MySQL database
        $serveur = "localhost";
        $utilisateur = "root";
        $motdepasse = "";
        $base = "rh";
        $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base);

        // Check the connection
        if ($connexion->connect_error) {
            die("Connection failed: " . $connexion->connect_error);
        }

        // Insert data into 'utilisateurs' table
        $utilisateurQuery = "INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe, id_role) 
        VALUES ('$username', '$password', '1')";

        if ($connexion->query($utilisateurQuery) === TRUE) {
            // Get the last inserted ID
            $lastInsertedId = $connexion->insert_id;

            // Insert data into 'candidats' table
            $candidatQuery = "INSERT INTO candidats (nom, prenom, date_de_naissance, adresse, telephone, email, poste, id_utilisateur) 
            VALUES ('$nom', '$prenom', '$date', '$address', '$tel', '$email', '$poste', '$lastInsertedId')";

            if ($connexion->query($candidatQuery) === TRUE) {
                header("location:../index.html");
            } else {
              echo "<script>alert('Veuillez réessayer'); window.history.back();</script>";
            }
        } else {
          echo "<script>alert('Veuillez réessayer'); window.history.back();</script>";
        }

        // Close the database connection
        $connexion->close();
    }
}
?>
