-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2024 at 07:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epim`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `image` varchar(121) NOT NULL,
  `name` varchar(121) NOT NULL,
  `location` varchar(121) NOT NULL,
  `method` varchar(121) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `image`, `name`, `location`, `method`, `quantity`, `total_price`, `timestamp`) VALUES
(2, 'images/coban.jpg', 'Coban', 'SURABAYA', 'E-Wallet', 1, 22000, '2024-08-31 01:26:10'),
(3, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'E-Wallet', 1, 14000, '2024-08-31 01:40:41'),
(4, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'Bank', 1332333, 2147483647, '2024-08-31 01:42:35'),
(5, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'Cash', 0, 2000, '2024-08-31 05:43:27'),
(6, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'Bank', 0, 2000, '2024-08-31 05:43:33'),
(7, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'Cash', 0, 2000, '2024-08-31 05:44:20'),
(8, 'images/coban.jpg', 'Coban', 'SURABAYA', 'Cash', 0, 2000, '2024-08-31 05:45:28'),
(9, 'images/coban.jpg', 'Coban', 'SURABAYA', 'Cash', 112, 2242000, '2024-08-31 05:46:45'),
(10, 'images/bromolandscape.jpg\r\n', 'Gunung Bromo', 'SIDOARJO', 'Cash', 1, 14000, '2024-08-31 05:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(121) NOT NULL,
  `location` varchar(121) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `location`, `price`, `image`) VALUES
(1, 'Gunung Bromo', 'SIDOARJO', 12000, 'images/bromolandscape.jpg\r\n'),
(2, 'Coban', 'SURABAYA', 20000, 'images/coban.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
