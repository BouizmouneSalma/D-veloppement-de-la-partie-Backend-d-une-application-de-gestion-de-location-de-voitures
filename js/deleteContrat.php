<?php
include 'db.php';

if (isset($_GET['idVoiture'])) {
    $idVoiture = intval($_GET['idVoiture']);
    $conn->query("DELETE  FROM Contrat WHERE numV = $idVoiture");
}

header("Location: index.php");
exit();
?>
