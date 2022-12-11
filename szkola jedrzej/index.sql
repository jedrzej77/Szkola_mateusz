

CREATE DATABASE mateusz_szkola;

USE mateusz_szkola;



CREATE TABLE student(
    id INT(20) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    surname VARCHAR(20)
);


CREATE TABLE class(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20)
);


CREATE TABLE teacher(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20),
  surname VARCHAR(20),
  age INT(2)
);


CREATE TABLE subject_(
  id INT(20) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20)
);

CREATE TABLE users(
 id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 surname VARCHAR(50),
 name VARCHAR(50), 
 email VARCHAR(50),
 password VARCHAR(255),
 age VARCHAR(50),
 role VARCHAR(50) DEFAULT 'user' 
 );