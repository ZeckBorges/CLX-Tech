<!DOCTYPE html>
<html>
<head>
    <title>Barra de Navegação</title>
    <style>
        /* Estilos CSS */
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        li {
            margin-right: 10px;
        }

        li a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
        }

        li a:hover {
            background-color: #555;
        }

       
    </style>
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="/">Cadastrar</a></li>
            <li><a href="/listar">Todos Funcionarios</a></li>
        </ul>
    </nav>

</body>
</html>

<?php

include 'Controller/funcionarioController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {

    case '/':
        FuncionarioController::index();
    break;

    case '/save':
        FuncionarioController::save();
    break;

    case '/listar':
        FuncionarioController::list();
    break;

    case '/edit':
        FuncionarioController::edit();
    break;

    case '/delete':
        FuncionarioController::delete();
    break;

};

?>