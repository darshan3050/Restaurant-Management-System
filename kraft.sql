-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 07:53 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`username`, `password`) VALUES
('chef1', 'chef1');

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `table no` int(11) NOT NULL,
  `action` varchar(50) NOT NULL DEFAULT 'Pending',
  `orderno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `sub`, `msg`) VALUES
('Darshan Naik', 'darshannaik376@gmail.com', 'feedback', 'Very Good ambiance');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user`, `name`, `pas`) VALUES
('table1', 'table1', 'table1');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `table no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `category`, `name`, `price`, `path`, `table no`) VALUES
(1, 'Italian', 'Spring roll', 20, 'images/Italian/1.jpg', 0),
(3, 'Italian', 'Italian Noodles', 300, 'images/Italian/2.jpg', 0),
(4, 'Italian', 'Cheesy pasta', 250, 'images/Italian/3.jpg', 0),
(5, 'Italian', 'Pizza', 300, 'images/Italian/4.jpg', 0),
(6, 'Italian', 'Classical Italian Pizza', 250, 'images/Italian/5.jpg', 0),
(7, 'Italian', 'Tartiflette', 250, 'images/Italian/6.jpg', 0),
(8, 'Italian', 'Spaghetti Noddles', 300, 'images/Italian/7.jpg', 0),
(9, 'Italian', 'Italian Taco', 350, 'images/Italian/8.jpg', 0),
(10, 'Italian', 'Cheese Bread', 150, 'images/Italian/9.jpg', 0),
(11, 'Italian', 'Lasagna', 350, 'images/Italian/11.jpg', 0),
(12, 'Main Course', 'Biryani', 350, 'images/Main Course/1.jpg', 0),
(13, 'Main Course', 'Veg Thali', 250, 'images/Main Course/2.jpg', 0),
(14, 'Main Course', 'Butter Chicken', 400, 'images/Main Course/6.jpg', 0),
(15, 'Main Course', 'Souths Special', 250, 'images/Main Course/3.jpg', 0),
(16, 'Main Course', 'Tangy Chiken Tikka', 350, 'images/Main Course/4.jpg', 0),
(17, 'Main Course', 'Mixed Thali', 300, 'images/Main Course/5.jpg', 0),
(18, 'Main Course', 'Sweet Potato Curry', 300, 'images/Main Course/7.jpg', 0),
(19, 'Main Course', 'Veg Biryani', 300, 'images/Main Course/8.jpg', 0),
(20, 'Main Course', 'Italian Special', 500, 'images/Main Course/9.jpg', 0),
(21, 'South Indian', 'Medu Vada', 200, 'images/South Indian/1.jpg', 0),
(22, 'South Indian', 'Tomato Upma', 200, 'images/South Indian/2.jpg', 0),
(23, 'South Indian', 'Masala Dosa', 250, 'images/South Indian/3.jpg', 0),
(24, 'South Indian', 'Large Dosa', 200, 'images/South Indian/4.jpg', 0),
(25, 'South Indian', 'Idli Sambar', 200, 'images/South Indian/5.jpg', 0),
(26, 'South Indian', 'Akki Roti', 200, 'images/Main Course/6.jpg', 0),
(27, 'South Indian', 'Curd Rice', 300, 'images/South Indian/9.jpg', 0),
(28, 'South Indian', 'Paniyaram', 250, 'images/Main Course/8.jpg', 0),
(29, 'South Indian', 'Dal Vda', 250, 'images/South Indian/7.jpg', 0),
(30, 'South Indian', 'Onion Uttapam', 350, 'images/South Indian/10.jpg', 0),
(31, 'Chinese', 'Fried Rice', 350, 'images/Chinese/1.jpg', 0),
(32, 'Chinese', 'Chicken Cutlet', 250, 'images/Chinese/2.jpg', 0),
(33, 'Chinese', 'Chicken Manchurian', 400, 'images/Chinese/3.jpg', 0),
(34, 'Chinese', 'Schezwan Rice', 400, 'images/Chinese/4.jpg', 0),
(35, 'Chinese', 'Chiken Fingers', 350, 'images/Chinese/5.jpg', 0),
(36, 'Chinese', 'Chilli Chicken', 300, 'images/Chinese/6.jpg', 0),
(37, 'Chinese', 'Manchurian Soup', 250, 'images/Chinese/7.jpg', 0),
(38, 'Chinese', 'Chicken Bolls Soup', 400, 'images/Chinese/8.jpg', 0),
(39, 'Chinese', 'Chinese Noodles', 350, 'images/Chinese/9.jpg', 0),
(40, 'Starter', 'Pakoda', 100, 'images/Starter/1.jpg', 0),
(41, 'Starter', 'Toast Sandwich', 200, 'images/Starter/2.jpg', 0),
(42, 'Starter', 'Chilli Garlic Pops ', 350, 'images/Starter/3.jpg', 0),
(43, 'Starter', 'Chicken Nugget', 300, 'images/Starter/4.jpg', 0),
(44, 'Starter', 'Vegetable Cutlet', 250, 'images/Starter/5.jpg', 0),
(45, 'Starter', 'Panner Biscuit', 250, 'images/Starter/6.jpg', 0),
(46, 'Starter', 'Tandoori Fryer', 350, 'images/Starter/7.jpg', 0),
(47, 'Starter', 'Panner Tikka', 300, 'images/Starter/8.jpg', 0),
(48, 'Starter', 'Aloo Nazakat', 250, 'images/Starter/9.jpg', 0),
(49, 'Starter', 'Chicken Lollipop', 350, 'images/Starter/10.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `m2c`
--

CREATE TABLE `m2c` (
  `name` varchar(25) NOT NULL,
  `sub` varchar(40) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m2c`
