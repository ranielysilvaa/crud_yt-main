CREATE DATABASE  crud_yt;

USE crud_yt;

CREATE TABLE pessoa (
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    foto LONGBLOB
);

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    nivel_acesso INT DEFAULT 1
);


--seeds
INSERT INTO pessoa (nome) VALUES ("João"), ("Maria"), ("Paulo"), ("Ana");