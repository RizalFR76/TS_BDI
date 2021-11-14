/*
SQLyog Community v13.1.8 (64 bit)
MySQL - 10.4.21-MariaDB : Database - peminjaman_alat_fotografi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`peminjaman_alat_fotografi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `peminjaman_alat_fotografi`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `user_name` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_admin` int(20) NOT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`user_name`,`nama`,`password`,`email`,`id_admin`) values 
('1','','123','rf@email.com',1);

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `merk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_barang`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id_barang`,`nama`,`jenis`,`jumlah`,`merk`) values 
(1,'b1','kamera',12,'merk1'),
(2,'b2','kamera',10,'merk2'),
(3,'b3','kamera',5,'merk3'),
(4,'b4','tripod',7,'merk1');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pelanggan`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`user_name`,`nama`,`jenis_kelamin`,`tgl_lahir`,`alamat`,`no_hp`,`email`,`password`) values 
(43,'coba1','a1','Perempuan','1999-11-11','Tanahsari 02/01','089664620596','rf200010@gmail.com','123');

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(50) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(50) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `selesai_peminjaman` date NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_barang` (`id_barang`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman` */

insert  into `peminjaman`(`id_peminjaman`,`id_pelanggan`,`id_barang`,`tgl_peminjaman`,`selesai_peminjaman`) values 
(72,43,1,'2021-11-15','2021-11-30'),
(73,43,2,'2021-11-15','2021-11-30'),
(74,43,3,'2021-11-15','2021-11-30'),
(75,43,4,'2021-11-15','2021-11-30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
