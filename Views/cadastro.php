<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>

    <style>
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Funcionário</legend>
        <form action="/save" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>

        <label for="dt_nascimento">Data de Nascimento:</label><br>
        <input type="date" id="dt_nascimento" name="dt_nascimento" required><br>

        <label for="salario">Salário:</label><br>
        <input type="number" id="salario" name="salario" step="0.01" required><br>

        <label for="usuario">E-mail:</label><br>
        <input type="text" id="usuario" name="usuario" required><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Cadastrar">
    </form>
    </fieldset>
    
</body>
</html>