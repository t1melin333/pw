<?php
include 'funcao.php';
$jogos = listarJogos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Jogos</title>
    <style>
        body {
            background-color: #121212;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 30px;
        }
        table {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
            background-color: #1e1e1e;
        }
        th, td {
            padding: 12px;
            border: 1px solid #333;
        }
        th {
            background-color: #00ffcc;
            color: black;
        }
        a {
            color: #00ffcc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Jogos Cadastrados</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Desenvolvedora</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
        <?php while ($jogo = $jogos->fetch_assoc()): ?>
            <tr>
                <td><?= $jogo['id'] ?></td>
                <td><?= $jogo['nome'] ?></td>
                <td><?= $jogo['genero'] ?></td>
                <td><?= $jogo['desenvolvedora'] ?></td>
                <td><?= $jogo['ano_lancamento'] ?></td>
                <td><a href="alterar.php?id=<?= $jogo['id'] ?>">Editar</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">Voltar ao Início</a>
</body>
</html>
