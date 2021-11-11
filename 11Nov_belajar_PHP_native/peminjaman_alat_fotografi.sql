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
  `id_admin` VARCHAR(100) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `barang` VARCHAR(10) NOT NULL,
  `id_peminjaman` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `barang` (`barang`),
  KEY `id_peminjaman` (`id_peminjaman`),
  CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id_barang` VARCHAR(10) NOT NULL,
  `nama` VARCHAR(30) NOT NULL,
  `jumlah` INT(10) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `user_name` VARCHAR(100) NOT NULL,
  `nama` VARCHAR(50) NOT NULL,
  `jenis_kelamin` VARCHAR(10) NOT NULL,
  `tgl_lahir` DATE NOT NULL,
  `alamat` VARCHAR(100) NOT NULL,
  `no_hp` INT(15) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan` */

/*Table structure for table `peminjaman` */

DROP TABLE IF EXISTS `peminjaman`;

CREATE TABLE `peminjaman` (
  `id_peminjaman` VARCHAR(50) NOT NULL,
  `barang` VARCHAR(10) NOT NULL,
  `stock` INT(10) NOT NULL,
  `dp` INT(10) NOT NULL,
  `tgl_pemesanan` DATE NOT NULL,
  `tgl_peminjaman` DATE NOT NULL,
  `selesai_peminjaman` DATE NOT NULL,
  `nama_peminjam` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_peminjaman`),
  KEY `barang` (`barang`),
  KEY `nama_peminjam` (`nama_peminjam`),
  CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`barang`) REFERENCES `barang` (`id_barang`),
  CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`nama_peminjam`) REFERENCES `pelanggan` (`user_name`)
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

/*Data for the table `peminjaman` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
