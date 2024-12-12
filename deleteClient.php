<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conn->query("DELETE FROM client WHERE numC = $id");
}

header("Location: index.php");
exit();
?>
