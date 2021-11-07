-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 08:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `cat_id`) VALUES
(1, 'anurag@gmail.com', 'anurag', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `company_name`, `status`) VALUES
(1, 'Mohit Electrovision', 0),
(2, 'Web2Rise', 0),
(3, 'Other', 0),
(4, 'W2R Clients', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `link` varchar(300) NOT NULL,
  `started_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `completed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `task_name`, `status`, `category`, `link`, `started_at`, `completed_at`) VALUES
(1, 'Attendance', 0, 1, 'https://work.mohitele.com/attendence', '2021-11-06 11:27:07', NULL),
(2, 'Ecommer ReactJs', 0, 2, 'cftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuhcjiujxodkmtioxdjtioxdtkxdtkoxdcftjuDJDJSJD', '2021-11-06 11:27:07', NULL),
(3, 'Rent Management', 0, 3, 'https://rent.q2w.in', '2021-11-06 11:28:19', NULL),
(4, 'CV Maker', 2, 2, '', '2021-11-06 12:48:13', NULL),
(5, 'Perfect India Tools', 0, 4, 'http://perfectindiatools.com/', '2021-11-06 12:48:13', NULL),
(6, 'Dashboard', 1, 2, '', '2021-11-06 12:48:34', NULL),
(7, 'Reports', 1, 1, 'https://portal.mohitele.com', '2021-11-06 14:24:47', NULL),
(8, 'Work', 0, 1, 'https://work.mohitele.com', '2021-11-06 14:25:18', NULL),
(9, 'ISCfbd', 0, 4, 'http://iscfbd.com/', '2021-11-06 14:25:19', NULL),
(10, 'Serial', 0, 1, 'https://work.mohitele.com/serial', '2021-11-06 14:25:38', NULL),
(11, 'Coupon', 2, 1, 'https://work.mohitele.com/coupon', '2021-11-06 14:25:46', NULL),
(12, 'Reviews', 0, 1, 'https://review.mohitele.com', '2021-11-06 14:25:54', NULL),
(13, 'Review', 0, 2, 'https://review.web2rise.com', '2021-11-06 14:26:30', NULL),
(14, 'ListMeOn', 1, 3, 'https://admin.listmeon.com', '2021-11-06 14:26:42', NULL),
(15, 'Clients', 0, 2, 'https://dash.web2rise.com/', '2021-11-06 14:26:46', NULL),
(16, 'Visitor', 2, 1, 'https://work.mohitele.com/visitors', '2021-11-06 14:26:52', NULL),
(17, 'Services', 2, 1, 'https://work.mohitele.com/service', '2021-11-06 14:26:59', NULL),
(18, 'Q2W', 0, 2, 'https://q2w.in/', '2021-11-06 14:27:08', NULL),
(19, 'AEON Metal', 0, 4, 'https://aeonmetal.com/', '2021-11-06 14:42:29', NULL),
(20, 'Muscle Mate Kart', 0, 4, 'https://musclematekart.com/', '2021-11-06 14:42:29', NULL),
(21, 'Ciostik', 0, 4, 'http://ciostik.com/', '2021-11-06 14:43:31', NULL),
(22, 'Mohit Electrovision', 2, 4, 'https://mohitele.com/', '2021-11-06 14:43:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
