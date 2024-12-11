<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numC = $conn->real_escape_string($_POST['numC']);
    $numV = $conn->real_escape_string($_POST['numV']);
    $dateDebut = $conn->real_escape_string($_POST['dateDebut']);
    $dateFin = $conn->real_escape_string($_POST['dateFin']);
    $duree = $conn->real_escape_string($_POST['duree']);
    $sqlContrat = "INSERT INTO contrat(numC,numV,dateDebut,dateFin,duree) VALUES ('$numC', '$numV', '$dateDebut', '$dateFin', '$duree') ";

    if ($conn->query($sqlContrat) === TRUE) {
        echo "Contrat ajoute avec succes";
        header("Location: index.php"); 
        exit();
    }
}
?>
