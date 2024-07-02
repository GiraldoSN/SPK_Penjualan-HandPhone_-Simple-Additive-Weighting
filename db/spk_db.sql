-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `saw_alternatives`
--

CREATE TABLE `saw_alternatives` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `saw_alternatives`
--

INSERT INTO `saw_alternatives` (`id_alternative`, `name`) VALUES
(1, 'VIVO V30'),
(18, 'Poco X6 5G'),
(17, 'Poco X6 PRO 5G'),
(16, 'Redmi Note 13 4G'),
(15, 'Samsung Galaxy A35 5G'),
(11, 'Realme C33'),
(12, 'Samsung galaxy A55'),
(13, 'Realme C65'),
(14, 'realme c31'),
(19, 'Oppo A78 5G'),
(20, 'Vivo Y100 5G'),
(21, 'Oppo Reno 11 5G'),
(22, 'Samsung Galaxy A15'),
(23, 'Samsung Galaxy A15 5G'),
(24, 'Samsung Galaxy Z Flip 5G'),
(25, 'VIVO V29E'),
(26, 'Oppo FIND N3'),
(27, 'Oppo Find N3 FLIP'),
(28, 'INFINIX ZERO 30'),
(29, 'Xiomi 13T'),
(30, 'Vivo V29 5G'),
(31, 'Asus ROG Phone 7'),
(32, 'POCO X5 PRO  5G'),
(33, 'Realme 11 PRO 5G'),
(34, 'Infinix GT 10 PRO'),
(35, 'Samsung Galaxy Z Flip 6'),
(36, 'Infinix Smart 6 NFC'),
(37, 'Realme Narzo 50 A prime '),
(38, 'Realme Note 50'),
(39, 'Realme Narzo Note 50 I Prime '),
(40, 'Realme C51'),
(41, 'Samsung Galaxy A50s'),
(42, 'Vivo Y36'),
(43, 'Oppo A77S'),
(44, 'Oppo A96'),
(45, 'Samsung Galaxy A23'),
(46, 'Vivo Y21T'),
(47, 'Samsung Galaxy  A53 5G'),
(48, 'Samsung A33 5G'),
(49, 'Samsung Galaxy A21s'),
(50, 'Samsung Galaxy A13'),
(51, 'Samsung Galaxy A12'),
(52, 'Samsung Galaxy M33 5G'),
(53, 'Samsung Galaxy M12'),
(54, 'Samsung Galaxy A14'),
(55, 'Samsung Galaxy A54 5G'),
(56, 'Samsung Galaxy M14 5G'),
(57, 'Samsung A24 5G'),
(58, 'Samsung Galaxy A34 5G'),
(59, 'Samsung Galaxy A04e');

-- --------------------------------------------------------

--
-- Table structure for table `saw_criterias`
--

