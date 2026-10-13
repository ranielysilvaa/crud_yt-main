<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/templates/_cabecalho.php";
$lista = pessoa::listar();

?>




<?php if (Auth::estaAutenticado()): ?>

    <section class="m-3">
        <table class="table table-dark table-hover align-baseline">
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th colspan="2">
                    <a href="/crud_yt-main/views/pessoa_add_view.php" class="btn btn-success"><span class="material-symbols-outlined">add</span>Adicionar</a>
                </th>
            </tr>

            <?php foreach ($lista as $pessoa): ?>
                <tr>
                    <td><img src="data:image;base64,<?= base64_encode($pessoa["foto"]) ?>" class="foto" alt="" ></td>
                    <td><?= $pessoa["nome"] ?></td>
                    <td>
                        <a href="/crud_yt-main/views/pessoa_edit_view.php?id=<?= $pessoa["id_pessoa"] ?>" class="btn btn-warning">
                            <span class="material-symbols-outlined">edit</span>Editar

                        </a>
                    
                    </td>

                    <td>
                        <form  action="/crud_yt-main/controllers/pessoa_dell_controller.php" method="post" onsubmit="return confirm('voce Tem certeza que quer deletar o  registro?')">
                            <input type="hidden" name="id" value="<?= $pessoa["id_pessoa"] ?>">
                            <button type="submit" class="btn btn-danger"><span class="material-symbols-outlined">delete</span>Deletar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </section>
    <?php else: ?>
       <h1>Faça login</h1> 
    <?php endif; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/templates/_rodape.php";
?>