<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/Auth/auth.php";

if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
}

$senha = $_POST["senha"];

Auth::logar($email, $senha);