<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/pessoa.php";

$id = $_POST["id"];

$pessoa = new Pessoa($id);

$pessoa->deletar();

header("Location: /crud_yt-main/index.php");
exit();


