-- Insertion des données d'utilisateur
INSERT INTO user (username, email, role, mdp, photo_profil)
VALUES 
('Salima', 'salima.admin@example.com', 'Administrateur', 'hashed_password1', 'https://mighty.tools/mockmind-api/content/human/1.jpg'),
('Carla', 'carla.auteur@example.com', 'Auteur', 'hashed_password2', 'https://mighty.tools/mockmind-api/content/human/2.jpg'),
('Aziza', 'aziza.auteur@example.com', 'Auteur', 'hashed_password3', 'https://mighty.tools/mockmind-api/content/human/3.jpg'),
('Hajeir', 'hajeir.auteur@example.com', 'Auteur', 'hashed_password4', 'https://mighty.tools/mockmind-api/content/human/4.jpg'),
('Kone', 'kone.auteur@example.com', 'Auteur', 'hashed_password5', 'https://mighty.tools/mockmind-api/content/human/5.jpg'),
('Eric', 'eric.lecteur@example.com', 'Lecteur', 'hashed_password6', 'https://mighty.tools/mockmind-api/content/human/6.jpg'),
('Myhed', 'myhed.lecteur@example.com', 'Lecteur', 'hashed_password7', 'https://mighty.tools/mockmind-api/content/human/7.jpg'),
('Amine', 'amine.lecteur@example.com', 'Lecteur', 'hashed_password8', 'https://mighty.tools/mockmind-api/content/human/8.jpg'),
('Benjamin', 'benjamin.lecteur@example.com', 'Lecteur', 'hashed_password9', 'https://mighty.tools/mockmind-api/content/human/9.jpg'),
('Galib', 'galib.lecteur@example.com', 'Lecteur', 'hashed_password10', 'https://mighty.tools/mockmind-api/content/human/10.jpg'),
('Zakaria', 'zakaria.lecteur@example.com', 'Lecteur', 'hashed_password11', 'https://mighty.tools/mockmind-api/content/human/11.jpg');

-- Note: Remplace 'hashed_passwordX' par le hash réel de vos mots de passe.