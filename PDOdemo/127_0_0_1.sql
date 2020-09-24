-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 11:39 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_reviews`
--
CREATE DATABASE IF NOT EXISTS `movie_reviews` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movie_reviews`;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `director` varchar(128) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `title`, `year`, `director`, `rating`) VALUES
(1, 'The Big Lebowski', 1998, 'Coen', 10),
(3, 'Miller\'s Crossing', 1990, 'Coen', 10),
(5, 'Blue Velvet', 1986, 'Lynch', 8),
(6, 'Dune', 1984, 'Lynch', 6),
(9, 'Eraserhead', 1977, 'Lynch', 9),
(12, 'Mad Max: Fury Road', 2015, 'Miller', 10),
(14, 'Corky Romano', 2001, 'Pritts', 0),
(17, 'Only God Forgives', 2013, 'Refn', 1),
(19, 'Troll 2', 2017, 'Fragasso', 5),
(20, 'Mandy', 2018, 'Cosmatos', 9),
(21, 'C.H.U.D.', 1984, 'Cheek', 4),
(22, 'C.H.U.D. II: Bud the C.H.U.D.', 1989, 'Irving', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
