-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 07:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joinhandsng`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donation_id` int(11) NOT NULL,
  `donor_reg_id` varchar(45) DEFAULT NULL,
  `ngo_reg_id` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `donation_date` timestamp NULL DEFAULT NULL,
  `donation_means` varchar(45) DEFAULT NULL,
  `donation_status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `donor_type` varchar(45) DEFAULT NULL,
  `f_name` varchar(45) DEFAULT NULL,
  `l_name` varchar(45) DEFAULT NULL,
  `donor_email` varchar(100) DEFAULT NULL,
  `donor_phone` varchar(45) DEFAULT NULL,
  `donor_reg_id` varchar(45) DEFAULT NULL,
  `donor_reg_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(100) DEFAULT NULL,
  `ngo_start_date` timestamp NULL DEFAULT NULL,
  `ngo_office_address_1` varchar(200) DEFAULT NULL,
  `ngo_office_address_2` varchar(200) DEFAULT NULL,
  `ngo_email_1` varchar(100) DEFAULT NULL,
  `ngo_email_2` varchar(100) DEFAULT NULL,
  `ngo_phone_1` varchar(45) DEFAULT NULL,
  `ngo_phone_2` varchar(45) DEFAULT NULL,
  `ngo_reg_date` timestamp NULL DEFAULT NULL,
  `ngo_reg_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_details`
--

CREATE TABLE `ngo_details` (
  `ngo_details_id` int(11) NOT NULL,
  `ngo_reg_id` varchar(45) DEFAULT NULL,
  `covid_obj` varchar(500) DEFAULT NULL,
  `track_record` varchar(500) DEFAULT NULL,
  `res_and_capacity` varchar(500) DEFAULT NULL,
  `finance_needs` varchar(500) DEFAULT NULL,
  `tran_and_acc_assurance` varchar(500) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `account_number` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `send_us_a_msg`
--

CREATE TABLE `send_us_a_msg` (
  `msg_id` int(11) NOT NULL,
  `sender_type` varchar(45) DEFAULT NULL,
  `sender_ngo_status` varchar(45) DEFAULT NULL,
  `s_f_name` varchar(45) DEFAULT NULL,
  `s_l_name` varchar(45) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_phone` varchar(45) DEFAULT NULL,
  `msg_content` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `fk1_idx` (`donor_reg_id`),
  ADD KEY `fk2_idx` (`ngo_reg_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`),
  ADD UNIQUE KEY `donor_reg_id_UNIQUE` (`donor_reg_id`);

--
-- Indexes for table `ngo`
--
ALTER TABLE `ngo`
  ADD PRIMARY KEY (`ngo_id`),
  ADD UNIQUE KEY `ngo_reg_id_UNIQUE` (`ngo_reg_id`);

--
-- Indexes for table `ngo_details`
--
ALTER TABLE `ngo_details`
  ADD PRIMARY KEY (`ngo_details_id`),
  ADD KEY `fk2_idx` (`ngo_reg_id`);

--
-- Indexes for table `send_us_a_msg`
--
ALTER TABLE `send_us_a_msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo`
--
ALTER TABLE `ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ngo_details`
--
ALTER TABLE `ngo_details`
  MODIFY `ngo_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `send_us_a_msg`
--
ALTER TABLE `send_us_a_msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`donor_reg_id`) REFERENCES `donors` (`donor_reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`ngo_reg_id`) REFERENCES `ngo` (`ngo_reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ngo_details`
--
ALTER TABLE `ngo_details`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`ngo_reg_id`) REFERENCES `ngo` (`ngo_reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
