-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 08:02 PM
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
-- Database: `MarketPOS`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_initial` varchar(1) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` float NOT NULL,
  `rewards` int(11) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `email`, `password`, `first_name`, `middle_initial`, `last_name`, `phone_number`, `rewards`, `street_address`, `city`, `state`, `zip_code`) VALUES
(2, 'johnnyfran20002@gmail.com', 'password', 'Johnny', 'F', 'Tejada', 6463210000, 23, '10005 Hawk Drive', 'Queens', 'NY', 12432),
(3, 'josh2003@hotmail.com', 'password', 'Josh', 'k', 'Brown', 3475650000, 12, '1849 54th Street', 'New York', 'NY', 12384),
(4, 'jdfjdh@aim.com', 'fhfhkas', 'kksfksfkh', 'f', 'kafkfkjkfj', 6463210000, 43, 'jfvkkjsnvkj', 'jnvjnekv', 'er', 4324);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pin_number` float NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_initial` varchar(1) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_id` float NOT NULL,
  `phone_number` float NOT NULL,
  `SSN` float NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(50) NOT NULL,
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
  `qty` int(20) NOT NULL,
  `unit_price` float NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `product_id` int(11) NOT NULL,
  `QR_code` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model_number` int(100) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `link_supplier_data` varchar(100) NOT NULL,
  `cost` double NOT NULL,
  `selling_price` double NOT NULL,
  `MSRP` varchar(100) NOT NULL,
  `in_stock` int(100) NOT NULL,
  `reorder_amount` int(100) NOT NULL,
  `base_stock` int(100) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storelevel_signup`
--

CREATE TABLE `storelevel_signup` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `number_of_stores` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tax_table`
--

CREATE TABLE `tax_table` (
  `TTID` int(11) NOT NULL,
  `tax_year` date NOT NULL,
  `state_tax` double NOT NULL,
  `county_rate` double NOT NULL,
  `city_rate` double NOT NULL,
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
  `subtotal` double NOT NULL,
  `total` double NOT NULL,
  `tax` double NOT NULL,
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
  `vendor_name` varchar(100) NOT NULL,
  `vendor_number` varchar(100) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `company_code` varchar(100) NOT NULL,
  `shipments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `zreport_system`
--

CREATE TABLE `zreport_system` (
  `zreport_id` int(11) NOT NULL,
  `total_sales` int(50) NOT NULL,
  `transactions` int(50) NOT NULL,
  `new_customers` int(11) NOT NULL,
  `opening_amount` double NOT NULL,
  `closing_amount` double NOT NULL,
  `short` double NOT NULL,
  `cash_sales` double NOT NULL,
  `cash_returns` double NOT NULL,
  `drops` double NOT NULL,
  `payouts` int(50) NOT NULL,
  `pay_ins` int(50) NOT NULL,
  `purchases` int(50) NOT NULL,
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
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  ADD CONSTRAINT `inventory_sales_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD CONSTRAINT `product_inventory_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD CONSTRAINT `ticket_system_ibfk_2` FOREIGN KEY (`ISID`) REFERENCES `inventory_sales` (`ISID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_system_ibfk_3` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `zreport_system`
--
ALTER TABLE `zreport_system`
  ADD CONSTRAINT `zreport_system_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `inventory_system` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zreport_system_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
