<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/usuario.php";

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
}

$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$novoUsuario = new Usuario();
$novoUsuario->setEmail($email);
$novoUsuario->setSenha($senha);
$novoUsuario->criar();

header("Location: /crud_yt-main/views/login.php");
exit();