create database cidadess;
use cidadess;

CREATE TABLE cidades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    estado VARCHAR(255) NOT NULL
);

CREATE TABLE melhoriass (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cidade_id INT,
    titulo VARCHAR(255),
    descricao TEXT,
    data DATETIME,
    categoria VARCHAR(255),
    FOREIGN KEY(cidade_id) REFERENCES cidades(id)
);

CREATE TABLE opinioes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cidade_id INT,
    opiniao TEXT,
    FOREIGN KEY(cidade_id) REFERENCES cidades(id)
);

CREATE TABLE comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhoria_id INT,
    usuario VARCHAR(255),
    comentario TEXT,
    data DATETIME,
    FOREIGN KEY(melhoria_id) REFERENCES melhorias(id)
);
create table votacoess(
    id INT AUTO_INCREMENT PRIMARY KEY,
    melhoria_id INT,
    voto INT, -- 1 para positivo, 0 para negativo
    FOREIGN KEY(melhoria_id) REFERENCES melhorias(id)
);


