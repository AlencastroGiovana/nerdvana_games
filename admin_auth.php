<?php
$nome_usuario_fixo = "admin@example.com";
$senha_fixa = "admin";

$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];

if ($nome_usuario === $nome_usuario_fixo && $senha === $senha_fixa) {

    header("Location: admin.php");
} else {

    echo "Nome de usuário ou senha incorretos.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra - Nerdvana Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        function finalizarCompra() {
            alert("Compra efetuada com sucesso! A Nerdvana Games agradece a sua confiança. Let's PLAY!!!");
        }
    </script>
</head>

<body>
    <header>
        <h1>Nerdvana Games</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="lojas.php">Lojas</a></li>
                <li><a href="cliente_login.php">Cliente</a></li>
                <li><a href="admin_login.php">Administração</a></li>
            </ul>
        </nav>
    </header>
    <footer>
        <p>&copy; 2024 Nerdvana Games. Todos os direitos reservados.</p>
    </footer>
</body>

</html>

<?php
$conn->close();
?>