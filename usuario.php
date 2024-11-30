<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - Nerdvana Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <script>
        function concluirCompra() {
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

    <main>
        <h2>Carrinho de Compras</h2>
        <div class="carrinho">
            <?php

            session_start();
            if (isset($_SESSION['produtos'])) {
                $produtos = $_SESSION['produtos'];
                $total = 0;
                foreach ($produtos as $produto) {
                    echo "<div class='product-card'>";
                    echo "<img src='path/to/product/image.jpg' alt='" . $produto['nome'] . "'>";
                    echo "<h3>" . $produto['nome'] . "</h3>";
                    echo "<p>Preço: €" . $produto['preco'] . "</p>";
                    echo "<p>Quantidade: " . $produto['quantidade'] . "</p>";
                    $total += $produto['preco'] * $produto['quantidade'];
                    echo "</div>";
                }
                echo "<p><strong>Total: €" . number_format($total, 2, ',', '.') . "</strong></p>";
            } else {
                echo "<p>Seu carrinho está vazio.</p>";
            }
            ?>
            <button onclick="concluirCompra()">Concluir Compra</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Nerdvana Games. Todos os direitos reservados.</p>
    </footer>
</body>

</html>