-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_address` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `order_status` varchar(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `customer_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `customer_name`, `customer_address`, `email_address`, `contact_no`, `order_status`, `payment_status`, `customer_image`) VALUES
(1, 'Mr Customer2', 'Dhaka,BanglaDesh', '@gmail.com', '+880-1', '**order request processing**', 'Complete', '../storage/Customer_Image/customer_3.jpg'),
(2, 'Mr Customer3', 'Dhaka,BanglaDesh', 'customer3@gmail.com', '015', 'Delivered', 'Complete', '../storage/Customer_Image/customer_14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `employee_id` int(100) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `employee_address` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `employee_position` varchar(100) NOT NULL,
  `salary` int(100) DEFAULT NULL,
  `payment_status` varchar(100) DEFAULT NULL,
  `employee_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`employee_id`, `employee_name`, `employee_address`, `email_address`, `contact_no`, `employee_position`, `salary`, `payment_status`, `employee_image`) VALUES
(2, 'Mr AAA', 'Newyork,USA', 'aaa@gmail.com', '+880-17XXXX', 'HR', 100000, 'Complete', '../storage/Employee_Image/Construction_Specialist_1.jpg'),
(3, 'Mr BBB', 'Newyork,USA', 'bbb@gmail.com', '+880-15XXXX', 'IT_Specialist', 900005, '(due)', '../storage/Employee_Image/Maintaince_Specialist_1.jpg'),
(4, 'Mr CCC', 'London,UK', 'ccc@gmail.com', '+880-17XXXX', 'Delivery Boy', 15000, 'Complete', '../storage/Employee_Image/Cleaner_1.jpg'),
(5, 'Mr DDD', 'CapeTown,SouthAfrica', 'ccc@gmail.com', '+880-18XXXX', 'Chef', 40000, '(partial)', '../storage/Employee_Image/Chef_1.jpg'),
(10, 'Mr John', 'Tokyo,Japan', 'john@gmail.com', '+880-18XXXX', 'Security', 10000, '(due)', '../storage/Employee_Image/Cleaner_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_panel`
--

CREATE TABLE `login_panel` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_panel`
--

INSERT INTO `login_panel` (`user_name`, `password`, `title`, `customer_id`) VALUES
('admin1', '1111', 'admin', 1),
('employee1', '2222', 'employee', 2),
('customer1', '3333', 'customer', 3),
('customer2', '2222', 'customer', 4),
('customer3', '3333', 'customer', 5),
('customer22', '2222', 'customer', 6),
('customer33', '3333', 'customer', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `login_panel`
--
ALTER TABLE `login_panel`
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_panel`
--
ALTER TABLE `login_panel`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
