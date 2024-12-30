<?php
include_once 'conecta.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    
    $sql = "INSERT INTO clientes(nome,email,telefone) VALUES ('$nome','$email', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Cliente cadastrado com sucesso!</div>";
    } else {
        echo "<div class='error-message'>Erro ao cadastrar cliente: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Cadastrar Novo Cliente</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>

            <div class="form-actions">
                <input type="submit" name="cadastrar" value="Cadastrar">
                <a href="listar.php" class="button-link">Listar Clientes</a>
                <!-- Botão para voltar à página inicial -->
                <a href="index.php" class="button-link">Voltar à Página Inicial</a>
            </div>
        </form>
    </div>

</body>
</html>
