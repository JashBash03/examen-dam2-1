CREATE DATABASE IF NOT EXISTS mydb;

USE mydb;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (name, password) VALUES ('Javi', '1234');
INSERT INTO users (name, password) VALUES ('Alvaro', 'wapeton04');
INSERT INTO users (name, password) VALUES ('Ivoooooo', '18camachops');