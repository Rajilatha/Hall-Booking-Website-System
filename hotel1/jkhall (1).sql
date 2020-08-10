-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 01:54 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `meal_id` int(11) NOT NULL,
  `decoration_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `Employee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mgs` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `mgs`, `date`) VALUES
(1, '', 'thfh', '2020-01-12 15:58:06'),
(2, '', 'hgcsdfg', '2020-01-12 15:58:15'),
(3, '', 'fghsgfh', '2020-01-12 15:58:49'),
(4, '', 'gfhsdjhf', '2020-01-12 15:59:01'),
(5, '', 'jhfgjkhdgi', '2020-01-12 15:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
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
  `user_type` varchar(250) NOT NULL DEFAULT 'cus'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `fname`, `lname`, `nic`, `dob`, `gender`, `address`, `email`, `phone`, `username`, `password`, `user_type`) VALUES
(1, 'Mickey', 'Kulanayagam', '968150057V', '2020-01-15', '&gender', 'rani vasa thunnalai south karaveddy', 'rajilatha1996@gmail.com', 766121459, 'jenani', 'Raji1996', 'admin'),
(2, 'rujkhjg', 'Mouse', '968150057V', '2020-01-09', '&gender', 'rani vasa thunnalai south karaveddy', 'sathisayanthan@gmail.com', 770575974, 'abitharani', 'Raji1996', 'cus'),
(3, 'Rajilatha', 'Kulanayagam', '968150057V', '2019-06-04', '&gender', 'Jaffna', 'thanush3012@gmail.com', 766121459, 'thanu', 'Thanu1996', 'cus'),
(4, 'Abitharani', 'Kulanayagam', '968150057V', '2020-01-23', '&gender', 'Jaffna', 'abitha1998@gmail.com', 766121459, 'Inthi', 'Raji1996', 'cus'),
(5, 'Thulasi', 'lux', '968650580v', '2020-01-11', '&gender', 'Jaffna', 'thula467@gmail.com', 778345678, 'Thula', 'Sachchi97', 'cus');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `decoration_id` int(11) NOT NULL,
  `decoration_name` varchar(250) NOT NULL,
  `decoration_type` varchar(250) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`decoration_id`, `decoration_name`, `decoration_type`, `image_link`, `price`) VALUES
(1, 'design', 'Artificial', '3.jpg', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `meal_id` int(11) NOT NULL,
  `meal_name` varchar(250) NOT NULL,
  `meal_description` varchar(500) NOT NULL,
  `image_link` varchar(250) NOT NULL,
  `meal_type` varchar(250) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `meal_name`, `meal_description`, `image_link`, `meal_type`, `price`) VALUES
(1, 'rice and currey', 'rice,currey', '5.jpg', 'Chicken', 100),
(2, '', '', '3.jpg', 'Artificial', 1000),
(3, '', '', '3.jpg', 'Artificial', 1000),
(4, '', '', '3.jpg', 'Artificial', 1000),
(5, '', '', '3.jpg', 'Artificial', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`decoration_id`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`meal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `decoration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meal`
--
ALTER TABLE `meal`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