CREATE TABLE `saw_criterias` (
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `saw_criterias`
--

INSERT INTO `saw_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
(1, 'Harga', 25, 'cost'),
(2, 'Ram', 25, 'benefit'),
(3, 'Internal', 15, 'benefit'),
(4, 'chipset', 20, 'benefit'),
(5, 'camera', 15, 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `saw_evaluations`
--

CREATE TABLE `saw_evaluations` (
  `id_alternative` smallint(5) UNSIGNED NOT NULL,
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `value` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `saw_evaluations`
--

INSERT INTO `saw_evaluations` (`id_alternative`, `id_criteria`, `value`) VALUES
(18, 3, 5),
(18, 4, 2),
(18, 5, 5),
(20, 1, 2),
(20, 2, 4),
(18, 2, 5),
(18, 1, 2),
(17, 5, 5),
(17, 4, 1),
(17, 3, 5),
(17, 2, 5),
(17, 1, 1),
(16, 5, 5),
(16, 4, 2),
(16, 3, 5),
(16, 2, 4),
(16, 1, 2),
(15, 5, 5),
(15, 4, 4),
(15, 3, 4),
(15, 2, 4),
(15, 1, 1),
(1, 5, 5),
(1, 4, 2),
(1, 3, 4),
(1, 1, 1),
(1, 2, 4),
(14, 5, 5),
(14, 4, 4),
(14, 3, 4),
(14, 2, 4),
(13, 1, 2),
(13, 2, 4),
(13, 3, 5),
(13, 4, 1),
(12, 1, 1),
(12, 2, 4),
(12, 3, 4),
(12, 4, 4),
(12, 5, 5),
(11, 5, 5),
(11, 4, 3),
(11, 3, 3),
(11, 2, 2),
(11, 1, 3),
(13, 5, 5),
(14, 1, 4),
(20, 3, 4),
(20, 4, 2),
(20, 5, 5),
(21, 1, 1),
(21, 2, 4),
(21, 3, 5),
(21, 4, 1),
(21, 5, 5),
(22, 1, 2),
(22, 2, 4),
(22, 3, 4),
(22, 4, 1),
(22, 5, 5),
(23, 1, 2),
(23, 2, 4),
(23, 3, 4),
(23, 4, 1),
(23, 5, 5),
(24, 1, 1),
(24, 2, 4),
(24, 3, 5),
(24, 4, 2),
(24, 5, 5),
(25, 1, 2),
(25, 2, 4),
(25, 3, 5),
(25, 4, 2),
(25, 5, 5),
(26, 1, 1),
(26, 2, 5),
(26, 3, 5),
(26, 4, 2),
(26, 5, 5),
(27, 1, 1),
(27, 2, 5),
(27, 3, 5),
(27, 4, 1),
(27, 5, 5),
(28, 1, 2),
(28, 2, 4),
(28, 3, 5),
(28, 5, 5),
(29, 1, 1),
(29, 2, 5),
(29, 3, 5),
(29, 4, 1),
(29, 5, 5),
(30, 1, 1),
(30, 2, 4),
(30, 3, 5),
(30, 4, 2),
(30, 5, 5),
(31, 1, 1),
(31, 2, 5),
(31, 3, 5),
(31, 4, 4),
(31, 5, 5),
(32, 1, 2),
(32, 2, 3),
(32, 3, 4),
(32, 4, 2),
(32, 5, 5),
(33, 1, 2),
(33, 2, 4),
(33, 3, 5),
(33, 4, 1),
(33, 5, 5),
(34, 1, 2),
(34, 2, 4),
(34, 3, 5),
(34, 4, 1),
(34, 5, 5),
(35, 1, 1),
(35, 2, 5),
(35, 3, 5),
(35, 4, 2),
(35, 5, 5),
(36, 1, 4),
(36, 2, 1),
(36, 3, 2),
(36, 4, 3),
(36, 5, 1),
(37, 1, 4),
(37, 2, 2),
(37, 3, 3),
(37, 4, 3),
(37, 5, 5),
(38, 1, 3),
(38, 2, 2),
(38, 3, 4),
(38, 4, 3),
(38, 5, 2),
(39, 1, 4),
(39, 2, 1),
(39, 3, 2),
(39, 4, 3),
(39, 5, 1),
(40, 1, 4),
(40, 2, 2),
(40, 3, 3),
(40, 4, 3),
(40, 5, 5),
(41, 1, 2),
(41, 2, 3),
(41, 3, 4),
(41, 4, 2),
(41, 5, 5),
(42, 1, 2),
(42, 2, 4),
(42, 3, 5),
(42, 4, 2),
(42, 5, 5),
(43, 1, 2),
(43, 2, 4),
(43, 3, 4),
(43, 4, 2),
(43, 5, 5),
(44, 1, 2),
(44, 2, 4),
(44, 3, 5),
(44, 4, 2),
(44, 5, 5),
(45, 1, 2),
(45, 2, 3),
(45, 3, 4),
(45, 4, 2),
(45, 5, 5),
(46, 1, 2),
(46, 2, 3),
(46, 3, 4),
(46, 4, 2),
(46, 5, 5),
(47, 1, 1),
(47, 2, 4),
(47, 3, 4),
(47, 4, 4),
(47, 5, 5),
(48, 1, 1),
(48, 2, 3),
(48, 3, 4),
(48, 4, 4),
(48, 5, 5),
(49, 1, 2),
(49, 2, 1),
(49, 3, 2),
(49, 4, 4),
(49, 5, 5),
(50, 1, 4),
(50, 2, 2),
(50, 3, 4),
(50, 4, 4),
(50, 5, 5),
(51, 1, 3),
(51, 2, 2),
(51, 3, 3),
(51, 4, 4),
(51, 5, 5),
(52, 1, 2),
(52, 2, 4),
(52, 3, 4),
(52, 4, 4),
(52, 5, 5),
(53, 1, 3),
(53, 2, 1),
(53, 3, 2),
(53, 4, 4),
(53, 5, 5),
(54, 1, 2),
(54, 2, 2),
(54, 3, 4),
(54, 4, 4),
(54, 5, 5),
(55, 1, 1),
(55, 2, 4),
(55, 3, 4),
(55, 4, 4),
(55, 5, 5),
(56, 1, 2),
(56, 2, 2),
(56, 3, 3),
(56, 4, 4),
(56, 5, 5),
(57, 1, 2),
(57, 2, 4),
(57, 3, 4),
(57, 4, 1),
(57, 5, 5),
(58, 1, 1),
(58, 2, 4),
(58, 3, 4),
(58, 4, 1),
(58, 5, 5),
(59, 1, 3),
(59, 2, 1),
(59, 3, 3),
(59, 4, 1),
(59, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `saw_users`
--

CREATE TABLE `saw_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `saw_users`
--

INSERT INTO `saw_users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saw_alternatives`
--
ALTER TABLE `saw_alternatives`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `saw_criterias`
--
ALTER TABLE `saw_criterias`
  ADD PRIMARY KEY (`id_criteria`);

--
-- Indexes for table `saw_evaluations`
--
ALTER TABLE `saw_evaluations`
  ADD PRIMARY KEY (`id_alternative`,`id_criteria`);

--
-- Indexes for table `saw_users`
--
ALTER TABLE `saw_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saw_alternatives`
--
ALTER TABLE `saw_alternatives`
  MODIFY `id_alternative` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `saw_users`
--
ALTER TABLE `saw_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
