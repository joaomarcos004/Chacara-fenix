<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "condominio_fenix";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
