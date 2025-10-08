CREATE DATABASE IF NOT EXISTS listausuarios;
USE listausuarios;

CREATE TABLE Usuario
(
    id       INT            AUTO_INCREMENT PRIMARY KEY,
    nome     VARCHAR(255)   NOT NULL,
    email    VARCHAR(255)   NOT NULL UNIQUE,
    dataNascimento     DATE     NOT NULL,
    sexo     VARCHAR(20)       NOT NULL,
)

DESC Usuario;
SELECT * FROM Usuario;
DELETE FROM Usuario;