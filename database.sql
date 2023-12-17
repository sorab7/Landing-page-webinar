-- Create a new database (if not exists)
CREATE DATABASE IF NOT EXISTS usertest;

-- Switch to the newly created database
USE usertest;

-- Create a table with fields: name, email, number, and photo
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    number VARCHAR(20) NOT NULL,
    photo BLOB, -- BLOB stands for Binary Large Object, suitable for storing images
    UNIQUE (email) -- Ensure email is unique
);
