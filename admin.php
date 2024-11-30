<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdvana Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>

        <h1>-Nerdvana Games-</h1>
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
        <h2>Adicionar Produto</h2>
        <form action="adicionar_produto.php" method="post">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="quantidade">Quantidade Disponível:</label>
            <input type="number" id="quantidade" name="quantidade" required>

            <label for="preco">Preço por Unidade (€):</label>
            <input type="number" step="0.01" id="preco" name="preco" required>

            <button type="submit">Adicionar Produto</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Mercearia Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>