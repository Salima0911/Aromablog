DROP TABLE IF EXISTS categorie_concerne_product;

CREATE TABLE categorie_concerne_product (
    id_categorie INT NOT NULL,
    id_product INT NOT NULL,
    PRIMARY KEY(id_categorie, id_product),
    CONSTRAINT `fk_id_categorie_concerne` FOREIGN KEY(id_categorie) REFERENCES categorie(`id`),
    CONSTRAINT `fk_id_product` FOREIGN KEY(id_product) REFERENCES product(`id`)
) engine = 'innodb';