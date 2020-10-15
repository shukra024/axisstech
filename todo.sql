-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 01:24 PM
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
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `title` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`title`, `description`, `data`) VALUES
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00'),
('', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `dating` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`title`, `description`, `dating`) VALUES
('', '', '2020-10-24 00:00:00');

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
('red', 'red@gmail.com', 'red', 'red', '5f8818009544c5.76626650.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
