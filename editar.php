<?php
include_once 'conecta.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buscar o cliente com o ID especificado
    $sql = "SELECT * FROM clientes WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
    } else {
        echo "Cliente não encontrado.";
    }
}

// Atualizar os dados do cliente
if (isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE clientes SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Cliente atualizado com sucesso!</div>";
    } else {
        echo "<div class='error-message'>Erro ao atualizar cliente: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="form-container">
        <h2>Editar Cliente</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome']; ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $cliente['email']; ?>" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="<?php echo $cliente['telefone']; ?>" required>
            </div>

            <div class="form-actions">
                <input type="submit" name="atualizar" value="Atualizar">
                <a href="listar.php" class="button-link">Voltar à Lista</a>
            </div>
        </form>
    </div>

</body>
</html>
