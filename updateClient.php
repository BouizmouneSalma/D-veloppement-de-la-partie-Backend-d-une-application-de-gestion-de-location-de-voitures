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
?>
