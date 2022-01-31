-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 09:31 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kioskportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blackbell_users`
--

CREATE TABLE `blackbell_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_username` varchar(255) NOT NULL,
  `fld_userid` varchar(255) NOT NULL,
  `fld_status` varchar(255) NOT NULL,
  `fld_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blackbell_users`
--

INSERT INTO `blackbell_users` (`id`, `email`, `fld_name`, `fld_username`, `fld_userid`, `fld_status`, `fld_password`, `created_at`, `updated_at`) VALUES
(7, 'charlesosegi@gmail.com', 'cashier', 'self service cashier', '0adfd74a-15e5-11ea-ef2a-675501742c2e', 'active', '$2y$10$8OPgqidoeU0VhCX9RwzV8ujiHGeHfi2EOdIg6IOfI9pK4qYDqIQGK', '2020-03-20 09:02:50', '2020-03-20 11:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit`
--

CREATE TABLE `tbl_audit` (
  `fld_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_username` varchar(255) NOT NULL,
  `fld_action` varchar(255) NOT NULL,
  `fld_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_audit`
--

INSERT INTO `tbl_audit` (`fld_id`, `created_at`, `fld_username`, `fld_action`, `fld_status`, `updated_at`) VALUES
(1, '2020-03-20 12:02:00', 'self service cashier', 'Logged In', 'open', '2020-03-20 12:02:00'),
(2, '2020-03-20 12:05:21', 'self service cashier', 'Logged In', 'open', '2020-03-20 12:05:21'),
(3, '2020-03-20 12:06:57', 'self service cashier', 'Logged In', 'open', '2020-03-20 12:06:57'),
(4, '2020-03-20 12:07:11', 'self service ca', 'Failed Log in', 'closed', '2020-03-20 12:07:11'),
(5, '2020-03-20 12:09:01', 'self service cashier', 'Logged In', 'open', '2020-03-20 12:09:01'),
(6, '2020-03-20 14:17:15', 'self service cashier', 'Logged In', 'open', '2020-03-20 14:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(11) NOT NULL,
  `fld_order_no` varchar(255) NOT NULL,
  `fld_order` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT 'preparation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `fld_order_no`, `fld_order`, `created_at`, `updated_at`, `status`) VALUES
(1, '9428078535', 'Fried Rice X1,Burger & Fries X1', '2020-03-20 13:37:07', '2020-03-20 18:14:29', 'complete'),
(2, '8999', 'Rice X1', '2020-03-21 02:15:55', '2020-03-21 02:16:37', 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans`
--

CREATE TABLE `tbl_trans` (
  `id` int(11) NOT NULL,
  `fld_transRef` varchar(255) NOT NULL,
  `fld_order_no` varchar(255) NOT NULL,
  `fld_order` varchar(255) NOT NULL,
  `fld_time` varchar(255) NOT NULL,
  `fld_amount` varchar(255) NOT NULL,
  `fld_type` varchar(255) NOT NULL,
  `fld_username` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_trans`
--

INSERT INTO `tbl_trans` (`id`, `fld_transRef`, `fld_order_no`, `fld_order`, `fld_time`, `fld_amount`, `fld_type`, `fld_username`, `created_at`, `updated_at`) VALUES
(1, '12', '8999', '[{Rice: x1}]', '1500009', '4,500', 'Card', 'self service cashier', '2020-03-21 02:08:32', '2020-03-21 02:08:32'),
(2, '12', '8999', '[{Rice: x1}]', '1500009', '4,500', 'Card', 'self service cashier', '2020-03-21 02:11:32', '2020-03-21 02:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_username` varchar(255) NOT NULL,
  `fld_role` varchar(255) NOT NULL,
  `fld_password` varchar(255) NOT NULL,
  `fld_status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fld_name`, `fld_username`, `fld_role`, `fld_password`, `fld_status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin', 'superAdmin', '$2y$12$KaemC6zJCDjqoDRt8F8.jOvoKKHAnb.c60MCMgS9088mF5Ls.4JD2', 'active', '2020-03-19 17:55:47', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blackbell_users`
--
ALTER TABLE `blackbell_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trans`
--
ALTER TABLE `tbl_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blackbell_users`
--
ALTER TABLE `blackbell_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_audit`
--
ALTER TABLE `tbl_audit`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_trans`
--
ALTER TABLE `tbl_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
