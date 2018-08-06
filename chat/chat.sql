-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 03:01 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user1` varchar(100) NOT NULL,
  `user2` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user1`, `user2`, `name`, `message`, `date`) VALUES
(37, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'qhi', '2017-09-19 16:38:21'),
(38, 'nirab@gmail.com', 'nirbhaysimgh@gmail.com', 'nirbhay', 'hello', '2017-09-19 16:38:32'),
(39, 'nirab@gmail.com', 'nirbhaysimgh@gmail.com', 'nirbhay', 'aur bta', '2017-09-19 16:38:40'),
(40, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'tu bta', '2017-09-19 16:38:48'),
(41, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'kya chal raha', '2017-09-19 16:38:56'),
(42, 'nirab@gmail.com', 'nirbhaysimgh@gmail.com', 'nirbhay', 'bas time pass', '2017-09-19 16:39:04'),
(43, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'tum bta', '2017-09-19 16:39:14'),
(44, 'nirab@gmail.com', 'nirbhaysimgh@gmail.com', 'nirbhay', 'bas yaar bakwas timepass', '2017-09-19 16:39:35'),
(45, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'aur kab mil raha', '2017-09-19 16:41:40'),
(46, 'nirab@gmail.com', 'nirbhaysimgh@gmail.com', 'nirbhay', 'jab bol', '2017-09-19 16:41:53'),
(47, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'abe', '2017-09-19 17:26:21'),
(48, 'nirbhaysimgh@gmail.com', 'nirab@gmail.com', 'nirbhay singh', 'hi', '2017-10-02 15:05:05'),
(49, 'ramu@xyz.com', 'nayan@xyz.com', 'ramu', 'hi', '2017-11-09 04:16:53'),
(50, 'ramu@xyz.com', 'nayan@xyz.com', 'ramu', 'hell', '2017-11-09 04:17:50'),
(51, 'ramu@xyz.com', 'nayan@xyz.com', 'ramu', 'how are you', '2017-11-09 04:17:58'),
(52, 'ramu@xyz.com', 'nayan@xyz.com', 'ramu', 'abe gandu', '2017-11-09 04:18:14'),
(53, 'nayan@xyz.com', '', 'nayan', 'hi', '2017-11-09 04:19:41'),
(54, 'nayan@xyz.com', '', 'nayan', 'hi', '2017-11-09 04:20:03'),
(55, 'ramu@xyz.com', 'nayan@xyz.com', 'ramu', 'hello', '2017-11-09 04:20:33'),
(56, 'nayan@xyz.com', '', 'nayan', 'hello', '2017-11-09 04:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(15) NOT NULL,
  `cpassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `image`, `password`, `cpassword`) VALUES
(28, 'nirbhay singh', 'nirbhaysimgh@gmail.com', 2147483647, 'bb369bb0ed9183f56b3b4e75e606299bnirbhay.PNG', '123', '123'),
(29, 'nirbhay singh', 'nirab@gmail.com', 2147483647, '7e18e054a7652cdc1a2923f420c76098network.PNG', '133', '123'),
(30, 'ramu', 'ramu@xyz.com', 2147483647, '1fc445699c07bcbca2ddb472ee2562e3external-hard-drive.jpg', '12345', '12345'),
(31, 'nayan', 'nayan@xyz.com', 65468484, '307178ec8a95481880cf649a3a52af7bcamera.jpg', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
