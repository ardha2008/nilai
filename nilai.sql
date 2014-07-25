# Host: localhost  (Version: 5.5.32)
# Date: 2014-07-26 06:16:27
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES ('1110','Budi','Surabaya','2014-07-25 16:31:42');

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(2) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES (03,'1 IPA 1','2014-07-26 04:58:00'),(04,'1 IPA 2','2014-07-26 04:58:06'),(05,'1 IPA 3','2014-07-26 04:58:10'),(06,'1 IPA 4','2014-07-26 04:58:14'),(07,'1 IPA 5','2014-07-26 04:58:18'),(08,'1 IPS 1','2014-07-26 04:58:22'),(09,'1 IPS 2','2014-07-26 04:58:25'),(10,'1 IPS 3','2014-07-26 04:58:33');

#
# Structure for table "mapel"
#

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `id_mapel` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "mapel"
#

INSERT INTO `mapel` VALUES (004,'Ekonomi'),(005,'Matematika'),(006,'Biologi'),(007,'Bahasa Indonesia'),(008,'Fisika'),(009,'Kimia'),(010,'Bimbingan Konseling'),(011,'Bahasa Inggris');

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
  `id_siswa` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES (0001,'Ardha Herdianto','Surabaya\r\n','2014-07-25 16:06:36'),(0002,'Stefanus Wicak P',NULL,'2014-07-26 05:58:25'),(0003,'Aditya Yoga',NULL,'2014-07-26 05:58:25'),(0004,'Kayodi Sikumbang',NULL,'2014-07-26 05:58:25'),(0005,'Taufany Hario',NULL,'2014-07-26 05:58:25'),(0006,'Imam Baihaqie Assyidiqi',NULL,'2014-07-26 05:58:25'),(0007,'Ferry Afrianto',NULL,'2014-07-26 05:58:25'),(0008,'Rakhmat Ikhsanil T',NULL,'2014-07-26 05:58:25'),(0009,'M. Irfan',NULL,'2014-07-26 05:58:25'),(0010,'Frans Chornelius Marpaung',NULL,'2014-07-26 05:58:25'),(0011,'Oktyawan Aditya',NULL,'2014-07-26 05:58:25'),(0012,'Sandyana W. Pradita',NULL,'2014-07-26 05:58:25'),(0013,'Roy Wiratma Putra',NULL,'2014-07-26 05:58:25'),(0014,'Abdan Khalagas',NULL,'2014-07-26 05:58:25'),(0015,'Dian Afriansyah',NULL,'2014-07-26 05:58:25'),(0016,'Moh Hisyam S',NULL,'2014-07-26 05:58:25'),(0017,'Rudy Hermawan',NULL,'2014-07-26 05:58:25');

#
# Structure for table "siswa_kelas"
#

DROP TABLE IF EXISTS `siswa_kelas`;
CREATE TABLE `siswa_kelas` (
  `id_siswa` varchar(255) NOT NULL DEFAULT '',
  `id_kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "siswa_kelas"
#


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
