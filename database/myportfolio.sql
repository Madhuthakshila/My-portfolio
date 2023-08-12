-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 12, 2023 at 04:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectId` int(10) NOT NULL,
  `ProjectName` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectId`, `ProjectName`, `Description`, `Image`) VALUES
(1, 'Financial stock site\r\n', 'A financial stock site with user portfolio tracking. Keep the scope limited to showing basic information about stocks, price charts and some simple data. Only show a handful of stocks, to begin with, and only have simple portfolio tracking for each user.', 'https://www.tradingview.com'),
(2, 'Online Ecommerce Shop', 'The core features should include a shopping basket, an inventory management system, and checkout integration with payment gateways  Don\'t forget the standard things like session management, user and business accounts, and media uploads. This is a medium-difficulty full-stack project that should take you between 2-4 weeks to complete and polish.', 'https://stripe.com'),
(3, 'Food Order Website', 'Similar to an online ecommerce shop, but you can increase its difficulty by writing a management system for delivery personnels. This can include fare calculation, and rating systems. Checkout Super Eats built by our alumni Iti Armpalu', 'https://onlineorders.ramadacolombo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `Username`, `Email`, `Password`) VALUES
(1, 'Thakshila', 'thakshilamadhuwanthi9@gmail.com', 'Abc@1120');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
