-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 16, 2020 at 11:23 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `meal_id` int(11) NOT NULL,
  `decoration_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `Employee` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL DEFAULT 'cus',
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `fname`, `lname`, `nic`, `dob`, `gender`, `address`, `email`, `phone`, `username`, `password`, `user_type`) VALUES
(1, 'Mickey', 'Kulanayagam', '968150057V', '2020-01-15', '&gender', 'rani vasa thunnalai south karaveddy', 'rajilatha1996@gmail.com', 766121459, 'jenani', 'Raji1996', 'admin'),
(2, 'rujkhjg', 'Mouse', '968150057V', '2020-01-09', '&gender', 'rani vasa thunnalai south karaveddy', 'sathisayanthan@gmail.com', 770575974, 'abitharani', 'Raji1996', 'cus');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`decoration_id`, `decoration_name`, `decoration_type`, `image_link`, `price`) VALUES
(1, 'design', 'Artificial', '3.jpg', 1000);

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

-- --------------------------------------------------------

--
-- Table structure for table `halldetails`
--

DROP TABLE IF EXISTS `halldetails`;
CREATE TABLE IF NOT EXISTS `halldetails` (
  `id` int(11) NOT NULL,
  `hall_name` varchar(250) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `floor` varchar(250) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `meal_name`, `meal_description`, `image_link`, `meal_type`, `price`) VALUES
(1, 'rice and currey', 'rice,currey', '5.jpg', 'Chicken', 100),
(2, '', '', '3.jpg', 'Artificial', 1000),
(3, '', '', '3.jpg', 'Artificial', 1000),
(4, '', '', '3.jpg', 'Artificial', 1000),
(5, '', '', '3.jpg', 'Artificial', 1000);

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
  `cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '3',
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `city`, `email`, `rating`, `message`) VALUES
('', '', '', 0, ''),
('dffnghuidtgitbte		   ', '', '', 0, ''),
('so sad		   ', '', '', 0, ''),
('sayan', 'jaffna', 'dsyw@gmail.com', 0, 'dgyweufsvsbdl		   '),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 3, ''),
('dgs', 'drss', 'dsdg@gmail.com', 3, 'dhdgdgdg'),
('', '', '', 3, ''),
('sayan', 'dgdfsg', 'dgdg@gmail.com', 3, 'dhdgdfshs');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
