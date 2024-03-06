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
        <legend>Funcionários Cadastrados</legend>
        <table>
            <tr>
                <th>Nome</th>
                <th>e-mail</th>
                <th>Salário</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>

            <?php foreach($model->rows as $func): ?>
                <tr>
                    <td><?= $func->nome?></td>
                    <td><?= $func->usuario?></td>
                    <td><?= $func->salario?></td>
                    <td>
                        <a href="/edit?id=<?= $func->id ?>">Editar</a>
                        <a href="/delete?id=<?= $func->id ?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach ?>
            
        </table>
    </fieldset>
    
</body>
</html>