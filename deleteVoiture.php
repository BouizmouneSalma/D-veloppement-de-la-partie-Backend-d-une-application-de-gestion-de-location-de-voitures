<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM voitures WHERE numV = $id");
}

header("Location: index.php");
exit();
?>
