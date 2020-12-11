-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2020 at 02:56 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lottery_baby`
--

-- --------------------------------------------------------

--
-- Table structure for table `lottery`
--

DROP TABLE IF EXISTS `lottery`;
CREATE TABLE IF NOT EXISTS `lottery` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `LName` varchar(40) DEFAULT NULL,
  `Limage` varchar(300) DEFAULT NULL,
  `wining_price` varchar(20) DEFAULT NULL,
  `next_draw_date` datetime DEFAULT NULL,
  `intro` text,
  `price` varchar(30) DEFAULT NULL,
  `Winner_Name` varchar(50) DEFAULT NULL,
  `no1` varchar(10) DEFAULT NULL,
  `no2` varchar(10) DEFAULT NULL,
  `no3` varchar(10) DEFAULT NULL,
  `no4` varchar(10) DEFAULT NULL,
  `pw1` varchar(10) DEFAULT NULL,
  `no5` varchar(10) DEFAULT NULL,
  `totalNumber` varchar(5) DEFAULT NULL,
  `totalPowerballs` varchar(5) DEFAULT NULL,
  `no6` varchar(4) DEFAULT NULL,
  `no7` varchar(4) DEFAULT NULL,
  `pw2` varchar(5) DEFAULT NULL,
  `pw3` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lottery`
--

INSERT INTO `lottery` (`id`, `LName`, `Limage`, `wining_price`, `next_draw_date`, `intro`, `price`, `Winner_Name`, `no1`, `no2`, `no3`, `no4`, `pw1`, `no5`, `totalNumber`, `totalPowerballs`, `no6`, `no7`, `pw2`, `pw3`) VALUES
(18, 'MEGAMILLIONS', 'uploads/IMG_1008.PNG', '560000', '2020-12-01 01:00:00', ' MegaMillions is the top lottery prizes in world history, which draw the attention of players from all around the world.   ', '500', '', '', '', '', '', '', '', '7', '2', '', '', '', ''),
(17, 'POWER BALL', 'uploads/IMG_1006.PNG', '500000', '2020-12-01 01:00:00', ' We all love EuroMillions! Its easy to play: just pick 5 numbers from 50 plus 2 Lucky Star numbers from 12.       ', '5000', 'haseeb', '', '', '', '', '', '', '7', '2', '', '', '', ''),
(19, 'EUROMILLIONS', 'uploads/IMG_1009.PNG', '560000', '2021-12-01 01:00:00', ' We all love EuroMillions! Its easy to play: just pick 5 numbers from 50, plus 2 Lucky Star numbers from 12.', '11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(20, 'SUPERENALOTTO', 'uploads/IMG_1010.PNG', '560000', '2020-12-01 01:01:00', ' SuperEnalotto is the popular lottery in Italy. You need to do is pick your lucky numbers, weâ€™ll take care of the rest.', '56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(21, ' Euro jackpot', 'uploads/IMG_1011.PNG', '500000', '2020-12-01 01:00:00', ' Eurojackpot is a relatively new lottery. It was organized for the first time in 2012. Its simple, safe, and convenient.  ', '56', '', '', '', '', '', '', '', '7', '2', NULL, NULL, NULL, NULL),
(22, 'SUPER LOTTO PLUS', 'uploads/IMG_1012.PNG', '560000', '2020-12-01 13:00:00', ' SuperEnalotto is a popular lottery in Italy. You need to do is pick your lucky numbers, we will take care of the rest ', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(23, 'LOTTO  AMERCIA', 'uploads/IMG_1013.PNG', '560000', '2020-12-01 01:00:00', ' We all love Lotto America ! Its easy to play: just pick 5 numbers from 50, plus 2 Lucky Star numbers from 12. ', '50', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(24, 'La Primitiva ', 'uploads/IMG_1014.PNG', '500000', '2020-12-09 04:25:00', '  La Primitiva pays out the largest lottery jackpots in the world. Draws are held on Wednesdays and Saturdays.', '70', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(25, 'Power Ball ', 'uploads/IMG_1015.PNG', '180000', '2021-02-11 12:00:00', ' Powerball pays out the largest lottery jackpots in the world. Draws are held on Wednesdays and Saturdays.', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(26, 'OZ LOTTTO', 'uploads/IMG_1016.PNG', '50000', '2020-12-01 14:00:00', ' OZ LOTTTO is a popular lottery in Italy. You need to do is pick your lucky numbers, weâ€™ll take care of the rest. ', '31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(27, ' Superstar Super Enalotto ', 'uploads/IMG_1017.PNG', '90000', '2020-12-01 01:00:00', 'Superstar Super Enalotto is the top lottery prizes in world history, which draws the attention of players from all around the world. ', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(28, 'EL Gordo ', 'uploads/IMG_1018.PNG', '120000', '2020-12-05 15:59:00', ' Superstar Super Enalotto is the top lottery prizes in world history, which draws the attention of players from all around the world.', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(29, 'NEW YOTK LOTTO ', 'uploads/IMG_1019.PNG', '70900', '2021-01-01 09:57:00', ' NEW YOTK LOTTO Is the top lottery prizes in world history, which draws the attention of players from all around the world.', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(30, 'AUSTRIA LOTTO ', 'uploads/IMG_1020.PNG', '60000', '2020-12-01 01:00:00', ' AUSTRIA LOTTO pays out the largest lottery jackpots in the world. Draws are held on Wednesdays and Saturdays. ', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(31, '649 LOTTO ', 'uploads/IMG_1021.PNG', '69000', '2021-03-05 21:57:00', ' 649 LOTTO  pays out the largest lottery jackpots in the world. Draws are held on Wednesdays and Saturdays.', '50', 'loto', '1', '2', '3', '4', '6', '5', '7', '2', NULL, NULL, NULL, NULL),
(32, 'LOTTO IRELAND ', 'uploads/IMG_1022.PNG', '90000', '2020-12-28 13:58:00', ' LOTTO IRELAND Is the national lottery of the IRELAND, available locally in the lottery agencies around the country.', '60', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(33, 'SATURDAY LOTTO ', 'uploads/IMG_1023.PNG', '500000', '2020-12-02 01:00:00', ' SATURDAY LOTTO is the national lottery of the United Kingdom, available locally in the lottery agencies around the country. ', '40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(34, 'UK LOTTO ', 'uploads/IMG_1024.PNG', '50000', '2020-12-01 01:00:00', ' UK LOTTO Is the national lottery of the United Kingdom, available locally in the lottery agencies around the country. ', '80', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(35, 'BONOLOTO', 'uploads/IMG_1025.PNG', '20900', '2021-01-29 17:01:00', ' BONOLOTTO is the national lottery of the United Kingdom, available locally in the lottery agencies around the country.', '30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL),
(36, 'LOTTO 6 49 ', 'uploads/IMG_1026.PNG', '70900', '2020-12-01 01:01:00', ' LOTTO 6 49 is the national lottery of the United Kingdom, available locally in the lottery agencies around the country. ', '90', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', '2', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `timer` datetime DEFAULT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`timer`, `id`) VALUES
('2020-12-01 01:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `password`) VALUES
(1, 'syed', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `winning_data`
--

DROP TABLE IF EXISTS `winning_data`;
CREATE TABLE IF NOT EXISTS `winning_data` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `lot_id` varchar(10) DEFAULT NULL,
  `draw_date` date DEFAULT NULL,
  `winning_number` varchar(10) DEFAULT NULL,
  `other_numbers` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
