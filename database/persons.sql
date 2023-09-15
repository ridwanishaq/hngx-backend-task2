-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2023 at 10:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hngx_task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `age`, `email`) VALUES
(1, 'Adamu Isyaku', '27', 'adamu@engineer.com'),
(2, 'Mark Essien', '18', 'mark@hngx.com'),
(3, 'John Tr Essien', '34', 'jh@hngx.com'),
(4, 'Glorio Blick', '17', 'glorio@hngx.com'),
(5, 'Hassan Usman', '18', 'hassan@hngx.com'),
(6, 'Adamu Umar Usman', '28', 'adams@hngx.com'),
(7, 'Tanko Lipson', '16', 'tanko@hngx.com'),
(8, 'Abubakar Faisal', '28', 'abk@hngx.com'),
(9, 'Rilwanu Isyaku', '23', 'rilwanu@hngx.com'),
(10, 'Ahmad Isyaku Ahmad', '24', 'ahmad@hngx.com'),
(11, 'Ali Yau', '19', 'ali2@hngx.com'),
(12, 'Garba Tanko', '18', 'garba42@hngx.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
