DROP TABLE IF EXISTS comment;

CREATE TABLE comment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    content TEXT NOT NULL,
    statut ENUM("on hold", "validate") NOT NULL,
    date_comment BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    user_id INT,
    article_id INT,
    comment_type ENUM("question", "suggestion", "éloge", "critique") NOT NULL,
    likes INT UNSIGNED DEFAULT 0,
    replies LONGTEXT DEFAULT NULL,
    edited_at BIGINT UNSIGNED DEFAULT NULL,
    is_featured BOOLEAN DEFAULT FALSE,
    reported BOOLEAN DEFAULT FALSE,
    parent_comment_id INT DEFAULT NULL,
    source ENUM("mobile", "web", "email", "other") DEFAULT "web",
    CONSTRAINT `fk_article_id_comment` FOREIGN KEY (article_id) REFERENCES Article(id)
);

