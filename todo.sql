-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 04:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `numbers` int(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `dating` date NOT NULL,
  `start_at` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `remove`
--

CREATE TABLE `remove` (
  `numbers` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dating` date NOT NULL,
  `start_at` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remove`
--

INSERT INTO `remove` (`numbers`, `title`, `description`, `dating`, `start_at`) VALUES
(25, 'meeting', 'conference', '0000-00-00', '2020-10-24'),
(2, 'study', 'science', '0000-00-00', '2020-10-17'),
(2, 'study', 'science', '0000-00-00', '2020-10-17'),
(3, 'ada', 'adsa', '0000-00-00', '2020-10-29'),
(0, '', '', '0000-00-00', ''),
(0, '', '', '0000-00-00', ''),
(3, 'dsfs', 'dfs', '0000-00-00', '2020-10-22'),
(0, '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `cpassword`, `avatar`) VALUES
('pio', 'pio@gmail.com', 'pio', 'pio', '2'),
('lion', 'lion@gmail.com', 'lion', 'lion', '5f8816aa5d3de6.12649193.jpg'),
('lions', 'lions@gmail.com', 'lions', 'lions', '5f8817147a8857.38993181.jpg'),
('red', 'red@gmail.com', 'red', 'red', '5f8818009544c5.76626650.jpg'),
('lio', 'see@gmail.com', 'see', 'see', '5f883a0f2229a5.28396016.png'),
('', '', '', '', ''),
('', '', '', '', ''),
('shuk', 'shuk@gmail.com', 'shuk', 'shuk', '5f89a7c3f19d45.67278740.png'),
('blue', 'blue@gmail.com', 'blue', 'blue', '5f89a8327022d3.50154116.png'),
('green', 'green@gmail.com', 'green', 'green', '5f89a8e9542da7.86428304.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
