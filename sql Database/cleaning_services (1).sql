-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 09:58 AM
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
-- Database: `cleaning_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `A_ID` int(5) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`A_ID`, `AdminName`, `Password`) VALUES
(1, 'Hiten@user123', 'shw3%@3$35');

-- --------------------------------------------------------

--
-- Table structure for table `basic_service`
--

CREATE TABLE `basic_service` (
  `BS_ID` int(5) NOT NULL,
  `BSName` varchar(30) NOT NULL,
  `Frequency` varchar(15) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Worker_Group` varchar(25) NOT NULL,
  `Workers` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basic_service`
--

INSERT INTO `basic_service` (`BS_ID`, `BSName`, `Frequency`, `Date`, `Time`, `Price`, `Worker_Group`, `Workers`) VALUES
(1, 'Carpet and Window Cleaning', 'monthly', '2025-01-29', '18:40:00.000000', '$1060', 'male', 9),
(2, 'Carpet and Window Cleaning', 'monthly', '2025-01-29', '18:40:00.000000', '$1060', 'male', 9),
(3, 'Carpet and Window Cleaning', 'monthly', '2025-01-29', '19:31:00.000000', '$480', 'male', 4),
(4, 'Carpet and Window Cleaning', 'monthly', '2025-03-01', '08:54:00.000000', '$1060', 'male', 9),
(5, 'Carpet and Window Cleaning', 'monthly', '2025-03-01', '08:54:00.000000', '$600', 'male', 5),
(6, 'Carpet and Window Cleaning', 'monthly', '2025-03-01', '08:54:00.000000', '$600', 'male', 5),
(7, 'Carpet and Window Cleaning', 'monthly', '2025-03-01', '08:54:00.000000', '$480', 'male', 4),
(8, 'Carpet and Window Cleaning', 'monthly', '2025-03-01', '08:54:00.000000', '$940', 'combine', 8),
(9, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-01', '08:54:00.000000', '$960', 'combine', 4),
(10, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(11, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(12, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(13, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(14, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(15, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(16, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(17, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(18, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(19, 'Carpet and Window Cleaning', 'monthly', '2025-01-28', '16:55:00.000000', '$700', 'female', 6),
(20, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-04', '00:11:00.000000', '$2120', 'combine', 9),
(21, 'Carpet and Window Cleaning', 'monthly', '2025-02-12', '02:04:00.000000', '$1060', 'female', 9),
(22, 'Carpet and Window Cleaning', 'monthly', '2025-02-12', '02:04:00.000000', '$1060', 'female', 9),
(23, 'Carpet and Window Cleaning', 'two_monthly', '2025-02-12', '02:04:00.000000', '$2120', 'female', 9),
(24, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$3150', 'female', 9),
(25, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$3150', 'female', 9),
(26, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$1750', 'female', 5),
(27, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$5600', 'female', 16),
(28, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$5600', 'combine', 16),
(29, 'Carpet and Window Cleaning', 'three_monthly', '2025-02-12', '02:04:00.000000', '$5600', 'combine', 16),
(30, 'Carpet and Window Cleaning', 'monthly', '2025-03-07', '22:51:00.000000', '$700', 'combine(male & ', 6),
(31, 'Carpet and Window Cleaning', 'monthly', '2025-03-07', '22:51:00.000000', '$700', 'combine(male & ', 6),
(32, 'Carpet and Window Cleaning', 'monthly', '2025-03-07', '22:51:00.000000', '$700', 'combine(male & female)', 6),
(33, 'Carpet and Window Cleaning', 'monthly', '2025-03-07', '22:51:00.000000', '$820', 'combine(male & female)', 6),
(34, 'Carpet and Window Cleaning', 'monthly', '2025-03-07', '22:51:00.000000', '$940', 'combine(male & female)', 6),
(35, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-06', '23:02:00.000000', '$1400', 'combine(male & female)', 0),
(36, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-06', '23:02:00.000000', '$4040', 'combine(male & female)', 17),
(37, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-07', '11:12:00.000000', '$1400', 'combine(male & female)', 6),
(38, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-07', '11:12:00.000000', '$1640', 'combine(male & female)', 6),
(39, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-07', '11:12:00.000000', '$1880', 'combine(male & female)', 6),
(40, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-07', '11:12:00.000000', '$1880', 'combine(male & female)', 6),
(41, 'Carpet and Window Cleaning', 'two_monthly', '2025-03-07', '11:12:00.000000', '$1880', 'combine(male & female)', 6);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `B_ID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `MobileNo` decimal(10,0) NOT NULL,
  `Address` varchar(10) NOT NULL,
  `City` varchar(10) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Pincode` int(6) NOT NULL,
  `created_at` datetime NOT NULL,
  `S_ID` int(5) DEFAULT NULL,
  `BS_ID` int(5) DEFAULT NULL,
  `SS_ID` int(5) DEFAULT NULL,
  `PS_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`B_ID`, `Name`, `Email`, `MobileNo`, `Address`, `City`, `State`, `Pincode`, `created_at`, `S_ID`, `BS_ID`, `SS_ID`, `PS_ID`) VALUES
