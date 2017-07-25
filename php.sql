-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2017 at 06:48 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--
CREATE DATABASE IF NOT EXISTS `php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php`;

-- --------------------------------------------------------

--
-- Table structure for table `Phptask`
--

CREATE TABLE `Phptask` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Phptask`
--

INSERT INTO `Phptask` (`id`, `name`, `password`, `email`, `mobile`, `address`, `gender`, `dob`) VALUES
(1, 'jaya', '250cf8b51c773f3f8dc8b4be867a9a02', 'jaya@gmail.com', 987654321, 'chennai', 'female', '1966-11-12'),
(2, 'Ramanathan', '202cb962ac59075b964b07152d234b70', 'ramanathan@gmail.com', 1234567892, 'madurai', 'male', '1996-01-31'),
(7, 'Hari', 'caf1a3dfb505ffed0d024130f58c5cfa', 'hari@gmail.com', 5432167890, 'chennai', 'male', '1995-04-21'),
(8, 'Hari', 'caf1a3dfb505ffed0d024130f58c5cfa', 'hari@gmail.com', 5432167890, 'chennai', 'male', '1995-04-21'),
(9, 'Venkat', '1f20383838dc8688fbd142e7ec81f123', 'venkat@gmail.com', 8145678967, 'paramakudi', 'male', '1111-11-11'),
(12, 'balaji', 'e75c1a66ae406db7d2f451b216b10664', 'balaji@gmail.com', 1234554321, 'urappakkam', 'male', '1996-08-20'),
(13, 'jaya', 'ce9689abdeab50b5bee3b56c7aadee27', 'jaya@gmail.com', 987654321, 'chennai', 'male', '1994-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Phptask`
--
ALTER TABLE `Phptask`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Phptask`
--
ALTER TABLE `Phptask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
