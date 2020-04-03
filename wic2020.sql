-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 04:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wic2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2019-12-20 04:21:18', '19-02-2020 11:22:45 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `send_date`) VALUES
(1, 'Mohammad Shahabuddin', 'shahabuddin650@gmail.com', 'New Email', 'test1', '2020-02-22 18:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `number`, `email`, `subject`, `address`, `message`, `send_date`) VALUES
(7, 'amira', '0123456789', 'amira@gmail.com', 'zxcxzvc   ', 'asdfghjkiy', 'adsvgdfjnjhg', '2020-02-19 14:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `idea`
--

CREATE TABLE `idea` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `partner_name` varchar(200) NOT NULL,
  `number` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `division` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `photo` text NOT NULL,
  `idea_title` varchar(200) NOT NULL,
  `idea_details` varchar(5000) NOT NULL,
  `model` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `amount` varchar(32) NOT NULL,
  `personal_amount` varchar(200) NOT NULL,
  `marketing` varchar(1024) NOT NULL,
  `financial` varchar(200) NOT NULL,
  `support` varchar(32) NOT NULL,
  `success` varchar(1024) NOT NULL,
  `training` varchar(200) NOT NULL,
  `training_details` varchar(1024) NOT NULL,
  `program` varchar(1024) NOT NULL,
  `yourself` varchar(1024) NOT NULL,
  `payment` varchar(32) NOT NULL,
  `payment_photo` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea`
--

INSERT INTO `idea` (`id`, `username`, `name`, `partner_name`, `number`, `email`, `address`, `division`, `district`, `education`, `dob`, `photo`, `idea_title`, `idea_details`, `model`, `place`, `amount`, `personal_amount`, `marketing`, `financial`, `support`, `success`, `training`, `training_details`, `program`, `yourself`, `payment`, `payment_photo`, `send_date`) VALUES
(19, 'amira', 'amira', '', '0123456789', 'amira@gmail.com', 'qwqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'Dhaka', 'Barguna', 'saaaaaaaaaaaaaaaa', '2020-02-14', '1 6C702o6cpNyLm27WLdZyjg.png', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'no', 'dont know', '111111111', '11111111111111111', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'saaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'ssssssffffffffffffffxxxxxxxxxxxx', 'wwwqqqqqqqqqrqrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'No', '', 'Yes', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwtttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', '1234', '', '2020-02-22 19:28:12'),
(20, 'nila', 'Mohammad Shahabuddin', 'dasfdg', '12345678', 'azsdxfcgvh@fdgh.sdfg', 'szfdxcgv', 'Dhaka', 'Khagrachhari', 'sdfghj', '2020-02-12', 'Photo 1-25-18, 12 13 20 AM.jpg', 'dfghbj', 'dfghbj', 'dcfgvhbj', 'xdfcgvhbj', '1234', '1234', 'szdxfcgvb', 'sdxcfgvbhjn', 'fcgvhbjnk', 'gvhbjnkl', 'No', 'gfhvbjk', 'No', 'dfgcvhbjnkml', '123456', '', '2020-02-23 14:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `idea_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `idea_id`) VALUES
(9, 'amira', 'amira@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(10, 'nila', 'dewjones13@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idea`
--
ALTER TABLE `idea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `idea`
--
ALTER TABLE `idea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
