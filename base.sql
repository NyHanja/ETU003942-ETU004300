CREATE OR Replace database ExamenS2;
use ExamenS2;


CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100),
    date_naissance DATE,
    mdp VARCHAR(50),
    image_profil VARCHAR(100) DEFAULT "image.png",
    genre VARCHAR(10),
    email VARCHAR(100),
    ville VARCHAR(100)
);

CREATE TABLE categorie_objet (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(100)
);

CREATE TABLE objet (
    id_objet INT AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(100),
    id_categorie INT,
    id_membre INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

CREATE TABLE image_objet (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT, 
    id_membre INT,
    emprunt DATE,
    retour DATE,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

CREATE TABLE emprunts (
    id_emprunt INT AUTO_INCREMENT PRIMARY KEY,
    id_objet INT, 
    id_membre INT,
    emprunt DATE,
    retour DATE,
    FOREIGN KEY (id_objet) REFERENCES objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre)
);

-- Membres
INSERT INTO membre (nom, date_naissance, mdp, genre, email, ville) VALUES 
('Élise Lefevre', '1989-03-14', 'xZ3R8M5Ylq',  'Femme', 'elise.lefevre@example.com', 'Paris'),
('Julien Moreau', '1985-07-23', 'XrT4e2HkQw', 'Homme', 'julien.moreau@example.com', 'Lyon'),
('Camille Bernard', '1992-11-02', 'T7kLo6nPfR', 'Femme', 'camille.bernard@example.com', 'Marseille'),
('Lucas Dupont', '1978-04-30', 'Pw9Jx8UiVk', 'Homme', 'lucas.dupont@example.com', 'Toulouse');

-- Catégories
INSERT INTO categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

-- Objets
INSERT INTO objet (nom_objet, id_categorie, id_membre) VALUES
-- Membre 1 (Élise Lefevre)
('Sèche-cheveux', 1, 1),
('Marteau', 2, 1),
('Mixeur', 4, 1),
('Lime à ongles', 1, 1),
('Perceuse', 2, 1),
('Tournevis', 2, 1),
('Rouge à lèvres', 1, 1),
('Robot pâtissier', 4, 1),
('Écrou', 3, 1),
('Crème visage', 1, 1),

-- Membre 2 (Julien Moreau)
('Clé à molette', 3, 2),
('Blender', 4, 2),
('Ponceuse', 2, 2),
('Cafetière', 4, 2),
('Vernis à ongles', 1, 2),
('Plaque de cuisson', 4, 2),
('Scie sauteuse', 2, 2),
('Crème solaire', 1, 2),
('Batteur électrique', 4, 2),
('Tournevis électrique', 2, 2),

-- Membre 3 (Camille Bernard)
('Brosse à cheveux', 1, 3),
('Clé Allen', 3, 3),
('Épilation cire', 1, 3),
('Grille-pain', 4, 3),
('Lisseur', 1, 3),
('Perceuse visseuse', 2, 3),
('Boîte à outils', 2, 3),
('Batteur', 4, 3),
('Éponge', 4, 3),
('Tournevis plat', 2, 3),

-- Membre 4 (Lucas Dupont)
('Tondeuse à barbe', 1, 4),
('Mixer plongeant', 4, 4),
('Compresseur', 3, 4),
('Scie circulaire', 2, 4),
('Gants de cuisine', 4, 4),
('Lime électrique', 1, 4),
('Clé dynamométrique', 3, 4),
('Balance de cuisine', 4, 4),
('Fraiseuse', 2, 4),
('Crème hydratante', 1, 4);

-- Emprunts
INSERT INTO emprunts (id_objet, id_membre, emprunt, retour) VALUES
(2, 2, '2025-03-10', '2025-03-20'),
(5, 3, '2025-02-01', '2025-02-12'),
(11, 1, '2025-01-15', '2025-01-25'),
(14, 4, '2025-06-01', '2025-06-10'),
(22, 1, '2025-04-02', '2025-04-14'),
(30, 2, '2025-05-01', '2025-05-10'),
(31, 3, '2025-03-18', '2025-03-27'),
(33, 1, '2025-02-10', '2025-02-20'),
(35, 3, '2025-01-10', '2025-01-22'),
(39, 2, '2025-06-20', '2025-06-30');

