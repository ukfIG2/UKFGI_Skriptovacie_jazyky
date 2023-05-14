-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2023 at 10:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GabrisIvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `Kontakt`
--

CREATE TABLE `Kontakt` (
  `idKontakt` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Element` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Odpoved` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovak_ci;

--
-- Dumping data for table `Kontakt`
--

INSERT INTO `Kontakt` (`idKontakt`, `Name`, `Email`, `Phone`, `Element`, `Message`, `Date`, `Odpoved`) VALUES
(3, 'test', 'test@test', '00000000000', 'test', 'test', '2023-05-08 22:06:13', ''),
(20, 'dfvsdf', 'sdfsdf@sdf', 'sdfsd', 'saab', 'sdfsdf', '2023-05-08 22:06:13', ''),
(23, 'aa', 'aa@aa', 'aaa', 'applicatinos element', 'aaaa', '2023-05-13 21:22:58', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `Portfolio`
--

CREATE TABLE `Portfolio` (
  `idPortfolio` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovak_ci;

--
-- Dumping data for table `Portfolio`
--

INSERT INTO `Portfolio` (`idPortfolio`, `name`, `image`, `Text`) VALUES
(1, 'website element', 'images/icon-1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq'),
(2, 'applicatinos element', 'images/icon-2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliq'),
(3, 'design element', 'images/icon-3.png', 'Nieco Nieco');

-- --------------------------------------------------------

--
-- Table structure for table `Social`
--

CREATE TABLE `Social` (
  `idSocial` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovak_ci;

--
-- Dumping data for table `Social`
--

INSERT INTO `Social` (`idSocial`, `Name`, `image`, `url`) VALUES
(1, 'youtube', 'images/youtub-icon.png', 'youtube.com'),
(2, 'twitter', 'images/twitter-icon.png', 'twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `Subscribers`
--

CREATE TABLE `Subscribers` (
  `idSubscribers` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subscribed_When` timestamp NOT NULL DEFAULT current_timestamp(),
  `UnSucribed` varchar(5) NOT NULL DEFAULT 'True'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovak_ci;

--
-- Dumping data for table `Subscribers`
--

INSERT INTO `Subscribers` (`idSubscribers`, `Email`, `Subscribed_When`, `UnSucribed`) VALUES
(1, 'a@a', '2023-05-13 22:41:19', 'True'),
(2, 'ssssss', '2023-05-13 22:54:58', 'True'),
(3, 'bbb', '2023-05-13 22:56:20', 'False'),
(4, 'ddddd', '2023-05-14 11:01:22', 'True'),
(5, 'fggs', '2023-05-14 18:37:50', 'True'),
(6, '', '2023-05-14 18:38:53', 'True'),
(7, 'jjj@ggg', '2023-05-14 18:40:19', 'True'),
(8, 'jjj@gggujtfjadadasdadadgsggr', '2023-05-14 18:48:21', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `idUser` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovak_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`idUser`, `Name`, `Email`, `Password`) VALUES
(94, 'test', 'test@test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(98, 'c', 'c@c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4'),
(99, '1', '1@1', '356a192b7913b04c54574d18c28d46e6395428ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Kontakt`
--
ALTER TABLE `Kontakt`
  ADD PRIMARY KEY (`idKontakt`);

--
-- Indexes for table `Portfolio`
--
ALTER TABLE `Portfolio`
  ADD PRIMARY KEY (`idPortfolio`);

--
-- Indexes for table `Social`
--
ALTER TABLE `Social`
  ADD PRIMARY KEY (`idSocial`);

--
-- Indexes for table `Subscribers`
--
ALTER TABLE `Subscribers`
  ADD PRIMARY KEY (`idSubscribers`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Kontakt`
--
ALTER TABLE `Kontakt`
  MODIFY `idKontakt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Portfolio`
--
ALTER TABLE `Portfolio`
  MODIFY `idPortfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Social`
--
ALTER TABLE `Social`
  MODIFY `idSocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Subscribers`
--
ALTER TABLE `Subscribers`
  MODIFY `idSubscribers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
