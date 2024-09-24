DROP TABLE IF EXISTS picture;

CREATE TABLE picture(
    id INT PRIMARY KEY AUTO_INCREMENT,
    uri VARCHAR(255),
    recipe_id INT NOT NULL,
    CONSTRAINT `fk_recipe` FOREIGN KEY(recipe_id) REFERENCES recipe(id)
);