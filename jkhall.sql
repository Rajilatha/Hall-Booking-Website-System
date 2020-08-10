-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 19, 2020 at 04:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkhall`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(250) NOT NULL,
  `hallname` text NOT NULL,
  `no of people` int(11) NOT NULL,
  `meal_id` int(11) DEFAULT NULL,
  `decoration_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `Employee` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`),
  UNIQUE KEY `customer_id` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `email`, `CustomerID`, `date`, `time`, `hallname`, `no of people`, `meal_id`, `decoration_id`, `room_no`, `Employee`) VALUES
(1, 'vino@gmail.com', 1, '2020-01-31', 'Morning', 'Silver', 56, 2, 6, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `meal_id` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `booking_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `CustomerID`, `meal_id`, `quantity`, `booking_id`) VALUES
(4, 2, '3', 1, 6),
(5, 2, '2', 1, 6),
(7, 7, '1', 1, 8),
(8, 7, '2', 1, 8),
(9, 7, '1', 1, 8),
(71, 2, '3', 1, 12),
(70, 2, '3', 1, 31),
(69, 2, '1', 1, 31),
(23, 2, '1', 1, 14),
(34, 2, '2', 1, 20),
(33, 2, '2', 1, 20),
(32, 2, '1', 1, 19),
(31, 2, '1', 1, 19),
(37, 2, '1', 1, 20),
(38, 2, '1', 1, 20),
(42, 2, '2', 1, 22),
(43, 2, '2', 1, 22),
(58, 2, '2', 1, 12),
(66, 2, '3', 1, 29),
(65, 2, '2', 1, 29),
(64, 2, '2', 1, 29),
(72, 2, '1', 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `cartg`
--

DROP TABLE IF EXISTS `cartg`;
CREATE TABLE IF NOT EXISTS `cartg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `meal_id` varchar(250) NOT NULL,
  `quantity` int(100) NOT NULL,
  `booking_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartg`
--

INSERT INTO `cartg` (`id`, `CustomerID`, `meal_id`, `quantity`, `booking_id`) VALUES
(7, 2, '1', 1, 9),
(8, 2, '2', 1, 9),
(9, 2, '3', 1, 13),
(10, 2, '1', 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `cartp`
--

DROP TABLE IF EXISTS `cartp`;
CREATE TABLE IF NOT EXISTS `cartp` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `meal_id` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `booking_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartp`
--

INSERT INTO `cartp` (`id`, `CustomerID`, `meal_id`, `quantity`, `booking_id`) VALUES
(1, 7, '2', 1, 3),
(2, 7, '3', 1, 3),
(3, 7, '3', 1, 5),
(4, 7, '3', 1, 6),
(5, 2, '3', 1, 9),
(6, 2, '1', 1, 11),
(7, 2, '2', 1, 12),
(8, 2, '2', 1, 12),
(9, 2, '3', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(11) NOT NULL,
  `mgs` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `CustomerID`, `mgs`, `date`) VALUES
(1, 0, 'thfh', '2020-01-12 15:58:06'),
(2, 0, 'hgcsdfg', '2020-01-12 15:58:15'),
(3, 0, 'fghsgfh', '2020-01-12 15:58:49'),
(4, 0, 'gfhsdjhf', '2020-01-12 15:59:01'),
(5, 0, 'jhfgjkhdgi', '2020-01-12 15:59:11'),
(6, 0, 'hi', '2020-03-07 14:13:57'),
(7, 0, 'hi', '2020-03-07 14:15:35'),
(8, 0, 'hello', '2020-03-08 07:44:17'),
(9, 2, '', '2020-03-08 11:30:54'),
(10, 2, 'hello', '2020-03-08 11:36:36'),
(11, 4, 'hi ', '2020-03-08 11:42:29'),
(12, 4, '123', '2020-03-08 11:46:22'),
(13, 4, 'how are you', '2020-03-08 12:28:02'),
(14, 3, 'hi', '2020-03-10 13:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

DROP TABLE IF EXISTS `confirm`;
CREATE TABLE IF NOT EXISTS `confirm` (
  `CustomerID` int(11) NOT NULL,
  `Meals` varchar(500) NOT NULL,
  `EPackage` varchar(250) NOT NULL,
  `Rooms` varchar(250) NOT NULL,
  `Booking_Id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`CustomerID`, `Meals`, `EPackage`, `Rooms`, `Booking_Id`) VALUES
