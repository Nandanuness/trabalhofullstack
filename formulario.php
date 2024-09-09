<?php
include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO usuarios (nome, cpf, telefone, sexo, data_nasc, cidade, estado, endereco) 
            VALUES ('$nome', '$cpf', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')";

    if ($conexao->query($sql) === TRUE) {
        echo "Novo usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    $conexao->close();
}
?>
