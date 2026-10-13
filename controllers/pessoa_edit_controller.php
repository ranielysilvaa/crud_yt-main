<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/pessoa.php"; 

$id = $_POST["id"];
$nome = $_POST["nome"];

if(!empty($_FILES["foto"]["tmp_name"])){
    $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
}

$pessoa = new pessoa($id);

$pessoa->setNome($nome);

if(isset($foto)){
    $pessoa->setFoto($foto);
} else {
    $pessoa->setFoto($pessoa->getFoto());
}

$pessoa->atualizar();

header("Location: /crud_yt-main/index.php");
exit();