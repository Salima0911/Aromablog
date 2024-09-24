DROP TABLE IF EXISTS article_tag;

CREATE TABLE article_tag (
    article_id INT,
    tag_id INT NOT NULL,
    PRIMARY KEY(article_id, tag_id),
    CONSTRAINT `fk_article_id_tag` FOREIGN KEY(article_id) REFERENCES article(id) ON DELETE CASCADE,
    CONSTRAINT `fk_tag_id` FOREIGN KEY(tag_id) REFERENCES tag(id) ON DELETE CASCADE
);
