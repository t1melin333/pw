CREATE DATABASE IF NOT EXISTS jogoteca;
USE jogoteca;

CREATE TABLE IF NOT EXISTS jogos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    desenvolvedora VARCHAR(100) NOT NULL,
    ano_lancamento INT NOT NULL
);
