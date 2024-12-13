<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM contrat WHERE numL = $id");
}

header("Location: index.php");
exit();
?>
