-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 05:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infowall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(100) NOT NULL,
  `downloads` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(1, '3rd sem.pdf', 492548, 5),
(2, '4th sem.pdf', 624625, 2),
(3, '3rd sem.pdf', 492548, 1),
(5, '1st sem.pdf', 579997, 0),
(6, '1st sem.pdf', 579997, 0),
(7, '1st sem.pdf', 579997, 0),
(20, '12 MARKSHEET.pdf', 65233, 0),
(21, '12 MARKSHEET.pdf', 65233, 0),
(22, 'sign_compressed.pdf', 32631, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  `DEPARTMENT_NAME` varchar(250) DEFAULT NULL,
  `SEMESTER` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `subject`, `Description`, `Date`, `DEPARTMENT_NAME`, `SEMESTER`) VALUES
(2, 'dhrfb', 'dbgyg', '2023-04-12 12:12:08', 'CE', '4'),
(3, 'cd', 'hello', '2023-04-12 12:12:42', 'CSE', '3'),
(4, 'cd', 'hello', '2023-04-12 12:12:50', 'CSE', '3'),
(5, 'cd', 'hello', '2023-04-12 12:13:20', 'CSE', '3'),
(6, 'cd', 'hello', '2023-04-12 12:13:45', 'CSE', '3'),
(7, 'jddn', 'jhju', '2023-04-12 12:17:54', 'EEE', '3'),
(8, 'hh', 'njh', '2023-04-12 12:18:02', 'EEE', '2'),
(9, 'hello', 'njdh', '2023-04-12 12:18:50', 'ME', '3'),
(10, 'hello there', 'jhdhj', '2023-04-12 12:19:21', 'EEE', '3'),
(11, 'hey jk', 'djhd', '2023-04-12 13:16:32', 'CSE', '4'),
(12, 'bhj', 'hgj', '2023-04-12 14:13:09', 'CSE', '4'),
(13, 'fej', 'djdgd', '2023-04-12 14:26:57', 'CSE', '4'),
(14, 'JHJ', 'JBHJ', '2023-04-12 15:04:08', 'CSE', '4'),
(15, 'hyedu', 'sbxj', '2023-04-12 23:00:22', 'EEE', '2'),
(16, 'hello there', 'this is here by infromend', '2023-04-22 22:44:34', 'EEE', '3'),
(17, 'cse', 'cse', '2023-04-22 22:45:40', 'CSE', '3'),
(18, 'eee', 'eee', '2023-04-22 22:47:41', 'EEE', '3'),
(19, 'hellow', 'heyy', '2023-04-24 22:44:16', 'EEE', '3'),
(20, 'CE', 'CE', '2023-04-24 23:48:25', 'CE', '3'),
(21, 'jkl', 'jkl', '2023-04-25 20:46:18', 'EEE', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `regid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `gender`, `DEPARTMENT_NAME`, `SEMESTER`, `regid`) VALUES
(1, 'John Smith', 'john@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'm', 'CSE', '2nd', 2147483647),
(9, 'jk', 'kj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'CSE', '1st', 2147483647),
(10, 'kittu', 'chotu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'CSE', '4th', 2147483647),
(11, 'KITTI', 'k@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'EEE', '1st', 2147483647),
(12, 'jk', 'jk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'CSE', '4th', 2147483647),
(13, 'komal', 'komal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'EEE', '3rd', 2147483647),
(14, 'anjali', 'aj@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'CSE', '3rd', 2147483647),
(15, 'jinal', 'jina@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'EEE', '2nd', 2147483647),
(16, 'ajk', 'ajk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'EEE', '2nd', 2147483647),
(17, 'rohit', 'rohit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'm', 'CE', '1st', 2147483647),
(18, 'jassy', 'jassy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'f', 'CSE', '1st', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
