CREATE DATABASE  crud_yt;

USE crud_yt;

CREATE TABLE pessoa (
    id_pessoa INT PRIMARY KEY AUTO_INCREMENT,
    nome VACHAR(255) NOT NULL
);

--seeds
INSERT INTO pessoa (nome) VALUES ("João"), ("Maria"), ("Paulo"), ("Ana");