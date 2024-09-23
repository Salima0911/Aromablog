DROP TABLE IF EXISTS categorie_associe_article;

CREATE TABLE categorie_associe_article (
    id_categorie INT NOT NULL,
    id_article INT NOT NULL,
    PRIMARY KEY(id_categorie, id_article),
    CONSTRAINT `fk_id_categorie` FOREIGN KEY(id_categorie) REFERENCES categorie(id),
    CONSTRAINT `fk_id_article_associe` FOREIGN KEY(id_article) REFERENCES article(id)
) engine = 'innodb';