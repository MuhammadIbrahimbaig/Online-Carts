-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 06:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(4, 'hodiee'),
(5, 'shoes');

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
(46, 'Smart Watch', 4000, 'img/smartwatch.png', 'Buy Dany Loop Pro Smart Watch Price in Pakistan', 1),
(48, 'Mobile', 1900000, 'img/mobile1.webp', 'Iphone xr yellow mobile phone on smart phone xr yellow mobile phone ', 2),
(49, 'Mobile', 34000, 'img/mobile2.webp', 'Iphone xr yellow mobile phone on smart phone xr yellow mobile phone ', 2),
(50, 'Mobile', 50000, 'img/mobile3.webp', 'Iphone xr yellow mobile phone on Similar Iphone xr yellow mobile phone ', 2),
(51, 'smart watch', 6000, 'img/smartwatch2.webp', 'Buy Dany Loop Pro Smart Watch Price in Pakistan', 1),
(52, 'Smart watch', 9000, 'img/smartwatch3.gif', 'Buy T10 Ultra Bluetooth Calling Watch Price in Pakistan', 1),
(53, 'Smart watch', 9000, 'img/smartwatch4.webp', 'Buy S100 Pro Max Smart Watch With 4 Straps Price ', 1),
(55, 'Hodiee', 1300, 'img/01.png', 'Hoodies keep you warm and cozy! Buy Sweatshirts & Hoodies at Rad.', 4),
(56, 'Hodiee', 1500, 'img/02.png', 'Brandsego is the leading online store for men\'s hoodies in Pakistan.', 4),
(57, 'Hodiee', 5000, 'img/03.png', ' Slim Fit Winter High Necks For Men | Full Sleeve Warm Winter', 4),
(58, 'Hodiee', 4090, 'img/04.png', ' Slim Fit Winter High Necks For Men | Full Sleeve Warm Winter', 4),
(59, 'Hodiee', 7990, 'img/05.png', ' Slim Fit Winter High Necks For Men | Full Sleeve Warm Winter', 4),
(60, 'Hodiee', 2000, 'img/06.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(61, 'Hodiee', 600, 'img/07.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(62, 'Hodiee', 1400, 'img/08.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(63, 'Hodiee', 4500, 'img/09.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(64, 'Hodiee', 2000, 'img/10.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(65, 'Hodiee', 2000, 'img/11.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(66, 'Hodiee', 2500, 'img/12.png', ' New fleece plain full sleves pull over winter hodiee for men ', 4),
(67, 'Hodiee', 2500, 'img/AP 01.png', ' Audionic Airbud 550 Quad MIC ENC Earbuds, Gaming Mode, IPx4', 3),
(68, 'Airbuds', 7500, 'img/AP 02.png', ' Audionic Airbud 550 Quad MIC ENC Earbuds, Gaming Mode, IPx4', 3),
(69, 'Airbuds', 500, 'img/AP 03.png', ' Audionic Airbud 550 Quad MIC ENC Earbuds, Gaming Mode, IPx4', 3),
(71, 'Smart Watch', 1300, 'img/watch5.jpg', 'IWO | FK99 Smartwatch | Series 6 | Heart Rate Sensor | Pedometer | Bluetooth music | Push notifications | Smart ', 1),
(72, 'Smart Watch', 1300, 'img/watch6.jpg', 'Xiaomi Mibro A1 | 1.28″ HD Display | 20 Sports Mode | Blood Oxygen Monitor | Heart Rate Sensor | Smart Watch', 1),
(73, 'Smart Watch', 6000, 'img/watch7.jpg', 'Haylou GST | Silicone Strap | 22mm | Heart Rate Monitor | Blood Oxygen Monitor | Sleep Monitoring |Best quality', 1),
(74, 'Smart Watch', 2300, 'img/watch8.jpg', 'HX68 Smartwatch | Bluetooth Call | Android & IOS | Heart Rate Sensor | G Sensor | Sleep Monitor | Smart Watch', 1),
(75, 'Smart Watch', 2300, 'img/watch9.jpg', 'HX68 Smartwatch | Bluetooth Call | Android & IOS | Heart Rate Sensor | G Sensor | Sleep Monitor | Smart Watch', 1),
(76, 'Smart Watch', 2300, 'img/watch10.jpg', 'HX68 Smartwatch | Bluetooth Call | Android & IOS | Heart Rate Sensor | G Sensor | Sleep Monitor | Smart Watch', 1),
(77, 'Smart Watch', 3450, 'img/watch11.jpg', 'HX68 Smartwatch | Bluetooth Call | Android & IOS | Heart Rate Sensor | G Sensor | Sleep Monitor | Smart Watch', 1),
(78, 'Smart Watch', 3450, 'img/about.webp', 'HX68 Smartwatch | Bluetooth Call | Android & IOS | Heart Rate Sensor | G Sensor | Sleep Monitor |', 1),
(84, 'Smart Phone', 7650, 'img/mobile5.png', 'Iphone xr yellow mobile phone on Smart phone xr yellow mobile phone ', 2),
(85, 'Smart Phone', 29000, 'img/mobile6.png', 'Iphone xr yellow mobile phone on Smart phone xr yellow mobile phone ', 2),
(87, 'Smart Phone', 29000, 'img/mobile8.webp', 'Realme C51 RAM 4GB ROM 64GB Front Camera 5 MP Back Camera 50 MP + 0.08 MP ', 2),
(90, 'Smart Phone', 59000, 'img/mobile7.webp', 'badgeTecno CAMON 20 8GB RAM-256GB ROM 5000MAH BATTERY PTA APPROVED ', 2),
(91, 'Smart Phone', 59000, 'img/mobile5.webp', 'badgeTecno CAMON 20 8GB RAM-256GB ROM 5000MAH BATTERY PTA APPROVED', 2),
(94, 'Shoes', 2450, 'img/image2.webp', 'best shoes ', 5);

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
(1, 'Asfhan', 'asfahan@gmail.com', '12345', 'home', '12345678988', 2),
(2, 'wardah', 'xyz@gmail.com', 'abc123', 'karachi', '12345678901', 2),
(3, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(4, 'Ibrahim', 'xyz@gmail.com', 'abc123', 'lahore', '12345678908', 2),
(5, 'asfand', 'xyz@gmail.com', '123', 'lahore', '12345678988', 2),
(6, 'admin', 'admin@gmail.com', 'admin123', 'karachi', '03124567894', 1),
(7, 'Mubsir', 'mubsir@gmail.com', 'mubsir', 'I block', '03172239904', 2),
(9, 'Arbaz', 'arbaz@gmail.com', '6767', 'aotech', '7654', 1),
(10, 'talha', 'talha@gmail.com', 'talha', 'new', '98768868686', 2),
(11, 'hina', 'hina@gmail.com', 'hina', '234567', '0987654', 2),
(12, 'jannat', 'jannat@gmail.com', 'janat', 'home', '98765', 2),
(13, 'anus', 'anus@gmail.com', 'anus', 'hme', '09876876', 2),
(14, 'Imran', 'imran@gmail.com', 'imran', 'home', '0987654', 1),
(15, 'niazi', 'nizazi@gmail.com', '234', '2345', '2334', NULL),
(16, 'xubi', 'xubi@gmail.com', 'xubi', 'home', '098765', NULL),
(17, 'Ibrahim', 'xyz@gmail.com', '112233', 'street', '12345678988', 2),
(18, 'kuch bhiii', 'kuchbhi@gmail.com', 'kuchbhi', 'lahore', '090078601', 2),
(19, 'Company', 'hsc@gmail.com', 'hsc', 'Port Qasim', '+91 9399065', 2);

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
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
