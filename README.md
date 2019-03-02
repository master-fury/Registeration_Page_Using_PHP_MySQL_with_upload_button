# Registeration_Page_Using_PHP_MySQL_with_upload_button
A simple demonstration of registration page using PHP and MySQL with an upload image button.

** For creating MySQL database.
  You can use the following script. **

CREATE DATABASE accounts;

CREATE TABLE `test`.`users` 
(
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `avatar` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`)
);
