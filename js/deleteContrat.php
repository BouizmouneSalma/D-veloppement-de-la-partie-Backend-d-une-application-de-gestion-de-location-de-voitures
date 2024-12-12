<?php
include 'db.php';

if (isset($_GET['numV'])) {
    $idContrat = intval($_GET['numL']);
    $conn->query("DELETE  FROM Contrat WHERE numL = $idContrat");
}

header("Location: index.php");
exit();
?>
