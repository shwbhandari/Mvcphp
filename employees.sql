-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 01:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(6) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(80) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `Name`, `Surname`, `Username`, `email`, `phone`, `password`) VALUES
(5, 'Shwet', 'Jai', 'shwbhandariji', 'shwjain89@gmail.com', '8319566210', '$2y$10$xn13SdWa3yqPVT00oBP8FOsNc2AkCq8tRgGNfOpfc/eQvjhhIIQtC'),
(6, 'Naman', 'Jain', 'txdxdx', 'shwjain89@gmail.com', '08319566210', '$2y$10$QoclYsi/ribDQYgAlY97ou7q7CRYXht4lSDdkC37f7XWn6VS5KVOe'),
(7, 'Shweta', 'Jai', 'shwbhandari', 'shwjain89@gmail.com', '08319566210', '$2y$10$rr/.OeobedDoqM5NWBVG4O09phmByPT36R/8ZkEErzaegW.0HVPFO'),
(8, 'Shweta', 'Jain', 'shwbhandari', 'shwjain89@gmail.com', '08319566210', '$2y$10$/Z7k/vdke/rrUdfYRyEKB.VmeXmTp5HvGm8Tn2.Jcexqawjt./R76'),
(21, 'Shweta', 'Jain', 'shwbhandari', 'shwjain89@gmail.com', '08319566210', '$2y$10$4mhL/3mVLs9JEiDQq/yt0.iDevE7cZp707GXcAgIpSQjpLROZ3IbG'),
(22, 'Shweta', 'Jain', '', 'shwjain89@gmail.com', '08319566210', '$2y$10$fp422RRUl6XmGEIkEaEUTei.MaM2zFhzz7H42lGpCr991g/1vMg7q'),
(23, '', '', '', '', '', '$2y$10$x724x0VFvdBUuAj1N0vrHeiMUopL78GWvajZQxjS4bPQKgpiDebui'),
(24, 'Yug', 'j', 'fffffff', 'njbhandari4@gmail.com', '08319566210', '$2y$10$/vqj6LKUV/a/8VjcAV71m.3gXGbllrfsukDTgdE9VI954vw/K77tm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
