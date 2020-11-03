-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2020 at 03:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketpos2`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` double NOT NULL,
  `rewards` float NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pin_number` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_id` double NOT NULL,
  `phone_number` double NOT NULL,
  `SSN` float NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_sales`
--

CREATE TABLE `inventory_sales` (
  `ISID` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `discount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `product_id` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `unit_price` float NOT NULL,
  `selling_price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `reorder_amount` float NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storelevel_signup`
--

CREATE TABLE `storelevel_signup` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone_number` double NOT NULL,
  `number_of_stores` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tax_table`
--

CREATE TABLE `tax_table` (
  `TTID` int(11) NOT NULL,
  `tax_year` year(4) NOT NULL,
  `state_tax` float NOT NULL,
  `county_tax` float NOT NULL,
  `city_rate` float NOT NULL,
  `tax_rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_system`
--

CREATE TABLE `ticket_system` (
  `ticket_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `tax` float NOT NULL,
  `tax_rate` float NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ISID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendorinfo`
--

CREATE TABLE `vendorinfo` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `company_code` int(11) NOT NULL,
  `shipments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zreport_system`
--

CREATE TABLE `zreport_system` (
  `zreport_id` int(11) NOT NULL,
  `total_sales` int(11) NOT NULL,
  `transactions` int(11) NOT NULL,
  `new_customers` int(11) NOT NULL,
  `opening_amount` int(11) NOT NULL,
  `closing_amount` int(11) NOT NULL,
  `short` int(11) NOT NULL,
  `cash_sales` int(11) NOT NULL,
  `cash_returns` int(11) NOT NULL,
  `drops` int(11) NOT NULL,
  `payouts` int(11) NOT NULL,
  `pay_ins` int(11) NOT NULL,
  `purchases` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  ADD PRIMARY KEY (`ISID`),
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `storelevel_signup`
--
ALTER TABLE `storelevel_signup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tax_table`
--
ALTER TABLE `tax_table`
  ADD PRIMARY KEY (`TTID`);

--
-- Indexes for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD PRIMARY KEY (`ticket_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `ISID` (`ISID`);

--
-- Indexes for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `zreport_system`
--
ALTER TABLE `zreport_system`
  ADD PRIMARY KEY (`zreport_id`),
  ADD KEY `ticket_id` (`ticket_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  MODIFY `ISID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storelevel_signup`
--
ALTER TABLE `storelevel_signup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_table`
--
ALTER TABLE `tax_table`
  MODIFY `TTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_system`
--
ALTER TABLE `ticket_system`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zreport_system`
--
ALTER TABLE `zreport_system`
  MODIFY `zreport_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD CONSTRAINT `product_inventory_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD CONSTRAINT `ticket_system_ibfk_1` FOREIGN KEY (`ISID`) REFERENCES `inventory_sales` (`ISID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_system_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `zreport_system`
--
ALTER TABLE `zreport_system`
  ADD CONSTRAINT `zreport_system_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zreport_system_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
