-- Auto-create single unified microservice database on container startup
CREATE DATABASE IF NOT EXISTS `codebridge` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
FLUSH PRIVILEGES;
