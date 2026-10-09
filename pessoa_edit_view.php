<?php

$id = $_GET["id"];


$pessoa = new Pessoa($id);

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
    <section class="m-3" >
        <a href="index.php">Voltar </a>
    </section>

    <section class="d-flex justify-content-center">
        <section class="m-3 w-50 d-flex justify-content-center" >
            <form action="pessoa_edit_controller.php" method="post">
                <input type="hidden" name="id" value="<?=$pessoa->getId() ?>">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="email" class="form-control" id="nome" name="nome" value="</= $pessoa->getNome(); ?>">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>

            </form>
        </section>
    </section>
    

    
</body>
</html>