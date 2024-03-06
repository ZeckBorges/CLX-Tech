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
        <legend>Atualizar Funcionário</legend>
        <form action="/save" method="post">

        <input type="hidden" value="<?= $model->id ?>" name="id" />

        <label for="nome">Nome:</label><br>
        <input type="text" value="<?= $model->nome ?>" id="nome" name="nome" required><br>

        <label for="dt_nascimento">Data de Nascimento:</label><br>
        <input type="date" value="<?= $model->dt_nascimento ?>" id="dt_nascimento" name="dt_nascimento" required><br>

        <label for="salario">Salário:</label><br>
        <input type="number" value="<?= $model->salario ?>" id="salario" name="salario" step="0.01" required><br>

        <label for="usuario">E-mail:</label><br>
        <input type="text" value="<?= $model->usuario ?>" id="usuario" name="usuario" required><br>

        <label for="senha">Senha:</label><br>
        <input type="password" value="<?= $model->senha ?>" id="senha" name="senha" required><br>

        <input type="submit" value="Cadastrar">
    </form>
    </fieldset>
    
</body>
</html>