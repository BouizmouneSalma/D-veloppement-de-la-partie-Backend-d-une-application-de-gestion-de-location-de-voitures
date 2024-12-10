<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marque = $conn->real_escape_string($_POST['marque']);
    $model = $conn->real_escape_string($_POST['modele']);
    $ann = $conn->real_escape_string($_POST['annee']);

    $sql = "INSERT INTO voitures (marque, modele, annee) VALUES ('$marque', '$model', '$ann');";

    if ($conn->query($sql) === TRUE) {
        echo "Voiture ajoute avec succes";
        header("Location: index.php"); 
        exit();
    }
}
?>
