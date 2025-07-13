-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.5 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table phpdemo.notes
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table phpdemo.notes: ~14 rows (approximately)
INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES
	(24, 'Jojo First Note', 5),
	(25, 'Second Note', 5),
	(26, 'Third Note is Updated', 5),
	(27, 'Fourth Note', 5),
	(28, 'Fifth Note is Updated', 5),
	(30, 'Sixth Note', 5),
	(31, 'Abdul First Note', 6),
	(32, 'Second Note is Updated', 6),
	(33, 'Andy First Note', 7),
	(34, 'Second Note', 7),
	(35, 'Third Note is Updated', 7),
	(37, 'Fourth Note', 7),
	(38, 'Fifth Note', 7),
	(39, 'Third Note', 6);

-- Dumping structure for table phpdemo.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table phpdemo.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(5, 'Jojo', 'jojo@example.com', '$2y$12$OkyZXSlAXkYisYtptwUS7ebOyyHE25B98NtgArpKuMNs7xVDSGDBa'),
	(6, 'Abdul', 'abdul@example.com', '$2y$12$5WFo793Heoxr1OmlhejlEe89br4XZS0mv6VwNazyO2TQOGTpo2b8a'),
	(7, 'Andy', 'andy@example.com', '$2y$12$l4WdfAPgf20rMIXe.HwFHuDjo72mSFavJR/TtW86mGpEiRkcUBhCW');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
