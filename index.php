<?php

require_once "pessoa.php";

$lista = Pessoa::listar();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de nome</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</head>
<body>
    <section class="m-3">
    <table class="table table-dark table-hover">
        <tr>
            <th>Nome</th>
            <th colspan="2">
                <a href="pessoa_add_view.php" >Adicionar</a>
            </th>
        </tr>

        <?php foreach ($lista as $pessoa): ?>
            <tr>
                <td><?= $pessoa["nome"] ?></td>
                <td>Editar</td>

                <td>
                    <form  action="pessoa_dell_controller.php" method="post" onsubmit="return confirm('voce Tem certeza que quer deletar o  registro?')">
                        <input type="hidden" name="id" value="<?= $pessoa["id_pessoa"] ?>">
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </section>
</body>
</html>