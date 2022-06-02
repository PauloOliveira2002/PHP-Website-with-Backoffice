
DROP TABLE IF EXISTS clientes;
DROP TABLE IF EXISTS wordpress;
DROP TABLE IF EXISTS html;
DROP TABLE IF EXISTS administracao;

CREATE TABLE administracao(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username varchar (30),
    password varchar (15)
    
);
CREATE TABLE html(
    id INT PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(255),
    titulo VARCHAR(255),
    link TEXT   
);

CREATE TABLE wordpress(
    id INT PRIMARY KEY AUTO_INCREMENT,
    imagem VARCHAR(255),
    titulo VARCHAR(255),
    link TEXT
);

CREATE TABLE clientes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255),
    mensagem VARCHAR(500)
);

INSERT INTO administracao (username, password) VALUES ('admin','pass');

INSERT INTO html (titulo, link) VALUES ('site1','www.site1.com');
INSERT INTO html (titulo, link) VALUES ('site2','www.site2.com');
INSERT INTO html (titulo, link) VALUES ('site3','www.site3.com');
INSERT INTO wordpress (titulo, link) VALUES ('site1','www.site1.com');
INSERT INTO wordpress (titulo, link) VALUES ('site2','www.site2.com');
INSERT INTO wordpress (titulo, link) VALUES ('site3','www.site3.com');