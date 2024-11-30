<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mercearia_online";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "INSERT INTO Produtos (nome, quantidade, preco) VALUES ('$nome', '$quantidade', '$preco')";

if ($conn->query($sql) === TRUE) {
    echo "Produto adicionado com sucesso!";
} else {
    echo "Erro ao adicionar o produto: " . $conn->error;
}

$conn->close();
?>