-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2022 at 09:50 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `ajrni`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `cars_plate` varchar(10) NOT NULL,
  `the_offices_id` int(10) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `make` varchar(50) NOT NULL,
  `number_of_kilos` int(100) NOT NULL,
  `price` double NOT NULL,
  `car_availability` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`cars_plate`),
  KEY `the_offices_id` (`the_offices_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `contract_no` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `cars_plate` varchar(10) NOT NULL,
  `customers_no` int(10) NOT NULL,
  `year` date NOT NULL,
  `number_of_kilos` int(100) NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`contract_no`),
  KEY `customer_id` (`customer_id`),
  KEY `cars_plate` (`cars_plate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rental offices`
--

DROP TABLE IF EXISTS `rental offices`;
CREATE TABLE IF NOT EXISTS `rental offices` (
  `the_offices_id` int(10) NOT NULL,
  `offices_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`the_offices_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fristName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fristName`, `lastName`, `Email`, `phoneNumber`, `password`, `permissions`) VALUES
(1, 'علي', 'الخطيب', 'test1@gmail.com', '059123456789', '123456789', 1),
(2, 'تامر', 'محسن', 'test2@gmail.com', '0548451263547', '123456789', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`the_offices_id`) REFERENCES `rental offices` (`the_offices_id`) ON UPDATE CASCADE;

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`cars_plate`) REFERENCES `cars` (`cars_plate`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
