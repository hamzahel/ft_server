CREATE DATABASE wordpress_db;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'password';
GRANT ALL ON wordpress_db.* TO 'admin'@'localhost' IDENTIFIED BY 'password';
FLUSH PRIVILEGES;
