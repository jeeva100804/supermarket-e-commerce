CREATE DATABASE supermarket;
USE supermarket;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255)
);

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  image VARCHAR(255),
  price DECIMAL(10,2),
  type ENUM('food', 'non-food')
);