--

INSERT INTO `m2c` (`name`, `sub`, `msg`) VALUES
('sdttsad', 'sdgsd', 'sdgsdghs'),
('sdttsad', 'sdgsd', 'sdgsdghs'),
('sdttsad', 'sdgsd', 'sdgsdghs');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `name` varchar(10) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`name`, `username`, `password`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `odetail`
--

CREATE TABLE `odetail` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `table no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `odetail`
--

INSERT INTO `odetail` (`id`, `fname`, `price`, `quantity`, `user`, `table no`) VALUES
(1, 'Spring roll', 20, 1, 'asfasf', 0),
(5, 'Pizza', 300, 3, 'asfasf', 0),
(6, 'Classical Italian Pizza', 250, 1, 'asfasf', 0),
(3, 'Italian Noodles', 300, 1, '1', 0),
(1, 'Spring roll', 20, 1, '1', 0),
(30, 'Onion Uttapam', 350, 3, 'NNNN', 0),
(18, 'Sweet Potato Curry', 300, 1, 'NNNN', 0),
(31, 'Fried Rice', 350, 1, 'NNNN', 0),
(42, 'Chilli Garlic Pops ', 350, 1, 'NNNN', 0),
(1, 'Spring roll', 20, 1, 'darshan123', 0),
(41, 'Toast Sandwich', 200, 1, 'darshan123', 0),
(1, 'Spring roll', 20, 1, 'darshan123', 0),
(6, 'Classical Italian Pizza', 250, 1, 'darshan123', 0),
(12, 'Biryani', 350, 1, 'darshan123', 0),
(9, 'Italian Taco', 350, 1, 'darshan123', 0),
(2, 'Italian Desert', 200, 1, 'darshan123', 0),
(7, 'Tartiflette', 250, 1, 'darshan123', 0),
(9, 'Italian Taco', 350, 1, 'darshan123', 0),
(5, 'Pizza', 300, 1, 'darshan123', 0),
(11, 'Lasagna', 350, 1, 'darshan123', 0),
(10, 'Cheese Bread', 150, 1, 'darshan123', 0),
(14, 'Butter Chicken', 400, 1, 'darshan123', 0),
(32, 'Chicken Cutlet', 250, 1, 'darshan123', 0),
(19, 'Veg Biryani', 300, 1, 'darshan123', 0),
(12, 'Biryani', 350, 3, 'darshan123', 0),
(16, 'Tangy Chiken Tikka', 350, 1, 'darshan123', 0),
(33, 'Chicken Manchurian', 400, 1, 'darshan123', 0),
(6, 'Classical Italian Pizza', 250, 2, 'darshan123', 0),
(10, 'Cheese Bread', 150, 1, 'darshan123', 0),
(20, 'Italian Special', 500, 1, 'darshan123', 0),
(5, 'Pizza', 300, 2, 'darshan123', 0),
(34, 'Schezwan Rice', 400, 1, 'darshan123', 0),
(2, 'Italian Desert', 200, 1, 'darshan123', 0),
(5, 'Pizza', 300, 1, 'darshan123', 0),
(11, 'Lasagna', 350, 1, 'darshan123', 0),
(13, 'Veg Thali', 250, 1, 'darshan123', 0),
(2, 'Italian Desert', 200, 1, 'darshan123', 0),
(22, 'Tomato Upma', 200, 1, 'darshan123', 0),
(45, 'Panner Biscuit', 250, 1, 'darshan123', 0),
(13, 'Veg Thali', 250, 1, 'darshan123', 0),
(12, 'Biryani', 350, 3, 'darshan123', 0),
(10, 'Cheese Bread', 150, 1, 'darshan123', 0),
(12, 'Biryani', 350, 1, 'darshan123', 0),
(14, 'Butter Chicken', 400, 1, 'darshan123', 0),
(1, 'Spring roll', 20, 1, 'darshan123', 0),
(12, 'Biryani', 350, 1, 'darshan123', 0),
(36, 'Chilli Chicken', 300, 1, 'darshan123', 0),
(40, 'Pakoda', 100, 1, 'darshan123', 0),
(21, 'Medu Vada', 200, 1, 'darshan123', 0),
(11, 'Lasagna', 350, 1, 'darshan123', 0),
(32, 'Chicken Cutlet', 250, 1, 'darshan123', 0),
(26, 'Akki Roti', 200, 1, 'darshan123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`orderno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `orderno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
