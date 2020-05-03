-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 10:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT 0,
  `brand_status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`, `created_by`, `created_on`, `updated_on`) VALUES
(2, 'Futaali', 1, 1, '', '2020-04-27 10:23:16', '2020-04-28 20:53:28'),
(3, 'Daako', 1, 1, '', '2020-04-27 10:28:13', '2020-04-28 20:53:34'),
(7, 'Swalah', 1, 1, 'Ibanda Akilam', '2020-04-27 10:43:16', '2020-04-28 20:53:39'),
(8, 'Samona', 1, 0, 'Ibanda Akilam', '2020-04-27 10:58:48', '2020-04-28 20:53:45'),
(11, 'Toyota', 0, 0, 'Ibanda Akilam', '2020-04-27 11:18:07', '2020-04-27 12:15:09'),
(12, 'Benz', 0, 1, 'Ibanda Akilam', '2020-04-27 11:21:35', '2020-04-27 11:21:35'),
(13, 'Land Cruiser', 0, 0, 'Ibanda Akilam', '2020-04-27 11:23:59', '2020-04-27 12:29:16'),
(14, 'Movit', 0, 0, 'Ibanda Akilam', '2020-04-27 12:03:06', '2020-04-27 12:15:31'),
(16, 'm 15', 0, 1, 'MukoovaJuma', '2020-04-29 07:44:13', '2020-04-29 07:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'Omo', 1, 1, '', '2020-04-26 09:41:03', '2020-04-26 09:41:03'),
(2, 'hom', 1, 1, 'Ibanda Akilam', '2020-04-29 15:14:13', '2020-04-29 15:14:13'),
(3, 'Human', 1, 1, 'Ibanda Akilam', '2020-04-29 17:52:29', '2020-04-29 17:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(60) NOT NULL,
  `location` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(120) NOT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `cpassword` varchar(100) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fullName`, `email`, `mobile`, `location`, `username`, `password`, `account_status`, `cpassword`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'Ibanda Akilam', 'ibandaakilam@gmail.com', '0705207032', 'Busei, Iganga', 'akilam', '62608e08adc29a8d6dbc9754e659f125', 1, '', 'Mukoova', '2020-04-27 09:19:34', '2020-04-27 09:22:27'),
(3, 'Katuntubiru Med', 'med@gmail.com', '0706644545', 'Buwagi', 'med', '243e61e9410a9f577d2d662c67025ee9', 0, '', 'Ibanda Akilam', '2020-04-27 19:51:30', '2020-04-27 19:51:30'),
(5, 'KAT MAK', 'makar@gmail.com', '9999999900', 'Masaka', 'mak', 'b46765d35ce17db6cb93fc970b32c6e9', 0, 'zGesVV!6$', 'Ibanda Akilam', '2020-04-27 20:03:57', '2020-04-27 20:03:57');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `Username` varchar(45) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `fullName` varchar(45) NOT NULL,
  `userLevel` varchar(45) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `centreCode` varchar(75) NOT NULL,
  `fullCentreName` varchar(45) NOT NULL,
  `phoneNumber` varchar(150) NOT NULL,
  `emailAddress` text NOT NULL,
  `Status` varchar(30) NOT NULL,
  `assigned_centers` text NOT NULL,
  `assigned_roles` text NOT NULL,
  `default_center` text NOT NULL,
  `default_role` text NOT NULL,
  `last_login_ip` text NOT NULL,
  `last_login_activity` datetime NOT NULL,
  `last_login_date` text NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `project_centers` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `payment_place` int(11) NOT NULL,
  `gstn` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `total_sales` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`, `total_sales`, `created_by`, `created_on`, `updated_on`) VALUES
(2, 'Liquid Soap', '../assets/images/stock/19690679095ea8f623f1b2a.jpg', 2, 1, '5', '4', 1, 1, 0, 'Ibanda Akilam', '2020-04-29 03:36:03', '2020-04-29 05:21:25'),
(3, 'Hand Sanitiser', '../assets/images/stock/5280158245ea906abdd410.jpg', 3, 1, '3', '3', 2, 2, 0, 'Ibanda Akilam', '2020-04-29 04:46:35', '2020-04-29 05:21:37'),
(4, 'Hand Cleanser', '../assets/images/stock/15547903245ea90ae478073.jpg', 2, 1, '3', '2', 2, 1, 0, 'Ibanda Akilam', '2020-04-29 05:04:36', '2020-04-29 05:04:36'),
(5, 'Washing Soap', '../assets/images/stock/5168576175ea90cf7a2f69.jpg', 7, 1, '2', '2', 2, 1, 0, 'Ibanda Akilam', '2020-04-29 05:13:27', '2020-04-29 05:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `system_access_logs`
--

CREATE TABLE `system_access_logs` (
  `id` int(11) NOT NULL,
  `activity` text DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `month` varchar(40) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `activity_time` text NOT NULL,
  `log_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_access_logs`
--

INSERT INTO `system_access_logs` (`id`, `activity`, `day`, `month`, `year`, `username`, `activity_time`, `log_type`) VALUES
(1, 'Juma logged In', 1, '2', 2020, 'juma', '2:30', 'Success'),
(2, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (12:44:53 PM)', 'SUCCESS'),
(3, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (01:29:55 PM)', 'SUCCESS'),
(4, 'logged in from ::1', 25, 'April', 2020, 'admin', 'Saturday 25<sup>th</sup>, April 2020 (06:04:48 PM)', 'SUCCESS'),
(5, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (07:28:33 AM)', 'SUCCESS'),
(6, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:42:23 AM)', 'SUCCESS'),
(7, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:43:56 AM)', 'SUCCESS'),
(8, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:57:05 AM)', 'SUCCESS'),
(9, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (09:07:14 AM)', 'SUCCESS'),
(10, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:00:46 AM)', 'INFO'),
(11, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:01:20 AM)', 'INFO'),
(12, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:12:39 AM)', 'SUCCESS'),
(13, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:13:25 AM)', 'INFO'),
(14, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:13:33 AM)', 'SUCCESS'),
(15, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:21:05 AM)', 'INFO'),
(16, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:21:13 AM)', 'SUCCESS'),
(17, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:35 AM)', 'INFO'),
(18, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:47 AM)', 'SUCCESS'),
(19, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:24:55 AM)', 'INFO'),
(20, 'logged out from ::1', 26, 'April', 2020, '', 'Sunday 26<sup>th</sup>, April 2020 (12:10:46 PM)', 'INFO'),
(21, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (05:43:16 PM)', 'SUCCESS'),
(22, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:30:19 PM)', 'INFO'),
(23, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:37:41 PM)', 'SUCCESS'),
(24, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (06:37:58 PM)', 'INFO'),
(25, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (08:18:00 PM)', 'SUCCESS'),
(26, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (10:22:45 PM)', 'SUCCESS'),
(27, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (10:23:02 PM)', 'INFO'),
(28, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:05:37 PM)', 'SUCCESS'),
(29, 'logged out from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:08:29 PM)', 'INFO'),
(30, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:09:02 PM)', 'SUCCESS'),
(31, 'logged in from ::1', 26, 'April', 2020, 'admin', 'Sunday 26<sup>th</sup>, April 2020 (11:09:31 PM)', 'SUCCESS'),
(32, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (10:10:11 AM)', 'SUCCESS'),
(33, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (11:19:56 AM)', 'SUCCESS'),
(34, 'logged in from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (11:46:06 AM)', 'SUCCESS'),
(35, 'logged out from ::1', 27, 'April', 2020, 'admin', 'Monday 27<sup>th</sup>, April 2020 (12:23:25 PM)', 'INFO'),
(36, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:24:24 PM)', 'SUCCESS'),
(37, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:25:34 PM)', 'INFO'),
(38, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (12:25:55 PM)', 'SUCCESS'),
(39, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:26:43 PM)', 'SUCCESS'),
(40, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:27:49 PM)', 'SUCCESS'),
(41, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:33:53 PM)', 'INFO'),
(42, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (01:34:09 PM)', 'SUCCESS'),
(43, 'Made an edit on the Brand : Pajerods  from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (04:43:11 PM)', 'INFO'),
(44, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (06:11:44 PM)', 'SUCCESS'),
(45, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:00:25 PM)', 'INFO'),
(46, 'logged in from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:02:49 PM)', 'SUCCESS'),
(47, 'logged out from ::1', 27, 'April', 2020, 'akilam', 'Monday 27<sup>th</sup>, April 2020 (11:04:11 PM)', 'INFO'),
(48, 'logged in from ::1', 27, 'April', 2020, 'mak', 'Monday 27<sup>th</sup>, April 2020 (11:04:32 PM)', 'SUCCESS'),
(49, 'logged in from ::1', 28, 'April', 2020, 'akilam', 'Tuesday 28<sup>th</sup>, April 2020 (11:38:05 PM)', 'SUCCESS'),
(50, 'logged out from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (10:41:07 AM)', 'INFO'),
(51, 'logged in from ::1', 29, 'April', 2020, 'admins', 'Wednesday 29<sup>th</sup>, April 2020 (10:42:33 AM)', 'SUCCESS'),
(52, 'logged in from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (06:13:53 PM)', 'SUCCESS'),
(53, 'logged in from ::1', 29, 'April', 2020, 'akilam', 'Wednesday 29<sup>th</sup>, April 2020 (09:07:39 PM)', 'SUCCESS'),
(54, 'logged in from ::1', 30, 'April', 2020, 'akilam', 'Thursday 30<sup>th</sup>, April 2020 (05:45:48 AM)', 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `oname` varchar(100) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `accountType` int(11) DEFAULT NULL,
  `account_status` int(11) NOT NULL DEFAULT 0,
  `pass_update` int(11) NOT NULL,
  `last_login_ip` text NOT NULL,
  `last_login_date` text NOT NULL,
  `created_by` varchar(40) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `sname`, `fname`, `oname`, `username`, `gender`, `email`, `mobile`, `password`, `role`, `accountType`, `account_status`, `pass_update`, `last_login_ip`, `last_login_date`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'Mukoova', 'Juma', 'peepetu', 'admins', 'Male', 'mukoovajuma183@gmail.com', '0702499649', '1a1dc91c907325c69271ddf0c944bc72', 1, 1, 1, 0, '::1', 'Monday 27<sup>th</sup>, Apr 2020 (12:23:25 PM)', 'Juma', '2020-04-25 13:05:32', '2020-04-29 07:40:56'),
(2, 'Kange', 'Rahim', 'owo', 'raha', 'm', 'm@gmail.com', '070230440', '1a1dc91c907325c69271ddf0c944bc72', 1, 1, 0, 0, '12:00', '12/12/2019', 'juma', '2020-04-29 08:06:31', '2020-04-29 11:25:03'),
(3, 'Maganda', '', 'Bakali', 'mankaluba', '1', 'maganda@gmail.com', '0702394495', '721a3b13a3898a8ff3c52aaaae7bd7b2', 2, 0, 1, 0, '', '', 'MukoovaJuma', '2020-04-29 11:00:10', '2020-04-29 11:31:00'),
(4, 'Mutungi', 'Ian', 'Ian', 'ian', '1', 'ian@gmail.com', '0702399539', 'ed409817b76348be7ce4accb35a8f856', 2, 0, 1, 0, '', '', 'MukoovaJuma', '2020-04-29 11:01:54', '2020-04-29 11:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profileImage` text NOT NULL,
  `about` varchar(500) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`user_id`, `username`, `password`, `email`, `profileImage`, `about`, `created_by`, `created_on`, `updated_on`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', '2020-04-25 03:56:16', '2020-04-25 03:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` text DEFAULT NULL,
  `roles_allowed` text DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
