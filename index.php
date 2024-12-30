<?php
include_once 'conecta.php';  // Conecta com o banco de dados

// Exibe título e links de navegação
echo "<!DOCTYPE html>";
echo "<html lang='pt-br'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Cadastro de Clientes</title>";
echo "<link rel='stylesheet' href='css/styles.css'>"; // Adicionando uma folha de estilo
echo "</head>";
echo "<body>";

echo "<header><h1>Cadastro de Clientes</h1></header>";

echo "<nav>";
echo "<ul>";
echo "<li><a href='cadastro.php'>Cadastrar Novo Cliente</a></li>";
echo "<li><a href='listar.php'>Listar Clientes</a></li>";
echo "</ul>";
echo "</nav>";

echo "</body>";
echo "</html>";
?>