(2, 'Fried rice, soup', '3-7 employee', 'r2', 22),
(2, 'Fried rice, soup', '3-7 employee', 'r2', 22),
(7, 'rice soup', '3-7 employee', 'r3', 2),
(7, 'friedrice stringhopper ', '', '', 8),
(7, 'rice soup', '3-7 employee', 'r3', 2),
(7, 'friedrice stringhopper ', '', '', 8),
(4, 'friedrice', '8-12employee', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL DEFAULT 'cus',
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `fname`, `lname`, `email`, `phone`, `username`, `password`, `user_type`) VALUES
(1, 'Mickey', 'Kulanayagam', 'rajilatha1996@gmail.com', 766121459, 'jenani', 'Raji1996', 'admin'),
(2, 'rujkhjg', 'Mouse', 'sathisayanthan@gmail.com', 770575974, 'abitharani', 'Raji1996', 'cus'),
(3, 'Rajilatha', 'Kulanayagam', 'thanush3012@gmail.com', 763214989, 'thanu', 'Thanu1996', 'cus'),
(4, 'Abitharani', 'Kulanayagam', 'abitha1998@gmail.com', 763214989, 'Inthi', 'Raji1996', 'cus'),
(5, 'Thulasi', 'lux', 'thula467@gmail.com', 769848506, 'Thula', 'Sachchi97', 'cus'),
(6, 'vinoge', 'vamathevan', 'vino05@gmail.com', 772571771, 'vinoge', 'Vinoo@1996', 'cus'),
(7, 'vinoge', 'vamathevan', 'raji1996@gmail.com', 779864563, 'vino', 'Raji1996', 'cus'),
(8, 'Rakavi', 'Kumaru', 'gfjfhfldh@gmail.com', 770575974, 'Rakavi', 'Rakavi1234', 'cus'),
(9, 'nkn', 'efrlgjlrt', 'hdkjfj@gmail.com', 1234567890, 'raji', 'Raji1996', 'cus');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

