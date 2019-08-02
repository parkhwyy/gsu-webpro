DROP TABLE IF EXISTS `inventory`;
DROP TABLE IF EXISTS `customers`;
DROP TABLE IF EXISTS `orders`;

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `itype` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  primary key (id));
  
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `rentalcar` varchar(20) DEFAULT NULL,
  `carprice` int(10) DEFAULT NULL,
  `parking` varchar(20) DEFAULT NULL,
  `parkingprice` int(10) DEFAULT NULL,
  primary key (id));
  
INSERT INTO customers (username, password) VALUES
	('parkhwyy', 'gnltjs718');
	
INSERT INTO orders (username, rentalcar, carprice, parking, parkingprice) VALUES
	('parkhwyy', 'SUV_Rental_Car', '300', 'VIP', '180');


INSERT INTO inventory (itype, name, price) VALUES
	('car', 'SUV_Rental_Car', '300'),
	('car', 'Compact_Rental_Car', '150'),
	('car', 'Midsize_Rental_Car', '200'),
	('car', 'Luxury_Rental_Car', '500');