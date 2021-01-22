CREATE TABLE links.categoria (
    id INTEGER UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

CREATE TABLE links.link (
    id INTEGER UNSIGNED PRIMARY KEY auto_increment NOT NULL,
    link varchar(200) NOT NULL,
    titulo varchar(100) NOT NULL,
    descricao TEXT NULL,
    palavraschave varchar(100) NULL,
    imagem varchar(100) NULL
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;

ALTER TABLE links.link ADD categoria_id INT UNSIGNED NULL;
SET FOREIGN_KEY_CHECKS=0;ALTER TABLE link ADD CONSTRAINT fk_categoria_id FOREIGN KEY (categoria_id) REFERENCES categoria(id);