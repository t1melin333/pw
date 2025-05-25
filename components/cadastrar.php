<?php
include 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $desenvolvedora = $_POST['desenvolvedora'];
    $ano = $_POST['ano'];
    inserirJogo($nome, $genero, $desenvolvedora, $ano);
    echo "<p style='color: lightgreen;'>Jogo cadastrado com sucesso!</p>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Jogo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #202020;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        form {
            background: #2e2e2e;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border-radius: 4px;
            border: none;
        }
        button {
            padding: 10px;
            width: 100%;
            background-color: #00ffcc;
            color: black;
            border: none;
            border-radius: 4px;
            font-weight: bold;
        }
        a {
            margin-top: 15px;
            color: #00ffcc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Cadastrar Novo Jogo</h2>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome do Jogo" required>
        <input type="text" name="genero" placeholder="Gênero" required>
        <input type="text" name="desenvolvedora" placeholder="Desenvolvedora" required>
        <input type="number" name="ano" placeholder="Ano de Lançamento" required>
        <button type="submit">Cadastrar</button>
    </form>
    <a href="index.php">Voltar ao Início</a>
</body>
</html>
