<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base = "rh";

// Create a connection to the database
$conn = mysqli_connect($serveur, $utilisateur, $motdepasse, $base);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You should sanitize and validate user input to prevent SQL injection and other security issues
    // Insert data into the database
    $sql = "INSERT INTO contact (Nom, Email, Message) VALUES ('$name', '$email', '$message')";


    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record inserted successfully'); window.history.back();</script>";
    } else {echo "<script>alert('Erreur de L INSERTION '); window.history.back();</script>";
    }
    
}

// Close the database connection
mysqli_close($conn);
?>
