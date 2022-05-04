-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 07:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `135php`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `marial_status` enum('0','1') NOT NULL COMMENT '0:married,1:single',
  `created_at` datetime DEFAULT current_timestamp(),
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0:not deleted,1:deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `role`, `salary`, `email`, `phone`, `marial_status`, `created_at`, `is_deleted`) VALUES
(14, 'Cahandar Guliyev', 'Back End Developer', 12321, 'ezmemmed@yahoo.com', '0513773364', '0', '2022-04-01 17:13:32', '1'),
(15, 'Azmammad Gasimov', 'Back End Developer', 12321, 'ezmemmed@yahoo.com', '3773364', '0', '2022-04-06 18:31:55', '0'),
(16, 'Əzməmməd Qasımov', 'Back End Developer', 12321, 'tahir@mail.ru', '051-377-33-64', '1', '2022-04-29 20:02:56', '0'),
(18, 'Student2', 'Front End Developer', 130, 'ezmemmed@yahoo.com', '3773364', '1', '2022-04-29 20:07:20', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;