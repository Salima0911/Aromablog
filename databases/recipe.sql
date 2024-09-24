DROP TABLE IF EXISTS recipe;

CREATE TABLE recipe (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    ingredients TEXT DEFAULT NULL,
    note INT DEFAULT 0,
    instructions TINYTEXT DEFAULT NULL,
    description TINYTEXT NOT NULL,
    date_published BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    auteur_id INT,
    FOREIGN KEY (auteur_id) REFERENCES User(id)
);

