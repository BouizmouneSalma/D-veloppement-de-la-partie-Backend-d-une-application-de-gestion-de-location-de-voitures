<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];
    $id = $_POST['id'];
    
    $query = $conn->query("UPDATE client SET nom = '$nom', adresse = '$adresse', tel = '$tel' WHERE numC = $id");
    header('Location: index.php');
    exit;
}


















if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = real_escape_string($_POST['nom']);
    $adresse = real_escape_string($_POST['adresse']);
    $tel = real_escape_string($_POST['tel']);

    $sql = "UPDATE client SET nom = '$nom', adresse = '$adresse', tel = '$tel' WHERE numC = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Client modifié avec succès";
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>
