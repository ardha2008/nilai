# Host: localhost  (Version: 5.5.32)
# Date: 2014-07-28 01:44:31
# Generator: MySQL-Front 5.3  (Build 4.100)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "guru"
#

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id_guru` varchar(5) NOT NULL DEFAULT '',
  `nama` varchar(255) DEFAULT NULL,
  `alamat` text,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `jekel` varchar(1) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES ('09999','Hadi Pramono S.Pd','Sawotratap 1.1','Surabaya','0000-00-00',NULL,'L','(031)-08999999','2014-07-27 00:29:45'),('1110','Budi','Surabaya',NULL,NULL,NULL,NULL,NULL,NULL);

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (03,'1 IPA 1','2014-07-26 04:58:00'),(04,'1 IPA 2','2014-07-26 04:58:06'),(05,'1 IPA 3','2014-07-26 04:58:10'),(06,'1 IPA 4','2014-07-26 04:58:14'),(07,'1 IPA 5','2014-07-26 04:58:18'),(08,'1 IPS 1','2014-07-26 04:58:22'),(09,'1 IPS 2','2014-07-26 04:58:25'),(10,'1 IPS 3','2014-07-26 04:58:33'),(11,' BAHASA 1','2014-07-27 01:30:55'),(12,' IPA 1','2014-07-27 01:32:35'),(13,'2 IPS 4','2014-07-27 01:33:37');

#
# Structure for table "mapel"
#

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id_mapel` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

#
# Data for table "mapel"
#

INSERT INTO `mapel` VALUES (004,'Ekonomi','0000-00-00 00:00:00'),(005,'Matematika','0000-00-00 00:00:00'),(006,'Biologi','0000-00-00 00:00:00'),(007,'Bahasa Indonesia','0000-00-00 00:00:00'),(008,'Fisika','0000-00-00 00:00:00'),(009,'Kimia','0000-00-00 00:00:00'),(010,'Bimbingan Konseling','0000-00-00 00:00:00'),(011,'Bahasa Inggris','0000-00-00 00:00:00'),(012,'Bahasa Jepang','2014-07-27 01:01:35'),(013,'Bahasa Korea','2014-07-27 01:01:45'),(014,'Komputasi Komputer','2014-07-27 01:01:51');

#
# Structure for table "mapel_kelas"
#

DROP TABLE IF EXISTS `mapel_kelas`;
CREATE TABLE `mapel_kelas` (
  `id_kelas` varchar(255) DEFAULT NULL,
  `id_mapel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mapel_kelas"
#


#
# Structure for table "nilai"
#

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` varchar(255) DEFAULT NULL,
  `id_mapel` varchar(255) DEFAULT NULL,
  `nilai` float(3,2) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#


#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(255) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(255) DEFAULT NULL,
  `jekel` varchar(1) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (9,NULL,'Frans Chornelius Marpaung',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(10,NULL,'Oktyawan Aditya',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(11,NULL,'Sandyana W. Pradita',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(12,NULL,'Roy Wiratma Putra',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(13,NULL,'Abdan Khalagas',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(14,NULL,'Dian Afriansyah',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(15,NULL,'Moh Hisyam S',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(16,NULL,'Rudy Hermawan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(17,NULL,'Nia Putri Lutviana',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(18,NULL,'Alifmy Putri Anggraini',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(19,NULL,'Anak Agung Gde Regha G',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(20,NULL,'Ayu Amelia Ratnasari',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(21,NULL,'Rizky Hendra Darmawan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(22,NULL,'Ralph. Semarang Talakua',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(23,NULL,'Muhammad Irkham N',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(24,NULL,'David Nursaputra',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(25,NULL,'Dia Arnia Putri',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(26,NULL,'Inge Vergitania',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(27,NULL,'Sifaul Khusnah',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(28,NULL,'Dedys Hendra Tanaya',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(29,NULL,'Yan Muzacki',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(30,NULL,'Yofi Setiafan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(31,NULL,'Andri Yuniar Siswoutomo',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(32,NULL,'Anisah Sukma Insani',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(33,NULL,'Rendyana Sukmana Putra',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(34,NULL,'Dwi Puji Astuti',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(35,NULL,'Imam Taufiq',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(36,NULL,'Fredyan Putra Perdana',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(37,NULL,'Rudianto',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(38,NULL,'Risky Kusuma A',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(39,NULL,'Bobby Dynanda Pratama H',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(40,NULL,'Agam Raditya Pratama',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(41,NULL,'Herlina Ristyanti',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(42,NULL,'Mukti Autari A.P',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(43,NULL,'Tria rizky. A',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(44,NULL,'Muhammad Hasanudin',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(45,NULL,'Anugrah Pratama',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(46,NULL,'Sulistio Prabowo',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(47,NULL,'Fitria Anggraini',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(48,NULL,'Rio wahyu A',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(49,NULL,'Lailatus Sholicah',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(50,NULL,'I wayan Puja Trisna',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(51,NULL,'Ardyanto Noor Rakhwan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(52,NULL,'Risma Hadi Setiawan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(53,NULL,'Alfian Syahrizal',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(54,NULL,'Gede Candra Praba Ardi',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(55,NULL,'Edith Bertha E.A.M',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(56,NULL,'Pradita Dimas Setiawan',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(57,NULL,'Septyani Djiwandoko',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(58,NULL,'Denis Sri Mulyani',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(59,NULL,'Rizky Fajar Permana',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(60,NULL,'Marchiloy A.van Harling',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(61,NULL,'Bima Anugrah R',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(62,NULL,'Kiki Indah novitasari',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21'),(63,NULL,'Fadhillah Ahmad',NULL,NULL,NULL,NULL,NULL,NULL,'2014-07-27 04:03:21');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_guru` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES ('00001','ardha','2014-07-25 14:17:57'),('1110','ardhaherdianto','2014-07-25 16:31:42');
