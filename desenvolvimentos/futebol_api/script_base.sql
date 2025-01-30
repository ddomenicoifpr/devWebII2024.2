CREATE TABLE clubes (
    id INTEGER NOT NULL AUTO_INCREMENT,
    nome VARCHAR(70) NOT NULL,
    cidade VARCHAR(70) NOT NULL,
    imagem VARCHAR(1000) NOT NULL,
    CONSTRAINT pk_clubes PRIMARY KEY (id)
);

INSERT INTO clubes (nome, cidade, imagem) 
VALUES ("Grêmio", "Porto Alegre", "https://upload.wikimedia.org/wikipedia/commons/0/08/Gremio_logo.svg");

INSERT INTO clubes (nome, cidade, imagem) 
VALUES ("Palmeiras", "São Paulo", "https://upload.wikimedia.org/wikipedia/commons/1/10/Palmeiras_logo.svg");