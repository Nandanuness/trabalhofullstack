<?php

    include_once('config.php');

    $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    $method = $_SERVER['REQUEST_METHOD'];

    switch ($path) {
        case '/':
            include 'views/formulario.html';
            break;

        case '/cadastrar':
            if ($method == 'POST') {
                include 'formulario.php';
            } else {
                echo "Método não permitido.";
            }
            break;

        default:
            http_response_code(404);
            echo "Página não encontrada.";
            break;
    }
?>
