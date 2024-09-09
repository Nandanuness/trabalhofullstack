<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = 'Fernandinha200@';
    $dbName = 'meubanco';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_errno) {
        die("Erro ao conectar com o banco de dados: " . $conexao->connect_error);
    }
?>