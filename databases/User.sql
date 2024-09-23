DROP TABLE IF EXISTS User;

CREATE TABLE User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(80) NOT NULL,
    role ENUM('Lecteur', 'Auteur', 'Administrateur') default 'Lecteur',
    date_creation BIGINT UNSIGNED DEFAULT UNIX_TIMESTAMP(),
    mdp VARCHAR(50) NOT NULL,
    photo_profil VARCHAR(255) DEFAULT 'unknown.jpg'
) engine = 'Innodb';