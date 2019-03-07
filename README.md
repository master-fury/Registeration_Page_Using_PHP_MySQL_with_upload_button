# Registeration_Page_Using_PHP_MySQL_with_upload_button
A simple demonstration of registration page using PHP and MySQL with an upload image button.

Steps for beginners.

1.Run your XAMPP or MAMP.

2.Add the database in phpmyadmin.

3.Run the sql script.

4.Copy all my php files to "htdocs" also make a new folder 'images' inside it.

5.Enjoy , you are ready to go.

*And don't forget to change password, port and username in form.php for MySQL DATABASE Connectivity.*

** For creating MySQL database.
  You can use the following script. **

CREATE DATABASE test;

CREATE TABLE `test`.`users`
(
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `avatar` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`)
);
