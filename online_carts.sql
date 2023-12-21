-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 07:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_carts`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_Id` int(11) NOT NULL,
  `Category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_Id`, `Category`) VALUES
(1, 'Watches'),
(2, 'Mobiles'),
(3, 'airpods'),
(4, 'hodieeee'),
(5, 'img');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prodname` varchar(100) NOT NULL,
  `prodprice` int(11) NOT NULL,
  `prodimage` varchar(255) NOT NULL,
  `Prod_Desc` varchar(255) NOT NULL,
  `Prod_Category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prodname`, `prodprice`, `prodimage`, `Prod_Desc`, `Prod_Category`) VALUES
(1, 'Shoes', 5000, 'image2.webp', 'Best Quality Shoes', 1),
(2, 'watch', 5000, 'image-removebg-preview---2023-07-20t150738.webp', 'best watches and best sell product  go to the shop and buy product', 2),
(4, 'EarBuds', 5000, '89987ac25945695f035c7f220a89f7ca.jpg', 'Mast Awaz ati hai ', 3),
(40, 'watch', 5000, '', 'best watches and best sell product  go to the shop and buy product', 3),
(41, 'EarBuds', 5000, 'img/89987ac25945695f035c7f220a89f7ca.jpg', 'sdfdgdfg', 3),
(42, 'About', 900, 'img/imr.jpg', 'imran', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwordd` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `Phone` varchar(11) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `passwordd`, `address`, `Phone`, `role`) VALUES
(1, 'asfand', 'asfahan@gmail.com', '12345', 'home', '12345678988', 2),
(2, 'wardah', 'xyz@gmail.com', 'abc123', 'karachi', '12345678901', 2),
(3, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(4, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(5, 'asfand', 'xyz@gmail.com', '123', 'lahore', '12345678988', 2),
(6, 'admin', 'admin@gmail.com', 'admin123', 'karachi', '03124567894', 1),
(7, 'Mubsir', 'mubsir@gmail.com', 'mubsir', 'I block', '03172239904', 2),
(8, 'sufi', 'sufi@gmail.com', 'sufi', 'bahria', '424224424', 2),
(9, 'Arbaz', 'arbaz@gmail.com', '6767', 'aotech', '7654', 1),
(10, 'talha', 'talha@gmail.com', 'talha', 'new', '98768868686', 2),
(11, 'hina', 'hina@gmail.com', 'hina', '234567', '0987654', 2),
(12, 'jannat', 'jannat@gmail.com', 'janat', 'home', '98765', 2),
(13, 'anus', 'anus@gmail.com', 'anus', 'hme', '09876876', 2),
(14, 'Imran', 'imran@gmail.com', 'imran', 'home', '0987654', 1),
(15, 'niazi', 'nizazi@gmail.com', '234', '2345', '2334', NULL),
(16, 'xubi', 'xubi@gmail.com', 'xubi', 'home', '098765', NULL),
(17, 'Ibrahim', 'xyz@gmail.com', '112233', 'street', '12345678988', 2),
(18, 'kuch bhiii', 'kuchbhi@gmail.com', 'kuchbhi', 'lahore', '090078601', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Cat_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `Prod_Category` (`Prod_Category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Cat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Prod_Category`) REFERENCES `categories` (`Cat_Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
