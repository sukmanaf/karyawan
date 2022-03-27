/*
SQLyog Professional v10.42 
MySQL - 5.6.16 : Database - karyawan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`karyawan` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `karyawan`;

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `jabatan_id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`jabatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `jabatan` */

insert  into `jabatan`(`jabatan_id`,`jabatan`) values (1,'Admin'),(2,'KepalaLapangan'),(3,'Sales'),(4,'Acounting'),(5,'Kepala Bagian'),(6,'Kepala Sales'),(7,'Petugas Lapangan'),(8,'Supervisor'),(22,'Kepalaa');

/*Table structure for table `kontrak` */

DROP TABLE IF EXISTS `kontrak`;

CREATE TABLE `kontrak` (
  `kontrak_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kontrak` date DEFAULT NULL,
  `lama_kontrak` varchar(10) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `pegawai_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`kontrak_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kontrak` */

insert  into `kontrak`(`kontrak_id`,`tgl_kontrak`,`lama_kontrak`,`tgl_mulai`,`tgl_selesai`,`pegawai_id`,`status`,`jabatan_id`) values (2,'2022-03-20','5 bulan','2022-03-20','2022-06-20',4,'Magang langi',8),(3,'2022-03-27','5 bulan','2022-03-27','2022-03-27',13,'magang',3),(4,'2022-03-27','5 bulan','2022-03-27','2022-03-27',19,'Magang',1);

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

insert  into `pegawai`(`pegawai_id`,`nama`,`nip`,`alamat`) values (4,'adia','1129s','jalan jawa kalimantan madiun a'),(13,'Andi','123','Malang'),(18,'aufiq','q33324','sini'),(19,'adaa','3232','mana'),(20,'abdulals','12121','asas');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
