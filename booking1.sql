-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 04:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `oder_time` time NOT NULL,
  `oder_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_id`, `shop_id`, `product_id`, `oder_time`, `oder_date`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 3, '09:00:00', '2023-04-13', '2023-04-12 08:10:52', '2023-04-12 08:10:52'),
(6, 1, 1, 3, '09:00:00', '2023-04-13', '2023-04-12 08:11:13', '2023-04-12 08:11:13');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Trần Luân', '0349394368', '2023-04-12 08:10:52', '2023-04-12 08:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `db_test`
--

CREATE TABLE `db_test` (
  `id` bigint(20) NOT NULL,
  `hour` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `db_test`
--

INSERT INTO `db_test` (`id`, `hour`, `quantity`, `created_at`) VALUES
(1, '07:00:00', 5, '2023-04-10 17:00:00'),
(2, '08:00:00', 5, '2023-04-10 17:00:00'),
(3, '09:00:00', 5, '2023-04-10 17:00:00'),
(4, '10:00:00', 5, '2023-04-10 17:00:00'),
(5, '11:00:00', 5, '2023-04-10 17:00:00'),
(6, '12:00:00', 5, '2023-04-10 17:00:00'),
(7, '13:00:00', 5, '2023-04-10 17:00:00'),
(8, '14:00:00', 5, '2023-04-10 17:00:00'),
(9, '15:00:00', 5, '2023-04-10 17:00:00'),
(10, '16:00:00', 5, '2023-04-10 17:00:00'),
(11, '17:00:00', 5, '2023-04-10 17:00:00'),
(12, '18:00:00', 5, '2023-04-10 17:00:00'),
(13, '19:00:00', 5, '2023-04-10 17:00:00'),
(14, '07:00:00', 5, '2023-04-10 17:00:00'),
(15, '08:00:00', 5, '2023-04-10 17:00:00'),
(16, '09:00:00', 5, '2023-04-10 17:00:00'),
(17, '10:00:00', 5, '2023-04-10 17:00:00'),
(18, '11:00:00', 5, '2023-04-10 17:00:00'),
(19, '12:00:00', 5, '2023-04-10 17:00:00'),
(20, '13:00:00', 5, '2023-04-10 17:00:00'),
(21, '14:00:00', 5, '2023-04-10 17:00:00'),
(22, '15:00:00', 5, '2023-04-10 17:00:00'),
(23, '16:00:00', 5, '2023-04-10 17:00:00'),
(24, '17:00:00', 5, '2023-04-10 17:00:00'),
(25, '18:00:00', 5, '2023-04-10 17:00:00'),
(26, '19:00:00', 5, '2023-04-10 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dead Note', 'dead-note', 300000, 'deadnote.png', '2023-04-10 00:56:44', '2023-04-10 00:56:44'),
(2, 'Kungfu Book', 'kungfu-book', 100000, 'kungfubook.jpg', '2023-04-10 00:58:16', '2023-04-10 00:58:16'),
(3, 'Magic Book', 'magic-book', 200000, 'magicbook.png', '2023-04-10 00:59:01', '2023-04-10 00:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Sóc Trăng', '0987661703', 'Thạnh Trị - Sóc Trăng'),
(2, 'TP.HCM', '0987661703', 'Quận 12 - TP.HCM');

-- --------------------------------------------------------

--
-- Table structure for table `slot_time`
--

CREATE TABLE `slot_time` (
  `id` bigint(20) NOT NULL,
  `hour` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `shop_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slot_time`
--

INSERT INTO `slot_time` (`id`, `hour`, `quantity`, `shop_id`, `created_at`) VALUES
(1, '07:00:00', 5, 1, '2023-04-09 17:00:00'),
(2, '08:00:00', 5, 1, '2023-04-09 17:00:00'),
(3, '09:00:00', 5, 1, '2023-04-09 17:00:00'),
(4, '10:00:00', 5, 1, '2023-04-09 17:00:00'),
(5, '11:00:00', 5, 1, '2023-04-09 17:00:00'),
(6, '12:00:00', 5, 1, '2023-04-09 17:00:00'),
(7, '13:00:00', 5, 1, '2023-04-09 17:00:00'),
(8, '14:00:00', 5, 1, '2023-04-09 17:00:00'),
(9, '15:00:00', 5, 1, '2023-04-09 17:00:00'),
(10, '16:00:00', 5, 1, '2023-04-09 17:00:00'),
(11, '17:00:00', 5, 1, '2023-04-09 17:00:00'),
(12, '18:00:00', 5, 1, '2023-04-09 17:00:00'),
(13, '19:00:00', 5, 1, '2023-04-09 17:00:00'),
(14, '07:00:00', 5, 2, '2023-04-09 17:00:00'),
(15, '08:00:00', 5, 2, '2023-04-09 17:00:00'),
(16, '09:00:00', 5, 2, '2023-04-09 17:00:00'),
(17, '10:00:00', 5, 2, '2023-04-09 17:00:00'),
(18, '11:00:00', 5, 2, '2023-04-09 17:00:00'),
(19, '12:00:00', 5, 2, '2023-04-09 17:00:00'),
(20, '13:00:00', 5, 2, '2023-04-09 17:00:00'),
(21, '14:00:00', 5, 2, '2023-04-09 17:00:00'),
(22, '15:00:00', 5, 2, '2023-04-09 17:00:00'),
(23, '16:00:00', 5, 2, '2023-04-09 17:00:00'),
(24, '17:00:00', 5, 2, '2023-04-09 17:00:00'),
(25, '18:00:00', 5, 2, '2023-04-09 17:00:00'),
(26, '19:00:00', 5, 2, '2023-04-09 17:00:00'),
(27, '07:00:00', 5, 1, '2023-04-10 17:00:00'),
(28, '08:00:00', 5, 1, '2023-04-10 17:00:00'),
(29, '09:00:00', 5, 1, '2023-04-10 17:00:00'),
(30, '10:00:00', 5, 1, '2023-04-10 17:00:00'),
(31, '11:00:00', 5, 1, '2023-04-10 17:00:00'),
(32, '12:00:00', 5, 1, '2023-04-10 17:00:00'),
(33, '13:00:00', 5, 1, '2023-04-10 17:00:00'),
(34, '14:00:00', 5, 1, '2023-04-10 17:00:00'),
(35, '15:00:00', 5, 1, '2023-04-10 17:00:00'),
(36, '16:00:00', 5, 1, '2023-04-10 17:00:00'),
(37, '17:00:00', 5, 1, '2023-04-10 17:00:00'),
(38, '18:00:00', 5, 1, '2023-04-10 17:00:00'),
(39, '19:00:00', 5, 1, '2023-04-10 17:00:00'),
(40, '07:00:00', 5, 2, '2023-04-10 17:00:00'),
(41, '08:00:00', 5, 2, '2023-04-10 17:00:00'),
(42, '09:00:00', 5, 2, '2023-04-10 17:00:00'),
(43, '10:00:00', 5, 2, '2023-04-10 17:00:00'),
(44, '11:00:00', 5, 2, '2023-04-10 17:00:00'),
(45, '12:00:00', 5, 2, '2023-04-10 17:00:00'),
(46, '13:00:00', 5, 2, '2023-04-10 17:00:00'),
(47, '14:00:00', 5, 2, '2023-04-10 17:00:00'),
(48, '15:00:00', 5, 2, '2023-04-10 17:00:00'),
(49, '16:00:00', 5, 2, '2023-04-10 17:00:00'),
(50, '17:00:00', 5, 2, '2023-04-10 17:00:00'),
(51, '18:00:00', 5, 2, '2023-04-10 17:00:00'),
(52, '19:00:00', 5, 2, '2023-04-10 17:00:00'),
(53, '07:00:00', 5, 1, '2023-04-11 17:00:00'),
(54, '08:00:00', 5, 1, '2023-04-11 17:00:00'),
(55, '09:00:00', 5, 1, '2023-04-11 17:00:00'),
(56, '10:00:00', 5, 1, '2023-04-11 17:00:00'),
(57, '11:00:00', 5, 1, '2023-04-11 17:00:00'),
(58, '12:00:00', 5, 1, '2023-04-11 17:00:00'),
(59, '13:00:00', 5, 1, '2023-04-11 17:00:00'),
(60, '14:00:00', 5, 1, '2023-04-11 17:00:00'),
(61, '15:00:00', 5, 1, '2023-04-11 17:00:00'),
(62, '16:00:00', 5, 1, '2023-04-11 17:00:00'),
(63, '17:00:00', 5, 1, '2023-04-11 17:00:00'),
(64, '18:00:00', 5, 1, '2023-04-11 17:00:00'),
(65, '19:00:00', 5, 1, '2023-04-11 17:00:00'),
(66, '07:00:00', 5, 2, '2023-04-11 17:00:00'),
(67, '08:00:00', 5, 2, '2023-04-11 17:00:00'),
(68, '09:00:00', 5, 2, '2023-04-11 17:00:00'),
(69, '10:00:00', 5, 2, '2023-04-11 17:00:00'),
(70, '11:00:00', 5, 2, '2023-04-11 17:00:00'),
(71, '12:00:00', 5, 2, '2023-04-11 17:00:00'),
(72, '13:00:00', 5, 2, '2023-04-11 17:00:00'),
(73, '14:00:00', 5, 2, '2023-04-11 17:00:00'),
(74, '15:00:00', 5, 2, '2023-04-11 17:00:00'),
(75, '16:00:00', 5, 2, '2023-04-11 17:00:00'),
(76, '17:00:00', 5, 2, '2023-04-11 17:00:00'),
(77, '18:00:00', 5, 2, '2023-04-11 17:00:00'),
(78, '19:00:00', 5, 2, '2023-04-11 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_test`
--
ALTER TABLE `db_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot_time`
--
ALTER TABLE `slot_time`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_test`
--
ALTER TABLE `db_test`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slot_time`
--
ALTER TABLE `slot_time`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `slot_time` ON SCHEDULE EVERY 1 DAY STARTS '2023-04-10 00:00:05' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO
slot_time(hour,quantity,shop_id,created_at)
VALUES
('07:00:00',5,1,CURRENT_DATE),
('08:00:00',5,1,CURRENT_DATE),
('09:00:00',5,1,CURRENT_DATE),
('10:00:00',5,1,CURRENT_DATE),
('11:00:00',5,1,CURRENT_DATE),
('12:00:00',5,1,CURRENT_DATE),
('13:00:00',5,1,CURRENT_DATE),
('14:00:00',5,1,CURRENT_DATE),
('15:00:00',5,1,CURRENT_DATE),
('16:00:00',5,1,CURRENT_DATE),
('17:00:00',5,1,CURRENT_DATE),
('18:00:00',5,1,CURRENT_DATE),
('19:00:00',5,1,CURRENT_DATE),
('07:00:00',5,2,CURRENT_DATE),
('08:00:00',5,2,CURRENT_DATE),
('09:00:00',5,2,CURRENT_DATE),
('10:00:00',5,2,CURRENT_DATE),
('11:00:00',5,2,CURRENT_DATE),
('12:00:00',5,2,CURRENT_DATE),
('13:00:00',5,2,CURRENT_DATE),
('14:00:00',5,2,CURRENT_DATE),
('15:00:00',5,2,CURRENT_DATE),
('16:00:00',5,2,CURRENT_DATE),
('17:00:00',5,2,CURRENT_DATE),
('18:00:00',5,2,CURRENT_DATE),
('19:00:00',5,2,CURRENT_DATE)$$

CREATE DEFINER=`root`@`localhost` EVENT `slot_time_1` ON SCHEDULE EVERY 1 DAY STARTS '2023-04-10 00:00:10' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO
slot_time(hour,quantity,shop_id,created_at)
VALUES
('07:00:00',5,1,CURRENT_DATE + 1),
('08:00:00',5,1,CURRENT_DATE + 1),
('09:00:00',5,1,CURRENT_DATE + 1),
('10:00:00',5,1,CURRENT_DATE + 1),
('11:00:00',5,1,CURRENT_DATE + 1),
('12:00:00',5,1,CURRENT_DATE + 1),
('13:00:00',5,1,CURRENT_DATE + 1),
('14:00:00',5,1,CURRENT_DATE + 1),
('15:00:00',5,1,CURRENT_DATE + 1),
('16:00:00',5,1,CURRENT_DATE + 1),
('17:00:00',5,1,CURRENT_DATE + 1),
('18:00:00',5,1,CURRENT_DATE + 1),
('19:00:00',5,1,CURRENT_DATE + 1),

('07:00:00',5,2,CURRENT_DATE + 1),
('08:00:00',5,2,CURRENT_DATE + 1),
('09:00:00',5,2,CURRENT_DATE + 1),
('10:00:00',5,2,CURRENT_DATE + 1),
('11:00:00',5,2,CURRENT_DATE + 1),
('12:00:00',5,2,CURRENT_DATE + 1),
('13:00:00',5,2,CURRENT_DATE + 1),
('14:00:00',5,2,CURRENT_DATE + 1),
('15:00:00',5,2,CURRENT_DATE + 1),
('16:00:00',5,2,CURRENT_DATE + 1),
('17:00:00',5,2,CURRENT_DATE + 1),
('18:00:00',5,2,CURRENT_DATE + 1),
('19:00:00',5,2,CURRENT_DATE + 1)$$

CREATE DEFINER=`root`@`localhost` EVENT `slot_time_2` ON SCHEDULE EVERY 1 DAY STARTS '2023-04-10 00:00:15' ON COMPLETION NOT PRESERVE ENABLE DO INSERT INTO
slot_time(hour,quantity,shop_id,created_at)
VALUES
('07:00:00',5,1,CURRENT_DATE + 2),
('08:00:00',5,1,CURRENT_DATE + 2),
('09:00:00',5,1,CURRENT_DATE + 2),
('10:00:00',5,1,CURRENT_DATE + 2),
('11:00:00',5,1,CURRENT_DATE + 2),
('12:00:00',5,1,CURRENT_DATE + 2),
('13:00:00',5,1,CURRENT_DATE + 2),
('14:00:00',5,1,CURRENT_DATE + 2),
('15:00:00',5,1,CURRENT_DATE + 2),
('16:00:00',5,1,CURRENT_DATE + 2),
('17:00:00',5,1,CURRENT_DATE + 2),
('18:00:00',5,1,CURRENT_DATE + 2),
('19:00:00',5,1,CURRENT_DATE + 2),

('07:00:00',5,2,CURRENT_DATE + 2),
('08:00:00',5,2,CURRENT_DATE + 2),
('09:00:00',5,2,CURRENT_DATE + 2),
('10:00:00',5,2,CURRENT_DATE + 2),
('11:00:00',5,2,CURRENT_DATE + 2),
('12:00:00',5,2,CURRENT_DATE + 2),
('13:00:00',5,2,CURRENT_DATE + 2),
('14:00:00',5,2,CURRENT_DATE + 2),
('15:00:00',5,2,CURRENT_DATE + 2),
('16:00:00',5,2,CURRENT_DATE + 2),
('17:00:00',5,2,CURRENT_DATE + 2),
('18:00:00',5,2,CURRENT_DATE + 2),
('19:00:00',5,2,CURRENT_DATE + 2)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
