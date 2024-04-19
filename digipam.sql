-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pamsimas


-- Dumping structure for table pamsimas.harga
CREATE TABLE IF NOT EXISTS `harga` (
  `HargaId` int(11) NOT NULL AUTO_INCREMENT,
  `HargaKategori` varchar(50) DEFAULT NULL,
  `HargaDeskripsi` varchar(200) DEFAULT NULL,
  `HargaMinKubik` int(11) DEFAULT NULL,
  `HargaMinPrice` int(11) DEFAULT NULL,
  `HargaPerKubik` int(11) DEFAULT NULL,
  PRIMARY KEY (`HargaId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.harga: ~1 rows (approximately)
INSERT INTO `harga` (`HargaId`, `HargaKategori`, `HargaDeskripsi`, `HargaMinKubik`, `HargaMinPrice`, `HargaPerKubik`) VALUES
	(1, 'perumahan', 'Khusus Untuk Wilayah Perumahan', 10, 11000, 1000);

-- Dumping structure for table pamsimas.hargadetail
CREATE TABLE IF NOT EXISTS `hargadetail` (
  `HargaDetailId` int(11) DEFAULT NULL,
  `HargaId` int(11) DEFAULT NULL,
  `HargaDetailStart` int(11) DEFAULT NULL,
  `HargaDetailEnd` int(11) DEFAULT NULL,
  `HargaDetailPrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.hargadetail: ~0 rows (approximately)

-- Dumping structure for table pamsimas.info
CREATE TABLE IF NOT EXISTS `info` (
  `InfoId` int(11) NOT NULL AUTO_INCREMENT,
  `InfoHeader` varchar(50) DEFAULT NULL,
  `InfoDeskripsi` varchar(200) DEFAULT NULL,
  `InfoUsersDetail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`InfoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.info: ~0 rows (approximately)

-- Dumping structure for table pamsimas.pelanggan
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `PelangganId` int(11) NOT NULL AUTO_INCREMENT,
  `PelangganCode` varchar(50) DEFAULT NULL,
  `PelangganName` varchar(50) DEFAULT NULL,
  `PelangganEmail` varchar(50) DEFAULT NULL,
  `PelangganNoHp` varchar(50) DEFAULT NULL,
  `PelangganAddress` varchar(200) DEFAULT NULL,
  `PelangganIDMesin` varchar(50) DEFAULT NULL,
  `PetugasId` int(11) DEFAULT NULL,
  `HargaId` int(11) DEFAULT NULL,
  `PelangganAddressMap` varchar(200) DEFAULT NULL,
  `PelangganAddressLat` decimal(10,8) DEFAULT NULL,
  `PelangganAddressLng` decimal(11,8) DEFAULT NULL,
  `PelangganPassword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PelangganId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.pelanggan: ~0 rows (approximately)
INSERT INTO `pelanggan` (`PelangganId`, `PelangganCode`, `PelangganName`, `PelangganEmail`, `PelangganNoHp`, `PelangganAddress`, `PelangganIDMesin`, `PetugasId`, `HargaId`, `PelangganAddressMap`, `PelangganAddressLat`, `PelangganAddressLng`, `PelangganPassword`) VALUES
	(1, 'DGP00001', 'fauzan', 'fauzancaren@gmail.com', '0895352992663', 'Perumahan Taman Mulya Angkasa, Blok D26 Kab Tangerang', '123456789', 1, 1, 'Tandai lokasi dalam peta', -6.26570759, 106.77526944, 'vwxyzA');

-- Dumping structure for table pamsimas.pemakaian
CREATE TABLE IF NOT EXISTS `pemakaian` (
  `PemakaianId` int(11) DEFAULT NULL,
  `PemakaianIDMesin` varchar(50) DEFAULT NULL,
  `PemakaianTanggal` datetime DEFAULT NULL,
  `PemakaianMeterAkhir` decimal(10,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.pemakaian: ~0 rows (approximately)

-- Dumping structure for table pamsimas.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `PetugasId` int(11) NOT NULL AUTO_INCREMENT,
  `PetugasCode` varchar(50) DEFAULT NULL,
  `PetugasName` varchar(50) DEFAULT NULL,
  `PetugasNoHp` varchar(50) DEFAULT NULL,
  `PetugasEmail` varchar(100) DEFAULT NULL,
  `PetugasPassword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PetugasId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.petugas: ~0 rows (approximately)
INSERT INTO `petugas` (`PetugasId`, `PetugasCode`, `PetugasName`, `PetugasNoHp`, `PetugasEmail`, `PetugasPassword`) VALUES
	(1, 'ID00001', 'admin', '012345678910', 'admin@gmail.com', 'vwxyzA');

-- Dumping structure for table pamsimas.users
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `userpassword` varchar(50) DEFAULT NULL,
  `useremail` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table pamsimas.users: ~2 rows (approximately)
INSERT INTO `users` (`userid`, `username`, `userpassword`, `useremail`, `role`) VALUES
	(1, 'admin', '69hdi', 'admin@pamsimas.com', 'admin'),
	(2, 'client', '8gd0io', 'client@pamsimas.com', 'client');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
