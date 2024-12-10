<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $conn->real_escape_string($_POST['nom']);
    $adresse = $conn->real_escape_string($_POST['adresse']);
    $tel = $conn->real_escape_string($_POST['tel']);

    $sql = "INSERT INTO client (nom, adresse, tel) VALUES ('$nom', '$adresse', '$tel')";

    if ($conn->query($sql) === TRUE) {
        echo "Client ajoute avec succes";
        header("Location: index.php"); 
        exit();
    }
}
?>
