<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nerdvana Games</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        window.onload = function () {
            setTimeout(function () {
                alert("Venha nos conhecer!");
            }, 5000);
        }
    </script>
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
        <h2>Nossas Lojas</h2>
        <div class="map-container">
            <h3>Mapa de Localização</h3>
            <iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;"
                allowfullscreen="" loading="lazy"></iframe>
        </div>

        <h3>Endereços das Lojas</h3>
        <ul class="store-addresses">
            <li>Loja Central: Rua Principal, 123 - Centro, Cidade Exemplo</li>
            <li>Filial Norte: Avenida Norte, 456 - Bairro Exemplo, Cidade Exemplo</li>
            <li>Filial Sul: Estrada Sul, 789 - Bairro Exemplo, Cidade Exemplo</li>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Mercearia Online. Todos os direitos reservados.</p>
    </footer>
</body>

</html>