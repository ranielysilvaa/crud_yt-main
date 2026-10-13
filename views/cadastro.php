<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/templates/_cabecalho.php";

?>
    <section class="d-flex justify-content-center">
        <section class="m-3 w-50 d-flex justify-content-center" >
            <form action="/crud_yt-main/controllers/usuario_add_controller.php" method="post">

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" >
                </div>

                
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Cadastrar-se</button>
                </div>

            </form>
        </section>
    </section>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/templates/_rodape.php";
?>
    

    
