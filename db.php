<?php
$host = 'localhost';
$user = 'root';
$password = '1234';
$dbname = 'data';
$conn = new mysqli($host, $user, $password,$dbname);
if ($conn) {
     echo " connect:";
}

if ($conn -> connect_errno) {
     echo "Failed to connect to MySQL: " . $conn -> connect_error;
     exit();
}
echo "good";
?>

