-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 05:27 PM
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
-- Database: `stockmgmt1`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `BusinessID` int(10) UNSIGNED NOT NULL,
  `UserID` bigint(20) NOT NULL,
  `Bname` varchar(255) NOT NULL,
  `Bemail` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `StockID` int(11) NOT NULL,
  `VoucherBID` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stockitem`
--

CREATE TABLE `stockitem` (
  `StockID` bigint(20) UNSIGNED NOT NULL,
  `StockName` varchar(255) NOT NULL,
  `StockPrice` bigint(20) NOT NULL,
  `Quantity` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stockitem`
--

INSERT INTO `stockitem` (`StockID`, `StockName`, `StockPrice`, `Quantity`) VALUES
(2, '   Royco cube 15g', 15, 1000),
(3, 'Pencil', 15, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) UNSIGNED NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `NationalID` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Phonenumber` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` int(11) NOT NULL COMMENT '1  = Customer\r\n2 = Business Owner\r\n3 = Admin',
  `Status` int(11) NOT NULL COMMENT '1 = Active\r\n2 = Inactive\r\n',
  `DateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `NationalID`, `Gender`, `DateofBirth`, `Phonenumber`, `Email`, `Password`, `Role`, `Status`, `DateCreated`) VALUES
(7, 'Rtester', 'Tester', 123456, 'Male', '2023-08-22', 123456789, 'tester@test.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, '2023-08-22 08:24:08'),
(8, 'T', 'T', 1234567, 'Male', '0000-00-00', 12345678, 'tes@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 3, 2, '2023-08-21 21:09:52'),
(16, 'Admin', 'AdminR', 254712345, 'Male', '0000-00-00', 717560426, 'Admin@admin.com', 'f8729f70d4921d279aaddb61d8324d68bcf35fb4', 3, 1, '2023-08-21 20:44:02'),
(17, 'V', 'K', 987654, 'Female', '0000-00-00', 2147483647, 'VK@gmail.com', '', 1, 1, '2023-08-21 21:00:06'),
(18, 'Delete ', 'Test', 1111234, 'Male', '0000-00-00', 2147483647, 'Delete@gmail.com', '', 1, 2, '2023-08-21 23:23:23'),
(19, 'Dummy', 'Dummy', 1245666, 'Female', '0000-00-00', 1323456789, 'dummy@gmail.com', '', 1, 2, '2023-08-21 23:25:15'),
(20, 'Ryan', 'Mudibo', 123456, 'Male', '0000-00-00', 717560426, 'ryanmudibo@gmail.com', '', 1, 2, '2023-08-22 08:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `voucherbatch`
--

CREATE TABLE `voucherbatch` (
  `BatchID` bigint(20) UNSIGNED NOT NULL,
  `BusinessID` bigint(20) NOT NULL,
  `VBname` bigint(20) NOT NULL,
  `StockID` bigint(20) NOT NULL,
  `QuantityIssued` bigint(20) NOT NULL,
  `VoucherID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vouchercode`
--

CREATE TABLE `vouchercode` (
  `VoucherID` int(10) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `VoucherCode` varchar(255) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL COMMENT '1= Active\r\n2=Redeemed',
  `DateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`BusinessID`),
  ADD KEY `business_userid_stockid_voucherbid_index` (`UserID`,`StockID`,`VoucherBID`),
  ADD KEY `business_userid_index` (`UserID`),
  ADD KEY `business_stockid_index` (`StockID`),
  ADD KEY `business_voucherbid_index` (`VoucherBID`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stockitem`
--
ALTER TABLE `stockitem`
  ADD PRIMARY KEY (`StockID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `NationalID` (`NationalID`,`Phonenumber`,`Email`);

--
-- Indexes for table `voucherbatch`
--
ALTER TABLE `voucherbatch`
  ADD PRIMARY KEY (`BatchID`),
  ADD KEY `voucherbatch_batchid_businessid_stockid_voucherid_index` (`BatchID`,`BusinessID`,`StockID`,`VoucherID`),
  ADD KEY `voucherbatch_businessid_index` (`BusinessID`),
  ADD KEY `voucherbatch_stockid_index` (`StockID`),
  ADD KEY `voucherbatch_voucherid_index` (`VoucherID`);

--
-- Indexes for table `vouchercode`
--
ALTER TABLE `vouchercode`
  ADD PRIMARY KEY (`VoucherID`),
  ADD UNIQUE KEY `VoucherCode` (`VoucherCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `BusinessID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stockitem`
--
ALTER TABLE `stockitem`
  MODIFY `StockID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `voucherbatch`
--
ALTER TABLE `voucherbatch`
  MODIFY `BatchID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vouchercode`
--
ALTER TABLE `vouchercode`
  MODIFY `VoucherID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