(131, 'Hiten Prajapati', 'hitenprajapati6659@gmail.com', 8780874064, 'Mumanvas', 'Satlasana', 'Gujarat ', 384330, '2025-03-25 11:33:55', NULL, NULL, NULL, 17),
(132, 'Hiten Prajapati', 'hitenprajapati6659@gmail.com', 8780874064, 'Mumanvas', 'Satlasana', 'Gujarat ', 384330, '2025-03-25 14:15:19', NULL, NULL, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback-details`
--

CREATE TABLE `feedback-details` (
  `F_ID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address` text NOT NULL,
  `MobileNo` decimal(10,0) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback-details`
--

INSERT INTO `feedback-details` (`F_ID`, `Name`, `Address`, `MobileNo`, `Message`) VALUES
(1, 'Hiten Prajapati', 'At.PO: mumanvas ta: satlasana dist:mehsana 384330 ', 8780874064, 'Very amazing website'),
(2, 'sohil prajapati', 'At.PO: Bhalusana ta: satlasana dist:mehsana 384330', 6359623257, 'very amazing website in thidsdvkjhdddvkjv vkcjh'),
(3, 'sohil prajapati', 'At.PO: Bhalusana ta: satlasana dist:mehsana 384330', 6359623257, 'very amazing website');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `P_ID` int(5) NOT NULL,
  `B_ID` int(5) DEFAULT NULL,
  `Payment Method` varchar(20) NOT NULL,
  `Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_ID`, `B_ID`, `Payment Method`, `Date`) VALUES
