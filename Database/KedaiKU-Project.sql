/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - db_kedaiku
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kedaiku` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_kedaiku`;

/*Table structure for table `tb_customer` */

DROP TABLE IF EXISTS `tb_customer`;

CREATE TABLE `tb_customer` (
  `id_customer` INT(255) NOT NULL AUTO_INCREMENT,
  `no_customer` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_customer` */

/*Table structure for table `tb_detail_trx` */

DROP TABLE IF EXISTS `tb_detail_trx`;

CREATE TABLE `tb_detail_trx` (
  `id_detail_trx` INT(255) NOT NULL AUTO_INCREMENT,
  `id_transaction` INT(255) DEFAULT NULL,
  `id_items` INT(255) DEFAULT NULL,
  `price` DOUBLE DEFAULT NULL,
  `quantity` INT(255) DEFAULT NULL,
  `sub_total` DOUBLE DEFAULT NULL,
  PRIMARY KEY (`id_detail_trx`),
  KEY `id_transaction` (`id_transaction`),
  KEY `id_items` (`id_items`),
  CONSTRAINT `tb_detail_trx_ibfk_1` FOREIGN KEY (`id_transaction`) REFERENCES `tb_transaction` (`id_transaction`),
  CONSTRAINT `tb_detail_trx_ibfk_2` FOREIGN KEY (`id_items`) REFERENCES `tb_items` (`id_items`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_detail_trx` */

/*Table structure for table `tb_items` */

DROP TABLE IF EXISTS `tb_items`;

CREATE TABLE `tb_items` (
  `id_items` INT(255) NOT NULL AUTO_INCREMENT,
  `items_name` VARCHAR(255) DEFAULT NULL,
  `description` ENUM('Food','Drink','Fruit') DEFAULT NULL,
  `quantity` INT(255) DEFAULT NULL,
  `price_buy` DOUBLE DEFAULT NULL,
  `price_sell` DOUBLE DEFAULT NULL,
  `status` ENUM('Fresh','Import') DEFAULT NULL,
  PRIMARY KEY (`id_items`),
  KEY `id_categories` (`description`)
) ENGINE=INNODB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_items` */

INSERT  INTO `tb_items`(`id_items`,`items_name`,`description`,`quantity`,`price_buy`,`price_sell`,`status`) VALUES 
(1,'Pizza','Food',12,20000,50000,'Import'),
(2,'Coca-Cola','Drink',15,4000,10000,'Import'),
(3,'Cappucino','Drink',11,20000,45000,'Fresh'),
(4,'Apel Fuji','Fruit',45,3500,6000,'Fresh'),
(5,'Buah Naga','Fruit',23,12000,15000,'Fresh');

/*Table structure for table `tb_transaction` */

DROP TABLE IF EXISTS `tb_transaction`;

CREATE TABLE `tb_transaction` (
  `id_transaction` INT(255) NOT NULL AUTO_INCREMENT,
  `dos` DATE DEFAULT NULL,
  `id_customer` INT(255) DEFAULT NULL,
  `id_staff` INT(255) DEFAULT NULL,
  `tax` DOUBLE DEFAULT NULL,
  `discount` DOUBLE DEFAULT NULL,
  `price` DOUBLE DEFAULT NULL,
  PRIMARY KEY (`id_transaction`),
  KEY `id_customer` (`id_customer`),
  KEY `id_staff` (`id_staff`),
  CONSTRAINT `tb_transaction_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  CONSTRAINT `tb_transaction_ibfk_2` FOREIGN KEY (`id_staff`) REFERENCES `tb_user` (`id`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

/*Data for the table `tb_transaction` */

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id` INT(255) NOT NULL AUTO_INCREMENT,
  `role` ENUM('Admin','Employee') DEFAULT 'Employee',
  `user_pict` BLOB DEFAULT NULL,
  `username` VARCHAR(200) DEFAULT NULL,
  `email` VARCHAR(200) DEFAULT NULL,
  `password` VARCHAR(255) DEFAULT NULL,
  `address` VARCHAR(200) DEFAULT NULL,
  `phone` VARCHAR(200) DEFAULT NULL,
  `gender` ENUM('Male','Female') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_role` (`role`)
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_user` */

INSERT  INTO `tb_user`(`id`,`role`,`user_pict`,`username`,`email`,`password`,`address`,`phone`,`gender`) VALUES 
(1,'Admin','','Rades','puturades89@gmail.com','$2y$10$3WGXga8qBSKj.j0H4j76K.jluQGFH9p11H/0D/lgosBvEpHqtTyGq','NMC LAB 1B','087893656333','Male'),
(2,'Employee','','Kevin','kevin.anggara12@gmail.com','$2y$10$WgDv5n6ggjYyYscEXv1C4OlbGauNLDfHzNt/DhejeFO4diZtjLpcy','NMC LAB 1B','089777999777','Male'),
(3,'Employee','','Kiko','kiko.employee@gmail.com','$2y$10$B0LsoMUiamyWa4UENCjDjezNBn0Q/vBRwXIgksLKX05QYoL7WVRz6','NMC Lab 1B','089366436333','Male');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
















