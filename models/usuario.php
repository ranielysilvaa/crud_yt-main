<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/crud_yt-main/configs/conexao.php";

class usuario{
    private $id_usuario;
    private $email;
    private $senha;
    private $nivel_acesso;

    public function __construct($id = false)
    {
        if($id){
            $this->id_usuario = $id;
            $this->carregar();
        }
    }


  
    public function getId(){
        return $this->id_usuario;
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }


    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getNivel(){
        return $this->nivel_acesso;
    }

    public function setNivel($nivel){
        $this->nivel_acesso = $nivel;
    }

    public function carregar(){
        $conexao = Conexao::conectar();
        $sql = " SELECT * FROM usuario WHERE id_usuario = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
        $resultado = $stmt->fetch();

        $this->setEmail($resultado["email"]);
        $this->setSenha($resultado["senha"]);
        $this->setNivel($resultado["nivel_acesso"]);
    }

    public function  criar (){
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":email", $this->getEmail());
            $stmt->bindValue(":senha", $this->getSenha());
            $stmt->execute();


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function listar()
    {
        try{ 
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM usuario";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }   
    }

    public function atualizar(){
        try {
            $conexao = Conexao::conectar();
            $sql = "UPDATE usuario SET email = :email, senha = :senha WHERE id_usuario = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":email", $this->getEmail());
            $stmt->bindValue(":senha", $this->getSenha());
            $stmt->bindValue(":id", $this->getId());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function deletar(){
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM usuario WHERE id_usuario = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id" , $this->getId());
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}