(52, 131, 'Cash on Delivery', '2025-03-25 11:41:41.000000'),
(53, 132, 'Cash on Delivery', '2025-03-25 14:15:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `premium_service`
--

CREATE TABLE `premium_service` (
  `PS_ID` int(5) NOT NULL,
  `PSName` text NOT NULL,
  `Frequency` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Worker Group` varchar(25) NOT NULL,
  `Workers` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premium_service`
--

INSERT INTO `premium_service` (`PS_ID`, `PSName`, `Frequency`, `Date`, `Time`, `Price`, `Worker Group`, `Workers`) VALUES
(1, 'Kitchen Cleaning,Window Cleaning,Carpet Cleaning,Office Cleaning,Medical Cleaning,Event Cleaning', 'monthly', '2025-01-06', '19:33:00.000000', '$1200', 'male', 10),
(2, 'Furniture Cleaning,Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning,Office Cleaning,Medical Cleaning', 'two_monthly', '2025-03-06', '21:27:00.000000', '$3360', 'combine', 14),
(3, 'Furniture Cleaning,Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning,Office Cleaning,Medical Cleaning', 'three_monthly', '2025-03-06', '21:27:00.000000', '$4900', 'combine', 14),
(4, 'All services', 'three_monthly', '2025-02-22', '22:54:00.000000', '$3500', 'male', 10),
(5, 'Furniture Cleaning,Kitchen Cleaning,Car Cleaning,Window Cleaning,Carpet Cleaning', 'monthly', '2025-03-01', '22:18:00.000000', '$600', 'female', 5),
(6, 'Furniture Cleaning,Carpet Cleaning,Office Cleaning,Resturant Cleaning,Event Cleaning', 'three_monthly', '2025-03-01', '08:41:00.000000', '$2450', 'female', 7),
(7, 'All services', 'monthly', '2025-03-29', '13:09:00.000000', '$1200', 'female', 10),
(8, 'All services', 'monthly', '2025-03-29', '13:09:00.000000', '$2080', 'female', 18),
(9, 'Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning', 'monthly', '2025-03-28', '11:26:00.000000', '$1200', 'male', 10),
(10, 'Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning', 'monthly', '2025-03-28', '11:26:00.000000', '$1200', 'male', 10),
(11, 'Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning', 'monthly', '2025-03-28', '11:26:00.000000', '$1200', 'male', 10),
(12, 'Kitchen Cleaning,Car Cleaning,Bathroom Cleaning,Window Cleaning,Carpet Cleaning', 'monthly', '2025-03-28', '11:26:00.000000', '$1200', 'male', 10),
(13, 'Furniture Cleaning,Kitchen Cleaning,Car Cleaning,Carpet Cleaning', 'monthly', '2025-04-01', '00:07:00.000000', '$1200', 'female', 10),
(14, 'All services', 'monthly', '2025-04-01', '00:07:00.000000', '$1320', 'female', 11),
(15, 'Furniture Cleaning,Carpet Cleaning,Office Cleaning', 'monthly', '2025-04-01', '01:33:00.000000', '$1320', 'male', 11),
(16, 'Furniture Cleaning,Carpet Cleaning,Office Cleaning', 'monthly', '2025-04-01', '01:33:00.000000', '$1320', 'male', 11),
(17, 'Furniture Cleaning,Carpet Cleaning,Office Cleaning', 'monthly', '2025-04-01', '01:33:00.000000', '$1320', 'male', 11);

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `S_ID` int(5) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Frequency` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Worker_Group` varchar(25) NOT NULL,
  `Workers` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`S_ID`, `Sname`, `Frequency`, `Date`, `Time`, `Price`, `Worker_Group`, `Workers`) VALUES
(1, 'Window Cleaning', 'monthly', '2025-02-22', '19:20:00.000000', '$840', 'male', 7),
(2, 'Window Cleaning', 'monthly', '2025-02-22', '19:20:00.000000', '$840', 'male', 7),
(3, 'Window Cleaning', 'monthly', '2025-02-22', '19:20:00.000000', '$840', 'male', 7),
(4, 'Carpet Cleaning', 'monthly', '2025-02-22', '18:56:00.000000', '$360', 'male', 3),
(5, 'Carpet Cleaning', 'monthly', '2025-02-22', '18:56:00.000000', '$360', 'male', 3),
(6, 'Carpet Cleaning', 'monthly', '2025-02-22', '18:56:00.000000', '$360', 'male', 3),
(7, 'Bathroom Cleaning', 'two_monthly', '2025-03-01', '10:00:00.000000', '$480', 'Male', 2),
(8, 'Furniture Cleaning', 'two_monthly', '2025-03-01', '22:00:00.000000', '$940', 'female', 4),
(9, 'Furniture Cleaning', 'two_monthly', '2025-03-01', '22:00:00.000000', '$940', 'female', 4),
(10, 'Bathroom Cleaning', 'monthly', '2025-02-28', '17:18:00.000000', '$120', 'Male', 1),
(11, 'Bathroom Cleaning', 'monthly', '2025-02-28', '17:18:00.000000', '$120', 'Male', 1),
(12, 'Window Cleaning', 'three_monthly', '2025-02-13', '17:21:00.000000', '$1045', 'male', 3),
(13, 'Bathroom Cleaning', 'monthly', '2025-03-01', '10:30:00.000000', '$120', 'Male', 1),
(14, 'Window Cleaning', 'two_monthly', '2025-03-01', '11:00:00.000000', '$940', 'male', 4),
(15, 'Window Cleaning', 'monthly', '2025-02-28', '11:00:00.000000', '$360', 'male', 3),
(16, 'Window Cleaning', 'monthly', '2025-11-25', '18:02:00.000000', '$480', 'male', 4),
(17, 'Window Cleaning', 'two_monthly', '2025-02-09', '18:16:00.000000', '$480', 'male', 2),
(18, 'Bathroom Cleaning', 'monthly', '2025-02-28', '18:25:00.000000', '$360', 'Female', 3),
(19, 'Bathroom Cleaning', 'two_monthly', '2025-02-28', '18:25:00.000000', '$700', 'Female', 3),
(20, 'Window Cleaning', 'two_monthly', '2025-02-19', '18:38:00.000000', '$1180', 'combine', 5),
(21, 'Furniture Cleaning', 'three_monthly', '2025-03-07', '18:39:00.000000', '$1045', 'combine', 3),
(22, 'Window Cleaning', 'two_monthly', '2025-03-07', '02:55:00.000000', '$2380', 'combine', 10),
(23, 'Window Cleaning', 'two_monthly', '2025-03-07', '02:55:00.000000', '$2380', 'combine', 10),
(24, 'Window Cleaning', 'two_monthly', '2025-03-01', '00:04:00.000000', '$480', 'combine', 2),
(25, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$700', 'male', 3),
(26, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$1420', 'male', 6),
(27, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$4060', 'male', 17),
(28, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$2140', 'male', 9),
(29, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$2140', 'male', 9),
(30, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$2140', 'male', 9),
(31, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$2140', 'male', 9),
(32, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$2140', 'male', 9),
(33, 'Furniture Cleaning', 'two_monthly', '2025-03-06', '20:45:00.000000', '$1180', 'male', 5),
(34, 'Furniture Cleaning', 'two_monthly', '2025-03-19', '21:01:00.000000', '$940', 'female', 4),
(35, 'Furniture Cleaning', 'two_monthly', '2025-03-19', '21:01:00.000000', '$940', 'female', 4),
(36, 'Furniture Cleaning', 'two_monthly', '2025-03-19', '21:01:00.000000', '$940', 'female', 4),
(37, 'Furniture Cleaning', 'two_monthly', '2025-03-19', '21:01:00.000000', '$940', 'female', 4),
(38, '', 'two_monthly', '2025-03-01', '13:00:00.000000', '', 'female', 0),
(39, ':', 'two_monthly', '2025-03-01', '13:00:00.000000', ':', 'female', 0),
(40, ':', 'two_monthly', '2025-03-01', '13:00:00.000000', ':', 'female', 0),
(41, ':', 'two_monthly', '2025-03-01', '13:00:00.000000', ':', 'female', 0),
(42, ':', 'two_monthly', '2025-03-07', '21:37:00.000000', '$1180', 'female', 5),
(43, '', 'two_monthly', '2025-03-07', '21:37:00.000000', '$700', 'female', 3),
(44, '', 'two_monthly', '2025-03-08', '21:41:00.000000', '$940', 'combine', 4),
(45, 'Window Cleaning', 'monthly', '2025-03-28', '13:44:00.000000', '$840', 'male', 7),
(46, 'Carpet Cleaning', 'monthly', '2025-03-07', '13:46:00.000000', '$360', 'male', 3),
(47, 'Bathroom Cleaning', 'two_monthly', '2025-03-14', '22:17:00.000000', '$480', 'Male', 0),
(48, 'Bathroom Cleaning', 'two_monthly', '2025-03-14', '22:17:00.000000', '$700', 'Male', 0),
(49, 'Furniture Cleaning', 'two_monthly', '2025-03-05', '22:23:00.000000', '$1660', 'male', 7),
(50, 'Bathroom Cleaning', 'two_monthly', '2025-03-06', '22:23:00.000000', '$700', 'Male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `standard_service`
--

CREATE TABLE `standard_service` (
  `SS_ID` int(5) NOT NULL,
  `SSName` text NOT NULL,
  `Frequency` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Worker Group` varchar(25) NOT NULL,
  `Workers` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `standard_service`
--

INSERT INTO `standard_service` (`SS_ID`, `SSName`, `Frequency`, `Date`, `Time`, `Price`, `Worker Group`, `Workers`) VALUES
(1, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-01-30', '20:37:00.000000', '', 'male', 7),
(2, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-01-30', '20:37:00.000000', '', 'male', 7),
(3, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-01-04', '21:12:00.000000', '$840', 'male', 7),
(4, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-02-01', '22:44:00.000000', '$600', 'combine', 5),
(5, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-02-01', '22:44:00.000000', '$600', 'combine', 5),
(6, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-02-27', '10:00:00.000000', '$1320', 'combine', 11),
(7, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'two_monthly', '2025-03-08', '21:33:00.000000', '$3020', 'combine', 13),
(8, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-03-13', '12:28:00.000000', '$840', 'male', 7),
(9, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-03-13', '12:28:00.000000', '$840', 'male', 7),
(10, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-03-13', '12:28:00.000000', '$840', 'male', 7),
(11, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '0000-00-00', '14:10:00.000000', '$1080', 'male', 9),
(12, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '0000-00-00', '14:10:00.000000', '$1080', 'male', 9),
(13, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '0000-00-00', '14:10:00.000000', '$1200', 'male', 10),
(14, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'monthly', '2025-03-14', '10:21:00.000000', '$720', 'male', 12),
(15, 'Furniture,Kitchen,Car,Bathroom Cleaning', 'two_monthly', '2025-03-26', '17:15:00.000000', '$960', 'male', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `SR.NO` int(5) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`SR.NO`, `Email`, `Password`, `Date`) VALUES
(1, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-01-21 17:07:17'),
(2, 'happyprajapati585@gmail.com', 'happy@585', '2025-02-14 09:04:36'),
(3, 'sp8983@gmail.com', 'sohil#1234', '2025-02-14 09:18:13'),
(4, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-24 12:50:54'),
(5, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-24 13:00:51'),
(6, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-24 13:32:01'),
(7, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-24 13:38:39'),
(8, 'hitenwork585@gmail.com', '$2y$10$JmF', '2025-03-24 21:07:19'),
(9, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-25 10:16:09'),
(10, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-25 10:25:39'),
(11, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-25 13:27:14'),
(12, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-25 14:10:54'),
(13, 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-03-25 14:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `U_ID` int(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`U_ID`, `Username`, `Email`, `Password`, `Date`) VALUES
(1, 'Hiten Prajapati', 'hitenprajapati6659@gmail.com', 'hiten@2912', '2025-01-21 17:05:41.000000'),
(2, 'Happy Prajapati', 'hitenwork585@gmail.com', '291204', '2025-02-14 09:04:23.000000'),
(3, 'Sohil Prajapati', 'sohilwork1343@gmail.com', '123456', '2025-02-14 09:18:02.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `basic_service`
--
ALTER TABLE `basic_service`
  ADD PRIMARY KEY (`BS_ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`B_ID`),
  ADD KEY `sid_fk` (`S_ID`),
  ADD KEY `bs_id_fk` (`BS_ID`),
  ADD KEY `ss_id_fk` (`SS_ID`),
  ADD KEY `ps_id_fk` (`PS_ID`);

--
-- Indexes for table `feedback-details`
--
ALTER TABLE `feedback-details`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `book_id_fk` (`B_ID`);

--
-- Indexes for table `premium_service`
--
ALTER TABLE `premium_service`
  ADD PRIMARY KEY (`PS_ID`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `standard_service`
--
ALTER TABLE `standard_service`
  ADD PRIMARY KEY (`SS_ID`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`SR.NO`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `A_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_service`
--
ALTER TABLE `basic_service`
  MODIFY `BS_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `B_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `feedback-details`
--
ALTER TABLE `feedback-details`
  MODIFY `F_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `P_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `premium_service`
--
ALTER TABLE `premium_service`
  MODIFY `PS_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `S_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `standard_service`
--
ALTER TABLE `standard_service`
  MODIFY `SS_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `SR.NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `U_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
