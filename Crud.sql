create database Crud;
use Crud;

CREATE TABLE users(
            _id INT NOT NULL AUTO_INCREMENT,
            firstName VARCHAR(45) NOT NULL,
            lastName VARCHAR(45) NOT NULL,
            email VARCHAR(45) NOT NULL,
            createdAt DATETIME NULL,
            updatedAt DATETIME NULL,
            PRIMARY KEY (_id),
            UNIQUE INDEX _id_UNIQUE (_id ASC),
            UNIQUE INDEX email_UNIQUE (email ASC));
            
create table computer(
			_id INT primary key NOT NULL AUTO_INCREMENT,
            ten varchar(225),
            gia int,
            hang VARCHAR(45) NOT NULL
);
            
            
            INSERT INTO `Crud`.`users` (`_id`, `firstName`, `lastName`, `email`, `createdAt`, `updatedAt`) VALUES (1, 'Cuong', 'Duong Van', 'Cuong123@gmail.com', null, null);
			
            insert into `computer` (`_id`,`gia`,`hang`) value (1, 5000000, 'hp');
            
            Select * from computer