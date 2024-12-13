<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['submit'])){
    $mdelde = $_POST['mdelde'];
    $marque = $_POST['marque'];
    $annee= $_POST['annee'];
    $id = $_POST['id'];
    
    $query = $conn->query("UPDATE voitures SET mdelde = '$mdelde',  marque= '$marque',  annee= '$annee' WHERE numC = $id");
    header('Location: index.php');
    exit;
}
?>
