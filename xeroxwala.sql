-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 09:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project009`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `branch`, `uid`, `phone`) VALUES
(3, 'test', 'user', 'TEIT', '119IT3129A', '1321231132'),
(9, 'prathamesh', 'dongrikar', 'TEIT', '119IT2323A', '9981239912'),
(10, 'tanmay', 'kanse', 'TEIT', '119IT3139A', '9831289123'),
(17, 'ayush', 'singh', 'TEIT', '119IT3179A', '123789456'),
(23, 'test', 'test', 'TEIT', '119IT3141A ', '2133123'),
(27, 'test', 'test', 'TEIT', '119IT3188A ', '21331236'),
(28, 'test112', 'test112', 'TEIT', '119IT3189A ', '21331333'),
(29, 'test113', 'test113', 'TEIT', '119IT3190A ', '21331332'),
(60, 'test114', 'test115', 'TEIT', '119IT2193A ', '213313354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_students` (`uid`),
  ADD UNIQUE KEY `uc_students_phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
