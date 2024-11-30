<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Cliente - Nerdvana Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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

    <main>
        <h2>Login do Cliente</h2>
        <form action="cliente_auth.php" method="post">
            <label for="nome_usuario">Nome de Usuário:</label>
            <input type="text" id="nome_usuario" name="nome_usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <?php
            if (isset($_POST['quantidade']) && isset($_POST['valor_total'])) {
                foreach ($_POST['quantidade'] as $produto_id => $quantidade) {
                    echo '<input type="hidden" name="quantidade[' . $produto_id . ']" value="' . $quantidade . '">';
                }
                echo '<input type="hidden" name="valor_total" value="' . $_POST['valor_total'] . '">';
            }
            ?>

            <button type="submit">Entrar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Nerdvana Games. Todos os direitos reservados.</p>
    </footer>
</body>

</html>