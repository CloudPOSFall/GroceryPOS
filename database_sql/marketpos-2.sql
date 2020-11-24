-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2020 at 09:41 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `CID` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `cart_purchase` tinyint(1) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `CID`, `qty`, `discount`, `cart_purchase`, `product_id`) VALUES
(26, 1, 3, '0', 1, 1),
(27, 2, 2, '0', 1, 2),
(28, 3, 5, '10', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cart_inprogress`
--

CREATE TABLE `cart_inprogress` (
  `CID` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ticket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_inprogress`
--

INSERT INTO `cart_inprogress` (`CID`, `customer_id`, `ticket_id`) VALUES
(1, 4, 1),
(2, 2, 2),
(3, 1, 3);

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
  `user_type` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `email`, `password`, `pin_number`, `first_name`, `last_name`, `user_id`, `phone_number`, `SSN`, `street_address`, `city`, `state`, `zip_code`, `start_date`, `company_name`, `number_of_stores`, `user_type`, `customer_id`) VALUES
(1, 'johnnyfran20002@gmail.com', 'passwood', 231, 'Johnny', 'Tejada', 214564056, 6463214487, 756434736, '10005 Hawk Drive', 'Queens', 'NY', 11105, '2020-11-02', 'Walmart', '3', 1, 1),
(2, 'tylerherro23@gmail.com', 'herro', 112, 'Tyler', 'Herro', 435678987, 3475436897, 123456789, '12th Street', 'New York', 'NY', 9873, '2019-07-01', 'Shop Rite', NULL, 2, 2),
(3, 'bronny45@hotmail.com', 'lebron', 112, 'Bronny', 'James', 112323454, 2124568745, 78234325, '21 Wood Street', 'Woodhaven', 'VT', 12321, '2019-03-02', 'Walmart', NULL, 2, 3),
(4, 'usher54@aim.com', 'usher', 555, 'Usher', 'Man', 345432345, 8454342212, 958674345, '76 Cross Street', 'Houston', 'NY', 85743, '2020-12-05', 'Walmart', NULL, 2, NULL),
(5, 'chrisbrown@gmail.com', 'pass', 111, 'Chris', 'Brown', 111111111, 7187654783, 746378273, '19 West Street', 'Denver', 'CL', 43454, '2019-07-03', 'Walmart', NULL, 2, NULL),
(6, 'kyrieirving2@hotmail.com', 'kyrie', 705, 'Kyrie', 'Irving', 123456789, 2129857843, 123456789, '71 2nd Ave', 'New York', 'NY', 12343, '2017-07-03', 'Tops', '4', 1, 4),
(7, 'georgemartin3432@gmail.com', 'mypassword', NULL, 'George', 'Martin', NULL, 2124545434, NULL, '256 97th Street', 'New York', 'NY', 10035, NULL, 'KeyFood', '3', 1, NULL),
(8, 'bobgz@gmail.com', 'secret', 888, 'Bob', 'Gomez', NULL, 8457631279, 764571465, '7 Grand St', 'New Paltz', 'NY', 12561, NULL, 'Walmart', NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gift_card`
--

CREATE TABLE `gift_card` (
  `gift_id` int(11) NOT NULL,
  `promo_number` double NOT NULL,
  `card_balance` float NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift_card`
--

INSERT INTO `gift_card` (`gift_id`, `promo_number`, `card_balance`, `ticket_id`, `customer_id`) VALUES
(1, 2095, 10, NULL, NULL),
(2, 965, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `OID` int(11) NOT NULL,
  `order_cost` float NOT NULL,
  `order_stock_amount` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `vendor_id` int(11) DEFAULT NULL,
  `OID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_inventory`
--

INSERT INTO `product_inventory` (`product_id`, `productName`, `productType`, `productSubType`, `unit_price`, `cost`, `in_stock`, `vendor_id`, `OID`) VALUES
(1, 'Dairy Pure', 'dairy', 'milk', 7.99, 8.99, 10, NULL, NULL),
(2, 'Horizon', 'dairy', 'milk', 8.99, 10.5, 3, NULL, NULL),
(3, 'Old Croc Chedder', 'dairy', 'cheese', 4.85, 5.89, 5, NULL, NULL),
(4, 'Kerrygold Chedder', 'dairy', 'cheese', 8.99, 7.99, 65, NULL, NULL),
(5, 'Dole Banana', 'produce', 'banana', 4.99, 6.5, 56, NULL, NULL),
(6, 'Chiquita', 'produce', 'banana', 5.55, 7.99, 45, NULL, NULL),
(7, 'Cherry', 'produce', 'tomato', 3.59, 4.99, 21, NULL, NULL),
(8, 'Brandywine', 'produce', 'tomato', 5.99, 7.75, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registers_table`
--

CREATE TABLE `registers_table` (
  `RID` int(11) NOT NULL,
  `open_total` float NOT NULL,
  `close_total` float NOT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_system`
--

CREATE TABLE `report_system` (
  `report_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `total_sales` int(11) NOT NULL,
  `new_customers` int(11) NOT NULL,
  `RID` int(11) DEFAULT NULL,
  `deposited_cash` float NOT NULL,
  `loss` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_system`
--

INSERT INTO `report_system` (`report_id`, `date`, `total_sales`, `new_customers`, `RID`, `deposited_cash`, `loss`) VALUES
(1, '0000-00-00', 45, 12, NULL, 0, 0),
(3, '0000-00-00', 1235, 33, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `return_table`
--

CREATE TABLE `return_table` (
  `RTID` int(11) NOT NULL,
  `ticket_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `refunds` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `company_name` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` float NOT NULL,
  `total` float NOT NULL,
  `discount` float NOT NULL,
  `tax` float NOT NULL,
  `tax_rate` float DEFAULT NULL,
  `cash` float DEFAULT NULL,
  `credit` float DEFAULT NULL,
  `cart_purchase` tinyint(1) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_system`
--

INSERT INTO `ticket_system` (`ticket_id`, `date`, `company_name`, `time`, `quantity`, `subtotal`, `total`, `discount`, `tax`, `tax_rate`, `cash`, `credit`, `cart_purchase`, `customer_id`, `employee_id`) VALUES
(1, '2020-11-18', 'Walmart', '18:59:48', 3, 16.95, 16.95, 0, 1.39, 1.11, 0, 16.95, 1, 4, 8),
(2, '2020-11-18', 'Walmart', '01:16:15', 2, 10.25, 10.25, 0, 1.75, 0.23, 5, 5.25, 1, 2, 5),
(3, '2020-11-20', 'Shop Rite', '01:20:10', 5, 45.65, 45.65, 10, 5.45, 1.23, 0, 45.65, 0, 1, 3);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `CID` (`CID`);

--
-- Indexes for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ticket_id` (`ticket_id`);

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
  ADD KEY `ticket_id` (`ticket_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`OID`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `OID` (`OID`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `registers_table`
--
ALTER TABLE `registers_table`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `report_system`
--
ALTER TABLE `report_system`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `return_table`
--
ALTER TABLE `return_table`
  ADD PRIMARY KEY (`RTID`),
  ADD KEY `ticket_id` (`ticket_id`);

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
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `gift_card`
--
ALTER TABLE `gift_card`
  MODIFY `gift_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registers_table`
--
ALTER TABLE `registers_table`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_system`
--
ALTER TABLE `report_system`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `return_table`
--
ALTER TABLE `return_table`
  MODIFY `RTID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `cart_ibfk_5` FOREIGN KEY (`CID`) REFERENCES `cart_inprogress` (`CID`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `cart_inprogress`
--
ALTER TABLE `cart_inprogress`
  ADD CONSTRAINT `cart_inprogress_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_inprogress_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `gift_card`
--
ALTER TABLE `gift_card`
  ADD CONSTRAINT `gift_card_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `gift_card_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_inventory` (`product_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD CONSTRAINT `product_inventory_ibfk_1` FOREIGN KEY (`OID`) REFERENCES `order_info` (`OID`) ON DELETE NO ACTION ON UPDATE SET NULL,
  ADD CONSTRAINT `product_inventory_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendorinfo` (`vendor_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `registers_table`
--
ALTER TABLE `registers_table`
  ADD CONSTRAINT `registers_table_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `report_system`
--
ALTER TABLE `report_system`
  ADD CONSTRAINT `report_system_ibfk_1` FOREIGN KEY (`RID`) REFERENCES `registers_table` (`RID`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `return_table`
--
ALTER TABLE `return_table`
  ADD CONSTRAINT `return_table_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `ticket_system` (`ticket_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `rewards_table`
--
ALTER TABLE `rewards_table`
  ADD CONSTRAINT `rewards_table_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE NO ACTION ON UPDATE SET NULL;

--
-- Constraints for table `ticket_system`
--
ALTER TABLE `ticket_system`
  ADD CONSTRAINT `ticket_system_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_info` (`customer_id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `ticket_system_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee_info` (`employee_id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
