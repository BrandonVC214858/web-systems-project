CREATE DATABASE web_system;

USE web_system;

CREATE TABLE correos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    asunto VARCHAR(100) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    mensaje TEXT NOT NULL
);
