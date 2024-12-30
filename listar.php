<?php
include_once 'conecta.php';

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM clientes"; // Consulta SQL para obter os dados dos clientes
$result = $conn->query($sql); // Executa a consulta

// Exibe os dados em uma tabela
echo "<!DOCTYPE html>";
echo "<html lang='pt-br'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Listagem de Clientes</title>";
echo "<link rel='stylesheet' href='css/styles.css'>"; // Adicionando a folha de estilo
echo "</head>";
echo "<body>";

echo "<header><h2>Clientes Cadastrados:</h2></header>";

echo "<table>";
echo "<thead>";
echo "<tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
      </tr>";
echo "</thead>";
echo "<tbody>";

// Exibe cada cliente encontrado
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["nome"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["telefone"] . "</td>
            <td>
                <a href='editar.php?id=" . $row["id"] . "' class='button-link'>Editar</a>
                <a href='excluir.php?id=" . $row["id"] . "' class='button-link' onclick='return confirm(\"Tem certeza que deseja excluir?\")'>Excluir</a>
            </td>
        </tr>";
}

echo "</tbody>";
echo "</table>";
echo "<a href='cadastro.php' class='button-link'>Cadastrar Novo Cliente</a>";
echo "</body>";
echo "</html>";

$conn->close(); // Fecha a conexão com o banco de dados
?>
