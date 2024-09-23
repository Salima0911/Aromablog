DROP TABLE IF EXISTS user_create_article;

CREATE TABLE user_create_article (
    id_user INT NOT NULL,
    id_article INT NOT NULL,
    created_at BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    PRIMARY KEY(id_user, id_article),
    CONSTRAINT `fk_id_user` FOREIGN KEY(id_user) REFERENCES user(id),
    CONSTRAINT `fk_id_article` FOREIGN KEY(id_article) REFERENCES article(id)
) engine = 'innodb';