<?php
include 'funcao.php';

if (isset($_GET['id'])) {
    $jogo = buscarJogo($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    atualizarJogo($_POST['id'], $_POST['nome'], $_POST['genero'], $_POST['desenvolvedora'], $_POST['ano']);
    echo "<p style='color: lightgreen;'>Jogo atualizado com sucesso!</p>";
    $jogo = buscarJogo($_POST['id']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Jogo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1c1c1c;
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
        input {
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
    <h2>Editar Jogo</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $jogo['id'] ?>">
        <input type="text" name="nome" value="<?= $jogo['nome'] ?>" placeholder="Nome" required>
        <input type="text" name="genero" value="<?= $jogo['genero'] ?>" placeholder="Gênero" required>
        <input type="text" name="desenvolvedora" value="<?= $jogo['desenvolvedora'] ?>" placeholder="Desenvolvedora" required>
        <input type="number" name="ano" value="<?= $jogo['ano_lancamento'] ?>" placeholder="Ano de Lançamento" required>
        <button type="submit">Atualizar</button>
    </form>
    <a href="listar.php">Voltar para Lista</a>
</body>
</html>
