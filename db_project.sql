-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2015 at 11:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE IF NOT EXISTS `billing_details` (
  `bill_no` int(11) NOT NULL AUTO_INCREMENT,
  `day` char(3) DEFAULT NULL,
  `month` char(3) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `customer_id` char(15) DEFAULT NULL,
  PRIMARY KEY (`bill_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`bill_no`, `day`, `month`, `year`, `amount`, `customer_id`) VALUES
(1, '12', '11', '2014', 244800, '9052054654'),
(2, '12', '11', '2014', 175275, '9550799619'),
(3, '19', '8', '2015', 0, '9052054654'),
(4, '19', '8', '2015', 0, '9550799619'),
(5, '19', '8', '2015', 0, '9052054654'),
(6, '19', '8', '2015', 0, 'wer'),
(7, '19', '8', '2015', 0, 'wer'),
(8, '19', '8', '2015', 0, '9052054654'),
(9, '19', '8', '2015', 0, '9052054654'),
(10, '19', '8', '2015', 0, '9052054654'),
(11, '19', '8', '2015', 0, '9052054654'),
(12, '20', '8', '2015', 0, '9052054654');

-- --------------------------------------------------------

--
-- Table structure for table `bill_produce`
--

CREATE TABLE IF NOT EXISTS `bill_produce` (
  `item_code` char(10) NOT NULL DEFAULT '',
  `short_description` char(100) DEFAULT NULL,
  `category` char(10) DEFAULT NULL,
  `net` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  `making` int(11) DEFAULT NULL,
  `wastage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `price_discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_produce`
--

INSERT INTO `bill_produce` (`item_code`, `short_description`, `category`, `net`, `gross`, `reduction`, `making`, `wastage`, `price`, `discount`, `price_discount`) VALUES
('101', '', '', 0, 0, 0, 0, 0, 0, 0, 0),
('102', '', '', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `commodity_rate`
--

CREATE TABLE IF NOT EXISTS `commodity_rate` (
  `type` char(20) NOT NULL DEFAULT '',
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commodity_rate`
--

INSERT INTO `commodity_rate` (`type`, `rate`) VALUES
('Gold', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `config_menu`
--

CREATE TABLE IF NOT EXISTS `config_menu` (
  `item_code` char(10) NOT NULL DEFAULT '',
  `making` int(11) DEFAULT NULL,
  `wastage` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config_menu`
--

INSERT INTO `config_menu` (`item_code`, `making`, `wastage`) VALUES
('101', 1500, 3),
('102', 1000, 2),
('2354234', 423423, 423423),
('gdfgdfdfgf', 0, 0),
('wqeq', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Name` char(20) DEFAULT NULL,
  `Phone` char(15) NOT NULL DEFAULT '',
  `Address` char(100) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `day` char(3) DEFAULT NULL,
  `month` char(3) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  PRIMARY KEY (`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Phone`, `Address`, `balance`, `day`, `month`, `year`) VALUES
('sdg', '535', '4535', 0, '19', '8', '2015'),
('wer', 'wer', 'ewrewrew', 0, '19', '8', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_item`
--

CREATE TABLE IF NOT EXISTS `exchange_item` (
  `category` char(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `customer_id` char(15) DEFAULT NULL,
  `purity` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange_item`
--

INSERT INTO `exchange_item` (`category`, `weight`, `customer_id`, `purity`, `cost`) VALUES
('Gold', 10, '9052054654', 90, 27000);

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
  `categoryCode` varchar(10) NOT NULL,
  `categoryNmae` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

CREATE TABLE IF NOT EXISTS `item_details` (
  `Id` char(10) NOT NULL DEFAULT '',
  `Quantity` int(11) DEFAULT NULL,
  `Category` char(10) DEFAULT NULL,
  `short_description` char(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`Id`, `Quantity`, `Category`, `short_description`, `image`) VALUES
('101', 6, 'Gold', 'Bangles', ''),
('102', 6, 'Gold', 'Necklace', ''),
('2354234', 6, 'Gold', '423423', ''),
('f', 6, 'Gold', 'asda', ''),
('gdfgdfdfgf', 6, 'Gold', 'asda', ''),
('wqeq', 6, 'Gold', 'eqwewqe', '');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `locationCode` varchar(10) NOT NULL,
  `locationName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationCode`, `locationName`) VALUES
('', 'ss'),
('ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `location_items`
--

CREATE TABLE IF NOT EXISTS `location_items` (
  `locationCode` varchar(10) NOT NULL,
  `itemCode` varchar(10) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uid` char(20) NOT NULL DEFAULT '',
  `pwd` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `location` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `pwd`, `role`, `location`) VALUES
('cashier', 'e6e3be2d833cdf5d9d4c7bc2f85cd098', 'sales', 'loc1'),
('supervisor', 'e6e3be2d833cdf5d9d4c7bc2f85cd098', 'admin', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE IF NOT EXISTS `sales_details` (
  `Item_id` char(10) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  `bill_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`Item_id`, `Price`, `Discount`, `bill_number`) VALUES
('101', 184500, 0, 1),
('102', 67000, 6700, 1),
('101', 184500, 9225, 2),
('101', 0, 0, 5),
('102', 0, 0, 5),
('102', 0, 0, 6),
('101', 0, 0, 8),
('102', 0, 0, 8),
('101', 0, 0, 10),
('101', 0, 0, 11),
('102', 0, 0, 11),
('101', 0, 0, 12),
('102', 0, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE IF NOT EXISTS `sales_return` (
  `bill_number` int(11) DEFAULT NULL,
  `item_id` char(10) DEFAULT NULL,
  `description` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_return`
--

INSERT INTO `sales_return` (`bill_number`, `item_id`, `description`) VALUES
(1, '101', 'broken');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `id` char(10) NOT NULL DEFAULT '',
  `Name` char(20) DEFAULT NULL,
  `Phone` char(15) DEFAULT NULL,
  `Address` char(100) DEFAULT NULL,
  `Salary` int(6) DEFAULT NULL,
  `Department` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `Name`, `Phone`, `Address`, `Salary`, `Department`) VALUES
('w', 'w', 'w', 'w', 6, 'wwww'),
('ww', 'ww', 'ww', 'ww', 3, 'www');

-- --------------------------------------------------------

--
-- Table structure for table `weight_details`
--

CREATE TABLE IF NOT EXISTS `weight_details` (
  `Net` int(11) DEFAULT NULL,
  `Gross` int(11) DEFAULT NULL,
  `Reduction` int(11) DEFAULT NULL,
  `item_code` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weight_details`
--

INSERT INTO `weight_details` (`Net`, `Gross`, `Reduction`, `item_code`) VALUES
(58, 60, 2, '101'),
(20, 20, 0, '102'),
(1811, 34234, 32423, '2354234'),
(0, 0, 0, 'gdfgdfdfgf'),
(0, 0, 0, 'wqeq');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
