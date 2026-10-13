<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/Auth/auth.php";

if(Auth::estaAutenticado()){
    Auth::logout();
} else {
    header("Location: /crud_yt-main/views/login.php");
    exit();
}