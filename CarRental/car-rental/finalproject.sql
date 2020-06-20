DROP TABLE IF EXISTS `inventory`;
DROP TABLE IF EXISTS `customers`;
DROP TABLE IF EXISTS `orders`;

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `itype` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `rentalcar` varchar(255) DEFAULT NULL,
  `carprice` int(255) DEFAULT NULL,
  `parking` varchar(255) DEFAULT NULL,
  `parkingprice` int(255) DEFAULT NULL,
  primary key (id));
  
INSERT INTO inventory (itype, name, price) VALUES
	('car', 'SUV', '300'),
	('car', 'Compact', '150'),
	('car', 'Midsize', '200'),
	('car', 'Luxury', '500');