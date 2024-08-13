CREATE DATABASE crud_ppi DEFAULT charset utf8mb4;
USE crud_ppi;
CREATE TABLE users(
    id INT PRIMARY KEY auto_increment,
    nome VARCHAR(200),
    email VARCHAR(200),
    senha VARCHAR(200),
    dtnasc DATE
)