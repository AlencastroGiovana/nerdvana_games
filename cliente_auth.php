<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mercearia_online";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome_usuario = $_POST['nome_usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM Utilizadores WHERE nome_usuario = '$nome_usuario' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['quantidade'] = $_POST['quantidade'];
    $_SESSION['valor_total'] = $_POST['valor_total'];
    header("Location: finalizar_compra.php");
} else {
    echo "Nome de usuário ou senha incorretos.";
}

$conn->close();
?>