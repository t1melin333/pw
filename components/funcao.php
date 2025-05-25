<?php
$conn = new mysqli('localhost', 'root', '', 'jogoteca');
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

function inserirJogo($nome, $genero, $desenvolvedora, $ano) {
    global $conn;
    $sql = "INSERT INTO jogos (nome, genero, desenvolvedora, ano_lancamento) VALUES ('$nome', '$genero', '$desenvolvedora', $ano)";
    $conn->query($sql);
}

function listarJogos() {
    global $conn;
    return $conn->query("SELECT * FROM jogos");
}

function buscarJogo($id) {
    global $conn;
    $res = $conn->query("SELECT * FROM jogos WHERE id = $id");
    return $res->fetch_assoc();
}

function atualizarJogo($id, $nome, $genero, $desenvolvedora, $ano) {
    global $conn;
    $sql = "UPDATE jogos SET nome='$nome', genero='$genero', desenvolvedora='$desenvolvedora', ano_lancamento=$ano WHERE id=$id";
    $conn->query($sql);
}
?>
