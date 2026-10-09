<?php
require_once "conexao.php";

class pessoa{
    private $id_pessoa
    private $nome;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id_pessoa;
    }

    public function  criar (){
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO pessoa (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $this->getNome());
            $stmt->execute();


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public static function listar()
    {
        try{ 
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM pessoa";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }   
    }
}