DROP TABLE IF EXISTS `decoration`;
CREATE TABLE IF NOT EXISTS `decoration` (
  `decoration_id` int(11) NOT NULL AUTO_INCREMENT,
  `decoration_name` varchar(250) NOT NULL,
  `decoration_type` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`decoration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`decoration_id`, `decoration_name`, `decoration_type`, `image_link`, `price`) VALUES
(2, 'birthday decoration', 'Natural', 'aid656114-v4-728px-Decorate-With-Balloons-Step-3-Version-2.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `package_no` int(11) NOT NULL,
  `package` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`package_no`, `package`, `cost`) VALUES
(1, '3-7 employees', 5000),
(2, '8-12 employees', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `gold`
--

DROP TABLE IF EXISTS `gold`;
CREATE TABLE IF NOT EXISTS `gold` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `hallname` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(250) NOT NULL,
  `people` int(11) NOT NULL,
  `decoration_id` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gold`
--

INSERT INTO `gold` (`booking_id`, `CustomerID`, `hallname`, `Date`, `Time`, `people`, `decoration_id`, `room_no`, `package_id`) VALUES
(1, 7, 'Gold', '2020-07-17', 'Morning', 78, '2', 'none', 'none'),
(2, 7, 'Silver', '2020-06-30', 'Morning', 90, 'none', 'none', 'none'),
(8, 2, 'Gold', '2020-07-01', 'Morning', 100, 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `hallbooking`
--

DROP TABLE IF EXISTS `hallbooking`;
CREATE TABLE IF NOT EXISTS `hallbooking` (
  `Booking_Id` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `hallname` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(250) NOT NULL,
  `people` int(11) NOT NULL,
  PRIMARY KEY (`Booking_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallbooking`
--

INSERT INTO `hallbooking` (`Booking_Id`, `CustomerID`, `hallname`, `Date`, `Time`, `people`) VALUES
(20, 7, 'Gold', '2020-03-28', 'Morning', 90),
(46, 7, 'Gold', '2020-03-24', 'Morning', 45),
(17, 7, 'Platinum', '2020-03-28', 'Evening', 78),
(45, 7, 'Gold', '2020-03-12', 'Evening', 56),
(44, 7, 'Gold', '2020-03-30', 'Evening', 100),
(35, 2, 'Silver', '2020-03-11', 'Morning', 100),
(43, 7, 'Gold', '2020-03-30', 'Morning', 100),
(42, 7, 'Gold', '2020-03-22', 'Morning', 100),
(41, 7, 'Gold', '2020-03-21', 'Morning', 90),
(40, 3, 'fdhd', '2020-03-11', 'Morning', 100);

-- --------------------------------------------------------

--
-- Table structure for table `halldetails`
--

DROP TABLE IF EXISTS `halldetails`;
CREATE TABLE IF NOT EXISTS `halldetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_name` varchar(250) NOT NULL,
  `capacity` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `floorarea` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `CustomerID` int(100) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

DROP TABLE IF EXISTS `meal`;
CREATE TABLE IF NOT EXISTS `meal` (
  `meal_id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_name` varchar(250) NOT NULL,
  `meal_description` varchar(500) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `meal_type` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`meal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `meal_name`, `meal_description`, `image_link`, `meal_type`, `price`) VALUES
(1, 'Fried rice', 'Photato gurray,tomato, dhall', 'achaari.chicken.jpg', 'Lunch', 850),
(2, 'String Hopper Biriyani', 'Dhall,Photato gravy, tomato, chicken', 'chickenbiryani-2.jpg', 'BreakFast&Dinner', 750),
(3, 'soup', 'vegetable soup', 'easy-vegetable-soup-recipe-1-.jpg', 'Starder', 500);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `CustomerID` int(11) NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`CustomerID`, `image_link`) VALUES
(3, '6aa7fb0daa91dc2cbf5b890e0e6b1f5b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `platinum`
--

DROP TABLE IF EXISTS `platinum`;
CREATE TABLE IF NOT EXISTS `platinum` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `hallname` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(250) NOT NULL,
  `people` int(100) NOT NULL,
  `decoration_id` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platinum`
--

INSERT INTO `platinum` (`booking_id`, `CustomerID`, `hallname`, `Date`, `Time`, `people`, `decoration_id`, `room_no`, `package_id`) VALUES
(4, 7, 'Platinum', '2020-07-31', 'Morning', 90, 'none', 'none', 'none'),
(2, 7, 'Platinum', '2020-07-22', 'Morning', 90, '2', 'none', 'none'),
(3, 7, 'Platinum', '2020-06-30', 'Morning', 90, '2', 'none', 'none'),
(14, 2, 'Platinum', '2020-07-16', 'Morning', 100, 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `id` mediumint(9) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_no` int(11) NOT NULL,
  `room_type` varchar(250) NOT NULL,
  `room_category` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL,
  `image_link` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_no`, `room_type`, `room_category`, `cost`, `image_link`) VALUES
(1, 'single', 'A/C Room', 1500, '1-420x330.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `silver`
--

DROP TABLE IF EXISTS `silver`;
CREATE TABLE IF NOT EXISTS `silver` (
  `booking_id` int(100) NOT NULL AUTO_INCREMENT,
  `CustomerID` int(100) NOT NULL,
  `hallname` varchar(250) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(250) NOT NULL,
  `people` int(250) NOT NULL,
  `decoration_id` varchar(100) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `silver`
--

INSERT INTO `silver` (`booking_id`, `CustomerID`, `hallname`, `Date`, `Time`, `people`, `decoration_id`, `room_no`, `package_id`) VALUES
(4, 7, 'Silver', '2020-07-17', 'Morning', 78, 'none', 'none', ''),
(6, 2, 'Silver', '2020-06-29', 'Morning', 100, 'none', 'none', 'none'),
(8, 7, 'Silver', '2020-07-01', 'Morning', 100, 'none', 'none', 'none'),
(23, 2, 'Silver', '2020-06-30', 'Evening', 100, 'none', 'none', 'none'),
(33, 2, 'Silver', '2020-08-01', 'Morning', 100, 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 3,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `date`, `rating`, `message`) VALUES
(1, '', '0000-00-00', 3, ''),
(243, '', '0000-00-00', 3, 'good'),
(242, '', '0000-00-00', 3, 'good'),
(241, '', '0000-00-00', 3, 'good'),
(240, '', '0000-00-00', 3, 'good'),
(239, '', '0000-00-00', 3, 'a'),
(236, '', '0000-00-00', 3, 'a'),
(238, '', '0000-00-00', 3, 'a'),
(237, '', '0000-00-00', 3, 'a'),
(244, 'rujkhjg', '2020-05-14', 1, 'rk'),
(245, 'rujkhjg', '2020-05-14', 1, 'rk'),
(246, 'rujkhjg', '2020-05-12', 1, 'rty'),
(247, 'rujkhjg', '2020-05-12', 1, 'rty'),
(248, 'rujkhjg', '2020-05-12', 1, 'rty'),
(249, 'rujkhjg', '2020-06-25', 3, 'd'),
(250, 'rujkhjg', '2020-06-17', 4, 'abc'),
(251, 'rujkhjg', '2020-06-18', 5, 'asd'),
(252, 'rujkhjg', '2020-06-17', 3, 'jklj'),
(253, 'rujkhjg', '2020-06-17', 3, 'jdgjk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
