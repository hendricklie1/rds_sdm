/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 5.1.72-community : Database - rds
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `departemen` */

DROP TABLE IF EXISTS `departemen`;

CREATE TABLE `departemen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depart` varchar(100) DEFAULT NULL,
  `kepala_depart` varchar(255) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `departemen` */

/*Table structure for table `ijin` */

DROP TABLE IF EXISTS `ijin`;

CREATE TABLE `ijin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `dinas` varchar(100) DEFAULT NULL,
  `durasi` varchar(50) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ijin` */

/*Table structure for table `kehadiran` */

DROP TABLE IF EXISTS `kehadiran`;

CREATE TABLE `kehadiran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `masuk` varchar(25) DEFAULT NULL,
  `keluar` varchar(25) DEFAULT NULL,
  `terlambat` varchar(30) DEFAULT NULL,
  `ijin` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `kehadiran` */

/*Table structure for table `klien` */

DROP TABLE IF EXISTS `klien`;

CREATE TABLE `klien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depart` varchar(50) DEFAULT NULL,
  `cp` varchar(50) DEFAULT NULL,
  `ni_cp` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hub` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `klien` */

/*Table structure for table `lembur` */

DROP TABLE IF EXISTS `lembur`;

CREATE TABLE `lembur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `lembur` */

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id`,`username`,`nama`,`pass`) values 
(1,'superuser','Superuser','superuser');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` int(11) DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `jenis_kel` varchar(50) DEFAULT NULL,
  `ttl` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(40) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(3) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

/*Table structure for table `resign` */

DROP TABLE IF EXISTS `resign`;

CREATE TABLE `resign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) DEFAULT NULL,
  `jenis` varchar(150) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `resign` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
