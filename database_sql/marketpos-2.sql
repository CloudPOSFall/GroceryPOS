-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2020 at 08:47 PM
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
-- Database: `marketpos-2`
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
  `rewards` float DEFAULT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_id`, `email`, `password`, `first_name`, `last_name`, `phone_number`, `rewards`, `street_address`, `city`, `state`, `zip_code`) VALUES
(1, 'johnnyfran20002@gmail.com', 'passwood', 'Johnny', 'Tejada', 6463214487, 33, '10005 Hawk Drive ', 'Queens', 'NY', 12321),
(2, 'tylerherro23@gmail.com', 'password', 'Tyler', 'Herro', 3475436578, 90, '12th Street', 'New York', 'NY', 9874),
(3, 'bronny45@hotmail.com', 'lebron', 'Bronny', 'James', 2124567656, 44, '21 Wood Street', 'Woodhaven', 'VT', 7384),
(4, 'kyrieirving2@hotmail.com', 'kyrie', 'Kyrie', 'Irving', 2123434567, 14, '74 2nd Ave', 'New York', 'NY', 12343),
(6, 'michaelj23@gmail.com', 'jordan', 'Michael', 'Jordan', 2125468796, 44, '14th Street', 'Chicago ', 'IL', 76854);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `employee_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pin_number` int(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_id` double DEFAULT NULL,
  `phone_number` double NOT NULL,
  `SSN` double DEFAULT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `company_name` varchar(50) NOT NULL,
  `number_of_stores` varchar(11) DEFAULT NULL,
  `user_type` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `email`, `password`, `pin_number`, `first_name`, `last_name`, `user_id`, `phone_number`, `SSN`, `street_address`, `city`, `state`, `zip_code`, `start_date`, `company_name`, `number_of_stores`, `user_type`, `customer_id`) VALUES
(13, 'johnnyfran20002@gmail.com', 'passwood', 231, 'Johnny', 'Tejada', 214564056, 6463214487, 756434736, '10005 Hawk Drive', 'Queens', 'NY', 11105, '2020-11-02', 'Walmart', '3', 1, 1),
(14, 'tylerherro23@gmail.com', 'herro', 112, 'Tyler', 'Herro', 435678987, 3475436897, 123456789, '12th Street', 'New York', 'NY', 9873, '2019-07-01', 'Shop Rite', NULL, 2, 2),
(21, 'bronny45@hotmail.com', 'lebron', 112, 'Bronny', 'James', 112323454, 2124568745, 78234325, '21 Wood Street', 'Woodhaven', 'VT', 12321, '2019-03-02', 'Walmart', NULL, 2, 3),
(22, 'usher54@aim.com', 'usher', 555, 'Usher', 'Man', 345432345, 8454342212, 958674345, '76 Cross Street', 'Houston', 'NY', 85743, '2020-12-05', 'Walmart', NULL, 2, NULL),
(30, 'chrisbrown@gmail.com', 'pass', 111, 'Chris', 'Brown', 111111111, 7187654783, 746378273, '19 West Street', 'Denver', 'CL', 43454, '2019-07-03', 'Walmart', NULL, 2, NULL),
(31, 'kyrieirving2@hotmail.com', 'kyrie', 705, 'Kyrie', 'Irving', 123456789, 2129857843, 123456789, '71 2nd Ave', 'New York', 'NY', 12343, '2017-07-03', 'Tops', '4', 1, 4),
(32, 'georgemartin3432@gmail.com', 'mypassword', NULL, 'George', 'Martin', NULL, 2124545434, NULL, '256 97th Street', 'New York', 'NY', 10035, NULL, 'KeyFood', '3', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `gift_id` int(11) NOT NULL,
  `promo_number` double NOT NULL,
  `card_balance` float NOT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`gift_id`, `promo_number`, `card_balance`, `ticket_id`) VALUES
