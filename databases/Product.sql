DROP TABLE IF EXISTS Product;

CREATE TABLE Product (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    description TINYTEXT NOT NULL,
    image VARCHAR(255) NOT NULL
) engine = 'Innodb';