CREATE DATABASE gawsx 
CREATE TABLE utilisateurx ( userID INT PRIMARY KEY AUTO_INCREMENT , user_name VARCHAR (30) , email VARCHAR (50) , role VARCHAR (10) );
CREATE TABLE ressources ( ressourcesID INT PRIMARY KEY AUTO_INCREMENT , name VARCHAR (20) , description VARCHAR (100) , ressource VARCHAR (500));
CREATE TABLE souscategory ( scID INT PRIMARY KEY AUTO_INCREMENT , sc_name VARCHAR (20));