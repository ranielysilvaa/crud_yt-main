<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/pessoa.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/Auth/auth.php";

?>
    
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de nome</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/crud_yt-main/css/style.css">

<link rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>  

    <section>
        <nav>
            <a href="/crud_yt-main/index.php">Index</a>

            <?php if (!Auth::estaAutenticado()): ?>
                <a href="/crud_yt-main/views/login.php">Login</a>
            <?php else: ?>
                <a href="/crud_yt-main/controllers/logout.php">Sair</a>
            <?php endif; ?>
        </nav>

        <?php if (Auth::estaAutenticado()): ?>
             Ola, <?= $_SESSION["email"] ?>
        <?php endif; ?>
    </section>