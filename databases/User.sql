DROP TABLE IF EXISTS user;
CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    role ENUM("visiteur", "auteur", "admin") NOT NULL,
    picture VARCHAR(255) DEFAULT 'unknow.jpg',
    date_register BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP()
);

