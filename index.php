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
                alert("🕹️ Fique ligado! A nossa maratona de jogos começa em 24 horas. Junte-se a nós!");
            }, 5000);
        }

        function calcularValorTotal() {
            let total = 0;
            document.querySelectorAll('.product-card').forEach(card => {
                const quantidade = card.querySelector('input[type="number"]').value;
                const preco = parseFloat(card.querySelector('.preco').innerText.replace('€', ''));
                total += quantidade * preco;
            });
            document.getElementById('valor-total').innerText = total.toFixed(2);
        }

        function enviarFormulario() {
            const form = document.getElementById('form-compras');
            const total = document.getElementById('valor-total').innerText;
            const totalInput = document.createElement('input');
            totalInput.type = 'hidden';
            totalInput.name = 'valor_total';
            totalInput.value = total;
            form.appendChild(totalInput);
            form.submit();
        }
    </script>
    <style>
        .social-section {
            background-color: #2a2a2e;
            padding: 20px;
            text-align: center;
        }

        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons li {
            display: inline;
        }

        .social-icons a {
            color: white;
            text-decoration: none;
            font-size: 30px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #61dafb;
        }

        .snowflake {
            position: fixed;
            top: -10px;
            background-color: white;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
        }
    </style>
</head>

<body>
    <header>
        <!-- efeito que vou implantar depois
        <button id="toggleSnow">Desabilitar Neve</button>
        -->
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

    <div class="image-slider">
        <div class="slide">
            <img src="img/hn.jpeg" alt="Imagem 1">
            <div class="description">Encontre a diversão</div>
        </div>
        <div class="slide">
            <img src="img/moon.jpeg" alt="Imagem 2">
            <div class="description">Aproveite a festa</div>
        </div>
        <div class="slide">
            <img src="img/rat.jpeg" alt="Imagem 3">
            <div class="description">Heróis aclamados</div>
        </div>
        <div class="slide">
            <img src="img/star.jpeg" alt="Imagem 4">
            <div class="description">Jogos Premiados</div>
        </div>
    </div>

    <main>
        <h2>Produtos Disponíveis</h2>
        <form id="form-compras" action="cliente_login.php" method="post">
            <div class="products-grid">
                <?php
                $conn = new mysqli("localhost", "root", "root", "mercearia_online");

                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM Produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='product-card'>";
                        echo "<img src='img/ng.jpeg' alt='" . $row["nome"] . "'>";
                        echo "<h3>" . $row["nome"] . "</h3>";
                        echo "<p class='preco'>€" . $row["preco"] . "</p>";
                        echo "<p>Quantidade Disponível: " . $row["quantidade"] . "</p>";
                        echo '<input type="number" name="quantidade[' . $row["id"] . ']" min="0" max="' . $row["quantidade"] . '" onchange="calcularValorTotal()">';
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum produto encontrado.</p>";
                }

                $conn->close();
                ?>
            </div>
            <p><strong>Valor Total: €<span id="valor-total">0.00</span></strong></p>
            <button type="button" onclick="enviarFormulario()">Concluir Compra</button>
        </form>
    </main>

    <div class="newsletter">
        <h3>Inscreva-se para a nossa Newsletter</h3>
        <form action="inscrever_newsletter.php" method="post" onsubmit="showAlert(); return true;">
            <label for="email_newsletter">Email:</label>
            <input type="email" id="email_newsletter" name="email_newsletter" required>
            <button type="submit">Inscrever-se</button>
        </form>
    </div>

    <div class="map-container">
        <h3>Nossa Localização</h3>
        <iframe src="https://www.google.com/maps/embed?pb=..." width="600" height="450" style="border:0;"
            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <section class="social-section">
        <h2>Conecte-se Conosco</h2>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com" target="_blank" aria-label="Facebook"><i
                        class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.twitter.com" target="_blank" aria-label="Twitter"><i
                        class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com" target="_blank" aria-label="Instagram"><i
                        class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com" target="_blank" aria-label="YouTube"><i
                        class="fab fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn"><i
                        class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Nerdvana Games. Todos os direitos reservados.</p>
    </footer>
    <!-- efeito que vou implantar depois
    <script>
        let isSnowEnabled = true;
        let snowflakeInterval;

        const createSnowflake = () => {
            const snowMonths = [0, 1, 10, 11];
            const currentMonth = new Date().getMonth();

            if (!snowMonths.includes(currentMonth) || !isSnowEnabled) {
                return;
            }

            const snowflake = document.createElement('div');
            const size = Math.random() * 5 + 2;
            snowflake.classList.add('snowflake');
            snowflake.style.width = `${size}px`;
            snowflake.style.height = `${size}px`;
            snowflake.style.left = `${Math.random() * 100}vw`;
            snowflake.style.animationDuration = `${Math.random() * 3 + 2}s`;
            document.body.appendChild(snowflake);

            snowflake.addEventListener('animationend', () => {
                snowflake.remove();
            });
        };

        const createEffectInterval = () => { snowflakeInterval = setInterval(createSnowflake, 200); }

        const toggleSnow = () => {
            isSnowEnabled = !isSnowEnabled;
            if (isSnowEnabled) {
                createEffectInterval();
                document.getElementById('toggleSnow').innerText = 'Desabilitar Neve';
            } else {
                clearInterval(snowflakeInterval);
                document.getElementById('toggleSnow').innerText = 'Habilitar Neve';
            }
        };

        document.getElementById('toggleSnow').addEventListener('click', toggleSnow);
        createEffectInterval();
    </script> -->
</body>

</html>