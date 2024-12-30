<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "cadastro_clientes";

// Cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>