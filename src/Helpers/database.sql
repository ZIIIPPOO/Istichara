CREATE TABLE cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE avocats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    city_id INT NOT NULL,
    specialites VARCHAR(255) NOT NULL,
    annees_experience INT NOT NULL,
    tarif_horaire DECIMAL(10, 2) NOT NULL,
    consultation_en_ligne BOOLEAN NOT NULL,
    FOREIGN KEY (city_id) REFERENCES cities(id)
);

CREATE TABLE huissiers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    city_id INT NOT NULL,
    type_actes VARCHAR(100) NOT NULL,
    annees_experience INT NOT NULL,
    tarif_horaire DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (city_id) REFERENCES cities(id)
);