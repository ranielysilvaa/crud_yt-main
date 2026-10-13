<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/pessoa.php";

$nome = $_POST["nome"];



if(!empty($_FILES["foto"]["tmp_name"])){
    $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
}

$pessoa = new Pessoa();

$pessoa->setNome($nome);

if(isset($foto)){
    $pessoa->setFoto($foto);
} else {
    $pessoa->setFoto(file_get_contents($_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/images/pessoas_placeholder.jpg"));
}

$pessoa->criar();

header("Location: /crud_yt-main/index.php");
exit();