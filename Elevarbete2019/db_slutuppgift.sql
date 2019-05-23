-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 10:42 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_slutuppgift`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `nyckel` int(255) NOT NULL COMMENT 'Unikt index',
  `username` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Användarnamn',
  `password` varchar(255) NOT NULL COMMENT 'Lösenord',
  `fnamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Förnamn',
  `enamn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_swedish_ci NOT NULL COMMENT 'Efternamn',
  `tfn` varchar(255) NOT NULL COMMENT 'Telefonnummer',
  `admin` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Administratör'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`nyckel`, `username`, `password`, `fnamn`, `enamn`, `tfn`, `admin`) VALUES
(2, 'Sedvin', '12345', 'Edvin', 'Åkeson', '0723362677', 1),
(3, 'Piggy', '123456', 'Isak', 'Wikman', '0701234567', 0),
(4, 'Berra', '1234567', 'Anton', 'Stenberg', '0709876543', 0),
(5, 'Barr', '12345678', 'Arvid', 'Ahlborg', '0721352468', 1),
(6, 'Simpa', '123456789', 'Simon', 'Georgsson', '0736658915', 0),
(7, 'Roddbåt', '1234', 'Barry', 'Roddbåt', '0734456677', 0),
(8, 'Manu', '4444', 'Phil', 'Jones', '0723234477', 0),
(11, 'Rom22', '1221', 'Romelu', 'Lukkaku', '123232312', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`nyckel`),
  ADD UNIQUE KEY `nyckel` (`nyckel`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `nyckel` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Unikt index', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
