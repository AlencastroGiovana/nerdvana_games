CREATE DATABASE IF NOT EXISTS mercearia_online;

USE mercearia_online;

CREATE TABLE Produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

CREATE TABLE Utilizadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_usuario VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

CREATE TABLE Encomendas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cliente VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    morada TEXT NOT NULL,
    produtos TEXT NOT NULL,
    quantidade TEXT NOT NULL,
    preco_total DECIMAL(10, 2) NOT NULL
);
-- Inserindo dados na tabela Produtos
INSERT INTO Produtos (nome, quantidade, preco) VALUES
('Produto A', 50, 10.00),
('Produto B', 20, 15.50),
('Produto C', 100, 7.25),
('Produto D', 0, 20.00),  -- Produto esgotado
('Produto E', 30, 5.99);

USE mercearia_online;

CREATE TABLE IF NOT EXISTS Newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL
);

USE mercearia_online;

INSERT INTO Utilizadores (nome_usuario, senha) VALUES
('cliente@example.com', 'cliente'),
('cliente1@example.com', 'cliente1'),
('cliente2@example.com', 'cliente2'),
('admin@example.com', 'admin');

INSERT INTO Encomendas (nome_cliente, data_nascimento, morada, produtos, quantidade, preco_total) VALUES
('João Silva', '1990-05-15', 'Rua A, 123, Cidade X', 1, 2, 20.00),
('Maria Oliveira', '1985-08-22', 'Avenida B, 456, Cidade Y', 2, 1, 15.50),
('Carlos Santos', '1992-12-01', 'Travessa C, 789, Cidade Z', 3, 5, 36.25),
('Giovana oliveira', '1997-07-04', 'Rua L, 7, Cidade M', 4, 1, 20.00);

USE mercearia_online;
