-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 03:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_file_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_file_name`, `product_price`, `product_brand`, `type`) VALUES
(1, 'T-shirt', 'nike-tshirt.jpg', 50, 'nike', 'tshirt'),
(2, 'Joggers', 'nike-pant.jpeg', 25, 'nike', 'pant'),
(3, 'shoes', 'nike-shoes.jpg', 120, 'nike', 'shoes'),
(4, 'Hoodies', 'nike-hoodies.jpeg', 100, 'nike', 'hoodies'),
(5, 'T-shirt', 'adidas-tshirt.jpg', 55, 'adidas', 'tshirt'),
(6, 'Joggers', 'adidas-pant.jpg', 75, 'adidas', 'pant'),
(7, 'shoes', 'adidas-shoes.jpeg', 95, 'adidas', 'shoes'),
(8, 'Hoodies', 'adidas-hoodies.jpg', 250, 'adidas', 'hoodies'),
(9, 'T-shirt', 'reebok-tshirt.jpg', 75, 'rebook', 'tshirt'),
(10, 'Joggers', 'reebok-pant.jpg', 80.85, 'reebok', 'pant'),
(11, 'shoes', 'reebok-shoes.jpeg', 55.65, 'reebok', 'shoes'),
(12, 'Hoodies', 'reebok-hoodies.jpg', 199.99, 'reebok', 'hoodies'),
(13, 'T-shirt', 'puma-tshirt.jpg', 30.8, 'puma', 'tshirt'),
(14, 'Joggers', 'puma-pant.jpg', 120, 'puma\r\n', 'pant'),
(15, 'shoes', 'puma-shoes.jpg', 90, 'puma', 'shoes'),
(16, 'Hoodies', 'puma-hoodies.jpg', 200, 'puma', 'hoodies');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `email`, `password`, `Gender`, `Age`) VALUES
(11, 'manisha', 'manisaa.yadav05@gmail.com', '4580fc0671edc316f4fd4bd7e7ec7b54', 'female', 'Above 60'),
(12, 'rima palli', 'rima@gmail.com', '29162e9f892128119eec61ba60ecea9a', '', '1-18'),
(14, 'Rimaaaaaa', 'abc@gmail.com', '29162e9f892128119eec61ba60ecea9a', '', '19-60'),
(15, 'manisha', 'rima@gmail.com', 'c8b6871d1a01fe0c28cfc9b428db826b', '', '1-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
