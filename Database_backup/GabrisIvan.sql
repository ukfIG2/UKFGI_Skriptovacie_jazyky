-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2023 at 01:26 PM
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
(21, 'dfvsdf', 'sdfsdf@sdf', 'sdfsd', 'saab', 'sdfsdfsgsrgsgwsg', '2023-05-08 22:06:27', 'll');

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
(98, 'c', 'c@c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4');

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
  MODIFY `idKontakt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Portfolio`
--
ALTER TABLE `Portfolio`
  MODIFY `idPortfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Social`
--
ALTER TABLE `Social`
  MODIFY `idSocial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
