-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2020 at 12:09 AM
-- Server version: 10.1.43-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oceoqbsp_fire_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234'),
(2, 'wilyfrez', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `dept`, `country`, `comment`, `time`) VALUES
(1, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'Department Of Admin, Oceo', 'Nigeria', 'Here I am', '2020-01-22 15:03:00'),
(2, 'Oghenechohwo Obruche', 'wilfred.o@loveworld360.com', 'Department Of Admin, Oceo', 'Nigeria', 'Glory', '2020-01-22 16:47:25'),
(3, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'Department Of Admin, Oceo', 'Nigeria', 'Fire proof', '2020-01-27 04:45:11'),
(4, 'Micheal Paul', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', 'It was successful', '2020-01-27 04:53:03'),
(5, 'Micheal Paul', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', 'Yes', '2020-01-27 05:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `viewers`
--

CREATE TABLE `viewers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `dept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `signInTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viewers`
--

INSERT INTO `viewers` (`id`, `name`, `email`, `dept`, `country`, `phone`, `signInTime`) VALUES
(1, 'Brother Wilfred', 'wilyfrez@gmail.com', 'OHOA', '', '', '2020-01-22 11:57:56'),
(2, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'Department Of Admin, Oceo', 'Nigeria', ' (+234)2348112272488', '2020-01-22 15:01:35'),
(3, 'Oghenechohwo Obruche', 'wilfred.o@loveworld360.com', 'Department Of Admin, Oceo', 'Nigeria', ' (+234)2348112272488', '2020-01-22 16:22:50'),
(4, 'Joy', 'wilyfrez@gmail.com', 'OFTP', 'Nigeria', ' (+234)2348112272488', '2020-01-22 17:07:02'),
(5, 'Oghenechohwo Obruche', 'wilfred.o@loveworld360.com', 'OCEO', 'Nigeria', ' (+234)2348112272488', '2020-01-22 11:47:20'),
(6, 'Kenneth Paul', 'loveprogramming365@gmail.com', 'Department Of Admin, Oceo', 'Nigeria', ' (+234)2348112272488', '2020-01-25 17:48:52'),
(7, 'Oghenechohwo Obruche', 'wilyfrez@gmail.com', 'Department Of Admin, Oceo', 'Nigeria', ' (234)08112272488', '2020-01-27 04:44:28'),
(8, 'Micheal Paul', 'wilyfrez@gmail.com', 'OHOA', 'Nigeria', ' (234)08112272488', '2020-01-27 04:52:36'),
(9, 'Wilfred ', 'wil@gn.com', 'OCEO', 'Nigeria', ' (234)08112272488', '2020-01-27 08:20:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewers`
--
ALTER TABLE `viewers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `viewers`
--
ALTER TABLE `viewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