(1, 2095, 10, 1),
(2, 965, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_sales`
--

CREATE TABLE `inventory_sales` (
  `ISID` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `cart_purchase` tinyint(1) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_sales`
--

INSERT INTO `inventory_sales` (`ISID`, `qty`, `discount`, `cart_purchase`, `product_id`, `ticket_id`) VALUES
(2, 1, '0.00', 0, 1, NULL),
(3, 1, '0.00', 0, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `product_id` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productType` varchar(50) NOT NULL,
  `productSubType` varchar(50) NOT NULL,
  `unit_price` float NOT NULL,
  `cost` float NOT NULL,
  `in_stock` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_inventory`
--

INSERT INTO `product_inventory` (`product_id`, `productName`, `productType`, `productSubType`, `unit_price`, `cost`, `in_stock`, `vendor_id`) VALUES
(1, 'Dairy Pure', 'dairy', 'milk', 7.99, 8.99, 10, 1),
(2, 'Horizon', 'dairy', 'milk', 8.99, 10.5, 3, 2),
(3, 'Old Croc Chedder', 'dairy', 'cheese', 4.85, 5.89, 5, NULL),
(4, 'Kerrygold Chedder', 'dairy', 'cheese', 8.99, 7.99, 65, NULL),
(5, 'Dole Banana', 'produce', 'banana', 4.99, 6.5, 56, NULL),
(6, 'Chiquita', 'produce', 'banana', 5.55, 7.99, 45, NULL),
(7, 'Cherry', 'produce', 'tomato', 3.59, 4.99, 21, NULL),
(8, 'Brandywine', 'produce', 'tomato', 5.99, 7.75, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rewards_table`
--

CREATE TABLE `rewards_table` (
  `RID` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
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

--
-- Dumping data for table `tax_table`
--

INSERT INTO `tax_table` (`TTID`, `tax_year`, `state_tax`, `county_tax`, `city_rate`, `tax_rate`) VALUES
(1, 2020, 1.14, 0.23, 2.25, 2.25),
(2, 2019, 2.45, 1.19, 2.25, 2.25);

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
  `employee_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_system`
--

INSERT INTO `ticket_system` (`ticket_id`, `date`, `time`, `subtotal`, `total`, `tax`, `tax_rate`, `employee_id`, `customer_id`) VALUES
(1, '2020-07-12', '12:45:50', 9.99, 9.99, 1.23, 0.13, NULL, NULL),
(2, '2020-11-09', '21:49:09', 7.99, 7.99, 0.25, 0.45, 13, NULL);

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
  `shipments` int(11) NOT NULL,
  `category_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`vendor_id`, `vendor_name`, `street_address`, `city`, `state`, `zip_code`, `shipments`, `category_code`) VALUES
(1, 'Tide', '2212 3rd Ave', 'New York', 'NY', 10035, 22, 1),
(2, 'Post', '5303 4th Ave', 'Brooklyn', 'NY', 11220, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zreport_system`
--

CREATE TABLE `zreport_system` (
  `zreport_id` int(11) NOT NULL,
  `total_sales` int(11) NOT NULL,
  `transactions` int(11) NOT NULL,
  `new_customers` int(11) NOT NULL,
  `opening_amount` float NOT NULL,
  `closing_amount` float NOT NULL,
  `short` float NOT NULL,
  `cash_sales` float NOT NULL,
  `cash_returns` float NOT NULL,
  `drops` float NOT NULL,
  `payouts` float NOT NULL,
  `pay_ins` float NOT NULL,
  `purchases` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zreport_system`
--

INSERT INTO `zreport_system` (`zreport_id`, `total_sales`, `transactions`, `new_customers`, `opening_amount`, `closing_amount`, `short`, `cash_sales`, `cash_returns`, `drops`, `payouts`, `pay_ins`, `purchases`, `ticket_id`, `product_id`) VALUES
(1, 45, 30, 12, 100, 732.18, 0, 47.36, 1.75, 0, 0, 0, 690, 2, NULL),
(3, 1235, 120, 33, 200, 1200, 0, 698.99, 12, 0, 0, 0, 48, 1, NULL);

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
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- Indexes for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD PRIMARY KEY (`gift_id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  ADD PRIMARY KEY (`ISID`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD UNIQUE KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `rewards_table`
--
ALTER TABLE `rewards_table`
  ADD PRIMARY KEY (`RID`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

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
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

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
  ADD UNIQUE KEY `ticket_id` (`ticket_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  MODIFY `ISID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rewards_table`
--
ALTER TABLE `rewards_table`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax_table`
--
ALTER TABLE `tax_table`
  MODIFY `TTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket_system`
--
ALTER TABLE `ticket_system`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zreport_system`
--
ALTER TABLE `zreport_system`
  MODIFY `zreport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD CONSTRAINT `gift_card_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `inventory_sales`
--
ALTER TABLE `inventory_sales`
  ADD CONSTRAINT `inventory_sales_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `inventory_sales_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD CONSTRAINT `product_inventory_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rewards_table`
--
ALTER TABLE `rewards_table`
  ADD CONSTRAINT `rewards_table_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD CONSTRAINT `ticket_system_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `ticket_system_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `zreport_system`
--
ALTER TABLE `zreport_system`
  ADD CONSTRAINT `zreport_system_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zreport_system_ibfk_2` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `zreport_system_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
