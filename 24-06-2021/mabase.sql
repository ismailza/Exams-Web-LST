-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220506.44a5cb2d56
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2022 at 12:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabase`
--
CREATE DATABASE IF NOT EXISTS `mabase` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mabase`;

-- --------------------------------------------------------

--
-- Table structure for table `achat`
--

CREATE TABLE `achat` (
  `id_achat` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `qte` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `achat`
--

INSERT INTO `achat` (`id_achat`, `id_client`, `id_article`, `qte`, `date`) VALUES
(20, 1, 3, 2, '2022-06-15'),
(21, 1, 2, 2, '2022-06-15'),
(22, 1, 3, 2, '2022-06-15'),
(23, 1, 2, 2, '2022-06-15'),
(24, 1, 3, 2, '2022-06-15'),
(25, 1, 2, 2, '2022-06-15'),
(26, 1, 3, 2, '2022-06-15'),
(27, 1, 2, 2, '2022-06-15'),
(28, 1, 3, 2, '2022-06-15'),
(29, 1, 2, 2, '2022-06-15'),
(30, 1, 3, 2, '2022-06-15'),
(31, 1, 2, 2, '2022-06-15'),
(32, 1, 3, 2, '2022-06-15'),
(33, 1, 2, 2, '2022-06-15'),
(34, 1, 3, 2, '2022-06-15'),
(35, 1, 2, 2, '2022-06-15'),
(36, 1, 3, 2, '2022-06-15'),
(37, 1, 2, 2, '2022-06-15'),
(38, 1, 3, 2, '2022-06-15'),
(39, 1, 2, 2, '2022-06-15'),
(40, 1, 3, 2, '2022-06-15'),
(41, 1, 2, 2, '2022-06-15'),
(42, 1, 3, 2, '2022-06-15'),
(43, 1, 2, 2, '2022-06-15'),
(44, 1, 3, 2, '2022-06-15'),
(45, 1, 2, 2, '2022-06-15'),
(46, 1, 3, 2, '2022-06-15'),
(47, 1, 2, 2, '2022-06-15'),
(48, 1, 3, 2, '2022-06-15'),
(49, 1, 2, 2, '2022-06-15'),
(50, 1, 3, 2, '2022-06-15'),
(51, 1, 2, 2, '2022-06-15'),
(52, 1, 3, 2, '2022-06-15'),
(53, 1, 2, 2, '2022-06-15'),
(54, 1, 3, 2, '2022-06-15'),
(55, 1, 2, 2, '2022-06-15'),
(56, 1, 3, 2, '2022-06-15'),
(57, 1, 2, 2, '2022-06-15'),
(58, 1, 3, 2, '2022-06-15'),
(59, 1, 2, 2, '2022-06-15'),
(60, 1, 3, 2, '2022-06-15'),
(61, 1, 2, 2, '2022-06-15'),
(62, 1, 3, 2, '2022-06-15'),
(63, 1, 2, 2, '2022-06-15'),
(64, 1, 3, 2, '2022-06-15'),
(65, 1, 2, 2, '2022-06-15'),
(66, 1, 3, 2, '2022-06-15'),
(67, 1, 2, 2, '2022-06-15'),
(68, 1, 3, 2, '2022-06-15'),
(69, 1, 2, 2, '2022-06-15'),
(70, 1, 3, 2, '2022-06-15'),
(71, 1, 2, 2, '2022-06-15'),
(72, 1, 3, 2, '2022-06-15'),
(73, 1, 2, 2, '2022-06-15'),
(74, 1, 3, 2, '2022-06-15'),
(75, 1, 2, 2, '2022-06-15'),
(76, 1, 3, 2, '2022-06-15'),
(77, 1, 2, 2, '2022-06-15'),
(78, 1, 3, 2, '2022-06-15'),
(79, 1, 2, 2, '2022-06-15'),
(80, 1, 3, 2, '2022-06-15'),
(81, 1, 2, 2, '2022-06-15'),
(82, 1, 3, 2, '2022-06-15'),
(83, 1, 2, 2, '2022-06-15'),
(84, 1, 3, 2, '2022-06-15'),
(85, 1, 2, 2, '2022-06-15'),
(86, 1, 3, 2, '2022-06-15'),
(87, 1, 2, 2, '2022-06-15'),
(88, 1, 3, 2, '2022-06-15'),
(89, 1, 2, 2, '2022-06-15'),
(90, 1, 3, 2, '2022-06-15'),
(91, 1, 2, 2, '2022-06-15'),
(92, 1, 3, 2, '2022-06-15'),
(93, 1, 2, 2, '2022-06-15'),
(94, 1, 3, 2, '2022-06-15'),
(95, 1, 2, 2, '2022-06-15'),
(96, 1, 3, 2, '2022-06-15'),
(97, 1, 2, 2, '2022-06-15'),
(98, 1, 3, 2, '2022-06-15'),
(99, 1, 2, 2, '2022-06-15'),
(100, 1, 3, 2, '2022-06-15'),
(101, 1, 2, 2, '2022-06-15'),
(102, 1, 3, 2, '2022-06-15'),
(103, 1, 2, 2, '2022-06-15'),
(104, 1, 3, 2, '2022-06-15'),
(105, 1, 2, 2, '2022-06-15'),
(106, 1, 3, 2, '2022-06-15'),
(107, 1, 2, 2, '2022-06-15'),
(108, 1, 3, 2, '2022-06-15'),
(109, 1, 2, 2, '2022-06-15'),
(110, 1, 3, 2, '2022-06-15'),
(111, 1, 2, 2, '2022-06-15'),
(112, 1, 3, 2, '2022-06-15'),
(113, 1, 2, 2, '2022-06-15'),
(114, 1, 3, 2, '2022-06-15'),
(115, 1, 2, 2, '2022-06-15'),
(116, 1, 3, 2, '2022-06-15'),
(117, 1, 2, 2, '2022-06-15'),
(118, 1, 3, 2, '2022-06-15'),
(119, 1, 2, 2, '2022-06-15'),
(120, 1, 3, 2, '2022-06-15'),
(121, 1, 2, 2, '2022-06-15'),
(122, 1, 3, 2, '2022-06-15'),
(123, 1, 2, 2, '2022-06-15'),
(124, 1, 3, 2, '2022-06-15'),
(125, 1, 2, 2, '2022-06-15'),
(126, 1, 3, 2, '2022-06-15'),
(127, 1, 2, 2, '2022-06-15'),
(128, 1, 3, 2, '2022-06-15'),
(129, 1, 2, 2, '2022-06-15'),
(130, 1, 3, 2, '2022-06-15'),
(131, 1, 2, 2, '2022-06-15'),
(132, 1, 3, 2, '2022-06-15'),
(133, 1, 2, 2, '2022-06-15'),
(134, 1, 3, 2, '2022-06-15'),
(135, 1, 2, 2, '2022-06-15'),
(136, 1, 3, 2, '2022-06-15'),
(137, 1, 2, 2, '2022-06-15'),
(138, 1, 3, 2, '2022-06-15'),
(139, 1, 2, 2, '2022-06-15'),
(140, 1, 3, 2, '2022-06-15'),
(141, 1, 2, 2, '2022-06-15'),
(142, 1, 3, 2, '2022-06-15'),
(143, 1, 2, 2, '2022-06-15'),
(144, 1, 3, 2, '2022-06-15'),
(145, 1, 2, 2, '2022-06-15'),
(146, 1, 3, 2, '2022-06-15'),
(147, 1, 2, 2, '2022-06-15'),
(148, 1, 3, 2, '2022-06-15'),
(149, 1, 2, 2, '2022-06-15'),
(150, 1, 3, 2, '2022-06-15'),
(151, 1, 2, 2, '2022-06-15'),
(152, 1, 3, 2, '2022-06-15'),
(153, 1, 2, 2, '2022-06-15'),
(154, 1, 3, 2, '2022-06-15'),
(155, 1, 2, 2, '2022-06-15'),
(156, 1, 3, 2, '2022-06-15'),
(157, 1, 2, 2, '2022-06-15'),
(158, 1, 3, 2, '2022-06-15'),
(159, 1, 2, 2, '2022-06-15'),
(160, 1, 3, 2, '2022-06-15'),
(161, 1, 2, 2, '2022-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `libelle` varchar(60) NOT NULL,
  `prix_unitaire` decimal(10,0) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `libelle`, `prix_unitaire`, `image`) VALUES
(1, 'phone', '3050', 'img/code.png'),
(2, 'tv', '5390', 'img/code.png'),
(3, 'laptop', '10200', 'img/code.png');

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `num_etu` int(11) NOT NULL,
  `nom_etu` varchar(40) NOT NULL,
  `date_naiss` date NOT NULL,
  `sexe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`num_etu`, `nom_etu`, `date_naiss`, `sexe`) VALUES
(2, 'ismail', '2001-04-17', 'H'),
(3, 'yassine', '2006-06-10', 'H'),
(4, 'ayoub', '2010-09-20', 'H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`num_etu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achat`
--
ALTER TABLE `achat`
  MODIFY `id_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `num_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



