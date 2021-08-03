CREATE DATABASE cine;

  use cine;

  CREATE TABLE peliculas (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(60) NOT NULL,
    genero VARCHAR(30) NOT NULL,
    sinopsis VARCHAR(200) NOT NULL,
    nacionalidad VARCHAR(30) NOT NULL,
    puntuacion INT(2),
    date TIMESTAMP
  );