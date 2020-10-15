-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 15, 2020 at 06:17 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `balance` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `balance`) VALUES
('Aarti', 'aarti@gmail.com', '40000'),
('Amrita', 'amrita@gmail.com', '79590'),
('Madhavi', 'madhavi@gmail.com', '50400'),
('Pallavi', 'pallavi@gmail.com', '40000'),
('Rahul', 'rahul@gmail.com', '45800'),
('Revati', 'revatii@gmail.com', '60450'),
('Samarth', 'samarth@gmail.com', '67000'),
('Shivanya', 'shivanya@gmail.com', '38100'),
('Swati', 'swati@gmail.com', '54850'),
('Thomas', 'thomas@gmail.com', '74100');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sendername` varchar(50) NOT NULL,
  `receivername` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sendername`, `receivername`, `amount`) VALUES
(1, 'Rahul', 'Swati', 150),
(2, 'Thomas', 'Shivanya', 100),
(3, 'Rahul', 'Revati', 250),
(4, 'Amrita', 'Pallavi', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
