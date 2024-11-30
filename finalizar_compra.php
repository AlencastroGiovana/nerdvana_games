<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mercearia_online";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$quantidades = isset($_SESSION['quantidade']) ? $_SESSION['quantidade'] : [];
$valor_total = isset($_SESSION['valor_total']) ? $_SESSION['valor_total'] : '0.00';
$produtos_selecionados = [];

foreach ($quantidades as $produto_id => $quantidade) {
    if ($quantidade > 0) {
        $produto_id = (int) $produto_id;
        $sql = "SELECT * FROM Produtos WHERE id=$produto_id";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $produto = $result->fetch_assoc();
            $produtos_selecionados[] = [
                'nome' => $produto['nome'],
                'preco' => $produto['preco'],
                'quantidade' => $quantidade
            ];
        }
    }
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
            window.location.replace('index.php');
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
        <h2>Resumo da Compra</h2>
        <div class="carrinho">
            <?php
            if (count($produtos_selecionados) > 0) {
                foreach ($produtos_selecionados as $produto) {
                    echo "<div class='product-card'>";
                    echo "<h3>" . $produto['nome'] . "</h3>";
                    echo "<p>Preço: €" . $produto['preco'] . "</p>";
                    echo "<p>Quantidade: " . $produto['quantidade'] . "</p>";
                    echo "</div>";
                }
                echo "<p><strong>Total: €" . number_format($valor_total, 2, ',', '.') . "</strong></p>";
            } else {
                echo "<p>Seu carrinho está vazio. Volte ao inicio</p>";
            }
            ?>
            <button onclick="finalizarCompra()">Concluir Compra</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Nerdvana Games. Todos os direitos reservados.</p>
    </footer>
</body>

</html>

<?php
$conn->close();
?>