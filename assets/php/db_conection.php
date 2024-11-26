<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fada_dos_cilios";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
