DROP TABLE IF EXISTS article;

CREATE TABLE article (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content LONGTEXT NOT NULL,
    cover_image VARCHAR(255) DEFAULT 'cover_placeholder.jpg',
    date_published BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    auteur_id INT NOT NULL,
    categorie_id INT NOT NULL,
    CONSTRAINT `fk_user_id_article` FOREIGN KEY(auteur_id) REFERENCES user(id),
    CONSTRAINT `fk_categorie_article` FOREIGN KEY(categorie_id) REFERENCES categorie(id)
);

