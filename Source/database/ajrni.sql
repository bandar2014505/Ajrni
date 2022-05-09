-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2022 at 01:05 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idCars` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `name0` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `price` double DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `Status` int(1) NOT NULL DEFAULT 0,
  `date0` datetime NOT NULL,
  `idCompany` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `idCars`, `type`, `model`, `name0`, `color`, `price`, `file`, `Status`, `date0`, `idCompany`, `created_at`, `updated_at`) VALUES
(1, '3-2222-03', 'هيونداي', '2016', 'توسان', 'اسود', 8, '1650645476', 1, '2022-04-22 19:37:56', 1, '2022-04-22 21:28:03', '0000-00-00 00:00:00'),
(2, '03-3333-05', 'هيونداي', '2020', 'باليسايد', 'اسود', 10, '1650645573', 1, '2022-04-22 19:39:33', 1, '2022-04-22 21:28:14', '0000-00-00 00:00:00'),
(3, '03-3333-05', 'هيونداي', '2020', 'كونا', 'ابيض', 10, '1650645630', 0, '2022-04-22 19:40:30', 2, '2022-04-22 21:29:07', '0000-00-00 00:00:00'),
(4, '3-2222-03', 'هيونداي', '2016', 'اكسنت', 'ابيض', 10, '1650645656', 0, '2022-04-22 19:40:56', 2, '2022-04-22 21:29:05', '0000-00-00 00:00:00'),
(5, '3-2222-03', 'هيونداي', '2020', 'أزيرا', 'اسود', 15, '1650645684', 0, '2022-04-22 19:41:24', 1, '2022-04-22 21:26:46', '0000-00-00 00:00:00'),
(6, '3-2222-03', 'كيا', '2012', 'سورينتو', 'ابيض', 10, '1650645727', 0, '2022-04-22 19:42:07', 1, '2022-04-22 21:26:52', '0000-00-00 00:00:00'),
(7, '03-3333-05', 'كيا', '2012', 'سوول', 'ابيض', 10, '1650645750', 0, '2022-04-22 19:42:30', 2, '2022-04-22 16:47:16', '0000-00-00 00:00:00'),
(8, '3-2222-03', 'كيا', '2020', 'نيرو', 'ازرق', 8, '1650645771', 0, '2022-04-22 19:42:51', 1, '2022-04-22 16:42:51', '0000-00-00 00:00:00'),
(9, '3-2222-03', 'كيا', '2016', 'سبورتاج', 'اسود', 8, '1650645794', 0, '2022-04-22 19:43:14', 2, '2022-04-22 16:48:09', '0000-00-00 00:00:00'),
(10, '3-2222-03', 'مرسيدس', '2020', 'سي كلاس', 'سكني', 10, '1650645877', 0, '2022-04-22 19:44:37', 2, '2022-04-22 16:55:38', '0000-00-00 00:00:00'),
(11, '03-3333-05', 'مرسيدس', '2012', 'سي ال اس كلاس', 'ازرق', 8, '1650645906', 0, '2022-04-22 19:45:06', 2, '2022-04-22 16:55:23', '0000-00-00 00:00:00'),
(12, '03-3333-05', 'مرسيدس', '2016', 'ايه ام جي جي تي', 'ابيض', 10, '1650645934', 0, '2022-04-22 19:45:34', 1, '2022-04-22 16:45:34', '0000-00-00 00:00:00'),
(13, '03-3333-05', 'BMW', '2020', 'x1', 'اسود', 30, '1650645980', 0, '2022-04-22 19:46:20', 2, '2022-04-22 21:29:10', '0000-00-00 00:00:00'),
(14, '3-2222-03', 'BMW', '2020', 'x2', 'ابيض', 9, '1650663310', 0, '2022-04-22 19:46:46', 1, '2022-04-22 21:35:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages_es`
--

DROP TABLE IF EXISTS `messages_es`;
CREATE TABLE IF NOT EXISTS `messages_es` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date0` datetime DEFAULT NULL,
  `dateRead` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages_es`
--

