-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 مارس 2022 الساعة 20:54
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydata`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cars`
--

CREATE TABLE `cars` (
  `car's_plate` varchar(10) NOT NULL,
  `the_office's_id` int(10) NOT NULL,
  `model` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `make` varchar(50) NOT NULL,
  `number_of_kilos` int(100) NOT NULL,
  `price` double NOT NULL,
  `car_availability` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `contracts`
--

CREATE TABLE `contracts` (
  `Contract_no` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `car's_plate` varchar(10) NOT NULL,
  `customer's_no` int(10) NOT NULL,
  `year` date NOT NULL,
  `number_of_kilos` int(100) NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `customer's`
--

CREATE TABLE `customer's` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `rental offices`
--

CREATE TABLE `rental offices` (
  `the_office's_id` int(10) NOT NULL,
  `office's_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car's_plate`),
  ADD KEY `office's` (`the_office's_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`Contract_no`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `car's_plate` (`car's_plate`);

--
-- Indexes for table `customer's`
--
ALTER TABLE `customer's`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rental offices`
--
ALTER TABLE `rental offices`
  ADD PRIMARY KEY (`the_office's_id`);

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`the_office's_id`) REFERENCES `rental offices` (`the_office's_id`) ON UPDATE CASCADE;

--
-- القيود للجدول `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer's` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`car's_plate`) REFERENCES `cars` (`car's_plate`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
