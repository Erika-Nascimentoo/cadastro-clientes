<?php
include_once 'conecta.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Cliente excluído com sucesso!</div>";
    } else {
        echo "<div class='error-message'>Erro ao excluir cliente: " . $conn->error . "</div>";
    }
}

header("Location: listar.php"); // Redireciona para a página de listagem
exit;
?>