INSERT INTO `messages_es` (`id`, `sender`, `receiver`, `message`, `fileName`, `status`, `date0`, `dateRead`) VALUES
(1, 4, 1, 'مرحبا', NULL, 1, '2022-04-22 19:56:52', '2022-04-22 20:05:20'),
(2, 4, 1, 'ممكن مساعدة؟', NULL, 1, '2022-04-22 19:56:55', '2022-04-22 20:05:20'),
(3, 4, 1, 'احتاج احجز سيارة', NULL, 1, '2022-04-22 19:57:01', '2022-04-22 20:05:20'),
(4, 4, 2, 'مرحبا', NULL, 1, '2022-04-22 19:57:11', '2022-04-23 00:27:36'),
(5, 4, 2, 'ممكن مساعدة', NULL, 1, '2022-04-22 19:57:14', '2022-04-23 00:27:36'),
(6, 4, 2, 'احتاج احجز سيارة', NULL, 1, '2022-04-22 19:57:17', '2022-04-23 00:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_es`
--

DROP TABLE IF EXISTS `notifications_es`;
CREATE TABLE IF NOT EXISTS `notifications_es` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `receiver` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `date0` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications_es`
--

INSERT INTO `notifications_es` (`id`, `receiver`, `message`, `status`, `date0`) VALUES
(26, 3, 'تمت قبول طلبك : هيونداي ، كونا ، 2020 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservations.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:59'),
(27, 3, 'تم استلام السيارة واغلاق الطلب : هيونداي ، اكسنت ، 2016 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:29:05'),
(21, 1, 'تم حجز سيارة هيونداي ، توسان ، 2016 ، اسود<a href=\"OrderCars.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:03'),
(22, 1, 'تم حجز سيارة هيونداي ، باليسايد ، 2020 ، اسود<a href=\"OrderCars.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:14'),
(23, 2, 'تم حجز سيارة هيونداي ، كونا ، 2020 ، ابيض<a href=\"OrderCars.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:24'),
(24, 2, 'تم حجز سيارة هيونداي ، اكسنت ، 2016 ، ابيض<a href=\"OrderCars.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:31'),
(25, 3, 'تمت قبول طلبك : هيونداي ، اكسنت ، 2016 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservations.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:28:57'),
(17, 4, 'تم استلام السيارة واغلاق الطلب : هيونداي ، باليسايد ، 2020 ، اسود- المقدم بتاريخ 2022-04-22<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 0, '2022-04-23 00:26:38'),
(18, 3, 'تمت قبول طلبك : كيا ، سورينتو ، 2012 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservations.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:26:44'),
(19, 4, 'تمت رفض طلبك : هيونداي ، أزيرا ، 2020 ، اسود- المقدم بتاريخ 2022-04-22<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 0, '2022-04-23 00:26:46'),
(20, 3, 'تم الغاء طلبك  : كيا ، سورينتو ، 2012 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:26:52'),
(16, 1, 'تم حجز سيارة كيا ، سورينتو ، 2012 ، ابيض<a href=\"OrderCars.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:18:32'),
(28, 3, 'تم استلام السيارة واغلاق الطلب : هيونداي ، كونا ، 2020 ، ابيض- المقدم بتاريخ 2022-04-23<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:29:07'),
(29, 3, 'تم الغاء طلبك  : BMW ، x1 ، 2020 ، اسود- المقدم بتاريخ 2022-04-22<a href=\"MyReservationsPrecedent.php\"> اضغط هنا لعرض التفاصيل </a>', 1, '2022-04-23 00:29:10'),
(30, 3, 'تمت قبول طلبك : هيونداي ، باليسايد ، 2020 ، اسود- المقدم بتاريخ 2022-04-23<a href=\"MyReservations.php\"> اضغط هنا لعرض التفاصيل </a>', 0, '2022-04-23 00:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateFrom` datetime NOT NULL,
  `dateTo` datetime NOT NULL,
  `note` varchar(5000) DEFAULT NULL,
  `date0` date NOT NULL,
  `idCars` int(255) NOT NULL,
  `userId` int(255) NOT NULL,
  `Status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `dateFrom`, `dateTo`, `note`, `date0`, `idCars`, `userId`, `Status`, `created_at`, `updated_at`) VALUES
(1, '2022-04-22 08:00:00', '2022-04-22 22:00:00', '', '2022-04-22', 1, 3, 2, '2022-04-22 16:53:41', '0000-00-00 00:00:00'),
(2, '2022-04-22 09:00:00', '2022-04-22 21:00:00', '', '2022-04-22', 10, 3, 2, '2022-04-22 16:55:38', '0000-00-00 00:00:00'),
(3, '2022-04-22 19:51:00', '2022-04-22 23:51:00', '', '2022-04-22', 11, 3, 3, '2022-04-22 16:55:23', '0000-00-00 00:00:00'),
(4, '2022-04-22 19:52:00', '2022-04-22 23:52:00', '', '2022-04-22', 13, 3, 3, '2022-04-22 21:29:10', '0000-00-00 00:00:00'),
(5, '2022-04-22 19:52:00', '2022-04-22 21:52:00', '', '2022-04-22', 14, 4, 3, '2022-04-22 16:53:33', '0000-00-00 00:00:00'),
(6, '2022-04-22 19:52:00', '2022-04-22 23:57:00', '', '2022-04-22', 2, 4, 2, '2022-04-22 21:26:38', '0000-00-00 00:00:00'),
(7, '2022-04-22 19:52:00', '2022-04-22 23:52:00', '', '2022-04-22', 5, 4, 3, '2022-04-22 21:26:46', '0000-00-00 00:00:00'),
(8, '2022-04-23 00:18:00', '2022-04-23 05:18:00', '', '2022-04-23', 6, 3, 3, '2022-04-22 21:26:52', '0000-00-00 00:00:00'),
(9, '2022-04-23 00:28:00', '2022-04-23 04:28:00', '', '2022-04-23', 1, 3, 0, '2022-04-22 21:28:03', '0000-00-00 00:00:00'),
(10, '2022-04-23 00:28:00', '2022-04-23 02:28:00', '', '2022-04-23', 2, 3, 1, '2022-04-22 21:29:53', '0000-00-00 00:00:00'),
(11, '2022-04-23 01:28:00', '2022-04-23 04:28:00', '', '2022-04-23', 3, 3, 2, '2022-04-22 21:29:07', '0000-00-00 00:00:00'),
(12, '2022-04-23 00:28:00', '2022-04-23 06:28:00', '', '2022-04-23', 4, 3, 2, '2022-04-22 21:29:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `idNumber` varchar(10) NOT NULL,
  `fristName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permissions` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `idNumber`, `fristName`, `Email`, `phoneNumber`, `password`, `permissions`) VALUES
(1, '1020304050', 'شركة السعودية', 'company1@gmail.com', '0592520023', '123456789', 1),
(2, '1020304050', 'شركة الرائد', 'company2@gmail.com', '123456789', '123456789', 1),
(3, '1020304050', 'بندر', 'customer1@gmail.com', '059123456789', '123456789', 2),
(4, '1020304050', 'علي تامر', 'customer2@gmail.com', '059123456789', '123456789', 2),
(5, '1020304050', 'تامر', 'admin@gmail.com', '0592520023', '123456789', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_messages2_es`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `view_messages2_es`;
CREATE TABLE IF NOT EXISTS `view_messages2_es` (
`id` int(255)
,`sender` int(255)
,`receiver` int(255)
,`message` varchar(500)
,`fileName` varchar(255)
,`date0` datetime
,`nameSender` varchar(255)
,`nameReceiver` varchar(255)
,`dateRead` datetime
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_messages_es`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `view_messages_es`;
CREATE TABLE IF NOT EXISTS `view_messages_es` (
`id` int(255)
,`sender` int(255)
,`receiver` int(255)
,`message` varchar(500)
,`date0` datetime
,`fileName` varchar(255)
,`nameSender` varchar(255)
,`dateRead` datetime
);

-- --------------------------------------------------------

--
-- Structure for view `view_messages2_es`
--
DROP TABLE IF EXISTS `view_messages2_es`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_messages2_es`  AS  select `view_messages_es`.`id` AS `id`,`view_messages_es`.`sender` AS `sender`,`view_messages_es`.`receiver` AS `receiver`,`view_messages_es`.`message` AS `message`,`view_messages_es`.`fileName` AS `fileName`,`view_messages_es`.`date0` AS `date0`,`view_messages_es`.`nameSender` AS `nameSender`,`users`.`fristName` AS `nameReceiver`,`view_messages_es`.`dateRead` AS `dateRead` from (`view_messages_es` left join `users` on(`view_messages_es`.`receiver` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_messages_es`
--
DROP TABLE IF EXISTS `view_messages_es`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_messages_es`  AS  select `messages_es`.`id` AS `id`,`messages_es`.`sender` AS `sender`,`messages_es`.`receiver` AS `receiver`,`messages_es`.`message` AS `message`,`messages_es`.`date0` AS `date0`,`messages_es`.`fileName` AS `fileName`,`users`.`fristName` AS `nameSender`,`messages_es`.`dateRead` AS `dateRead` from (`messages_es` left join `users` on(`messages_es`.`sender` = `users`.`id`)) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
