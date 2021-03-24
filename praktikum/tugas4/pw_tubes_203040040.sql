-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 08:00 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040040`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`id`, `img`, `name`, `size`, `brand`, `price`, `category`) VALUES
(1, 'Taupe-Mickey.jpg', 'Taupe/Mickey Mouse', 'L', 'H&M', '$34.99', 'Men/Hoodie'),
(2, 'Pink-Mickey.jpg', 'Light pink/Mickey Mo', 'S', 'H&M', '$19.99', 'Women/Hoodie'),
(3, 'Star-Wars.jpg', 'Natural white/Star W', 'L', 'H&M', '$20.99', 'Men/Hoodie'),
(4, 'Light-Beige.jpg', 'Light Beige/NASA', 'M', 'H&M', '$21.99', 'Men/Hoodie'),
(5, 'Flannel-Navy.jpg', 'Flannel Soft Twill N', 'L', 'UNIQLO', '$34.99', 'Men/Flannel'),
(6, 'Flannel-Beige.jpg', 'Flannel Soft Twill B', 'L', 'UNIQLO', '$34.99', 'Men/Flannel'),
(7, 'White2.jpg', 'Short-sleeved Poplin', 'M', 'H&M', '$17.99', 'Women/Shirts'),
(8, 'White1.jpg', 'Relaxed Fit T-shirt', 'L', 'H&M', '$12.99', 'Men/T-shirts'),
(9, 'Cashmere-Sweater.jpg', 'Cashmere Sweater', 'S', 'ZARA', '$50.99', 'Women/Sweater'),
(10, 'Wool-Blend-Knit-Sweater.jpg', 'Wool Blend Knit Swea', 'M', 'ZARA', '$49.99', 'Women/Sweater');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
