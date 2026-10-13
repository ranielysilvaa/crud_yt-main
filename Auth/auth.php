<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/configs/conexao.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/models/usuario.php";

session_start();

class Auth {
    public static function logar($email, $senha){
        $sql = "SELECT * FROM usuario WHERE email = :email";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":email", $email);
        $stmt->execute();
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($senha, $usuario["senha"])) {
            $_SESSION["id_usuario"] = $usuario["id_usuario"];
            $_SESSION["email"] = $usuario["email"];

            header("Location: /crud_yt-main/index.php");
            exit();
        } else {
            header("Location: /crud_yt-main/views/login.php");
            exit();

        }
    }

    public static function estaAutenticado(){
         return isset($_SESSION["id_usuario"]);
    }

    public static function logout(){
        session_unset();
        session_destroy();
        header("Location: /crud_yt-main/views/login.php");
        exit();
    }
}