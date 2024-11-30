<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mercearia_online";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if (isset($_POST['email_newsletter'])) {
    $email = $conn->real_escape_string(trim($_POST['email_newsletter']));


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $sql = "INSERT INTO Newsletter (email) VALUES ('$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Registrado com sucesso! A Nerdvana Games agradece a sua confiança. Let's PLAY!!!</p>";
        } else {
            echo "<p>Erro ao registrar o email: " . $conn->error . "</p>";
        }
    } else {
        echo "<p>Email inválido. Por favor, insira um email válido.</p>";
    }
} else {
    echo "<p>Nenhum email recebido. Por favor, tente novamente.</p>";
}

$conn->close();
?>