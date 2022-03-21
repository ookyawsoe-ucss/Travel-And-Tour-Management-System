-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 04:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelandtour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `created_date`) VALUES
(1, 'admin', 'admin', 'charlotte@gmail.com', 'charlotte', '2022-02-18 16:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` varchar(50) NOT NULL,
  `cid` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `depature_date` date NOT NULL,
  `duration_day` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `ticket_count` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cid`, `phone`, `customer_name`, `total_price`, `depature_date`, `duration_day`, `p_name`, `descr`, `price`, `ticket_count`, `created_date`, `p_id`) VALUES
('68', 6, '09792497307', 'ko kyaw', 36000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 3, '2022-03-09 16:45:13', 5),
('69', 6, '09792497307', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-11 17:00:04', 5),
('B-001', 6, '09428634653', 'ko kyaw', 120000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 10, '2022-03-12 09:09:50', 5),
('B-070', 6, '2', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-11 17:34:02', 5),
('B-071', 6, '09792497307', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-12 07:32:07', 5),
('B-072', 6, '09428634653', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-21 12:05:26', 5),
('B-073', 6, '09428634653', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-21 12:09:24', 5),
('B-074', 6, '09428634653', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-21 12:11:30', 5),
('B-075', 6, '09428634653', 'ko kyaw', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-21 12:11:45', 5),
('B-076', 7, '09428634653', 'b', 24000, '2022-03-08', 2, 'Ponnagyun To Sittway', 'ေနာကိက်ေက ခုံမရ', 12000, 2, '2022-03-21 12:29:00', 5);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_license_no` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `car_front_image` varchar(255) NOT NULL,
  `car_inside_image` varchar(255) NOT NULL,
  `car_side_image` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `car_name`, `car_license_no`, `car_type`, `car_front_image`, `car_inside_image`, `car_side_image`, `created_date`) VALUES
(1, 'BM', '123123', 'Vip', 'choosing-right-database-for-your-applications.png', 'fc36c55df3a78b8352c8816ed2abad45.jpg', 'check-list-icon-business-concept-flat-design-vector-13328386.jpg', '2022-03-08 13:03:05'),
(4, 'Toyota', '123123', 'Vip', '73163052_941211072906231_6413214891162730496_n.jpg', '85152671_182102813027463_2032525150355718144_n.jpg', '245929731_121976636887444_7800281631729753386_n.jpg', '2022-03-08 12:43:38'),
(5, 'Japan', '22325343', 'Vip', '38985105_319647051913571_4684336683024384000_n.jpg', '', '', '2022-03-08 12:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile_image` varchar(255) NOT NULL,
  `nrc_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `username`, `email`, `phone`, `gender`, `address`, `password`, `created_date`, `profile_image`, `nrc_no`) VALUES
(6, 'ko kyaw', 'admin', 'a@gmail.com', '121312', '', 'Tarmwe', '123', '2022-03-08 13:35:31', '19890994-illustration-of-smilinging-doctor-with-a-pill-of-medicine-.webp', '11/12312312'),
(7, 'b', 'b', 'b@gmail.com', '098500856', 'Male', 'Sittwe', 'admin123', '2022-02-26 18:46:55', '6dfd81a17e8a926a3f6eb34421879d3b.jpg', '11/123123124'),
(8, 'c', 'c', 'c@gmail.com', '098500856', 'Male', 'Sittwe', 'admin123', '2022-02-26 18:46:58', '6dfd81a17e8a926a3f6eb34421879d3b.jpg', '11/123123126'),
(9, 'd', 'd', 'd@gmail.com', '098500856', 'Male', 'Sittwe', 'admin123', '2022-02-26 18:47:03', '6dfd81a17e8a926a3f6eb34421879d3b.jpg', '11/123123125'),
(10, 'a', 'a', 'a@gmail.com', '098500856', 'Male', 'Sittwe', 'admin123', '2022-02-26 18:46:51', '6dfd81a17e8a926a3f6eb34421879d3b.jpg', '11/123123121');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `l_front` varchar(255) NOT NULL,
  `l_back` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `username`, `phone`, `address`, `profile_image`, `l_front`, `l_back`, `created_date`) VALUES
(2, 'Japan', 'Japan', '09123123133', 'Tarmwe', '38985105_319647051913571_4684336683024384000_n.jpg', 'Capture.PNG', '156940417_781031899461229_7861489407178768057_n.jpg', '2022-03-08 15:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `carname` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `start_time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `available_count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `p_name`, `carname`, `dname`, `departure_date`, `arrival_date`, `start_time`, `duration`, `available_count`, `price`, `description`, `package_image`, `created_date`) VALUES
(1, 'Yangon Mand', '1', '1', '2022-03-11', '2022-03-06', '09:30:00', 15, 14, 12000, '123123', 'nhn.jpg', '2022-03-05 22:16:37'),
(2, 'Ygn to pol', '2', '1', '2022-03-07', '2022-03-10', '09:30:00', 1, 1, 123, '123123', '85152671_182102813027463_2032525150355718144_n.jpg', '2022-03-06 18:38:33'),
(3, 'Ygn to pol', '2', '1', '2022-03-07', '2022-03-10', '09:30:00', 1, 1, 123, '123123', '116213628_590173228342757_6536504411121460173_n.png', '2022-03-06 18:38:33'),
(4, 'Ygn to pol', '2', '1', '2022-03-07', '2022-03-10', '09:30:00', 1, 1, 123, '123123', '117799173_611878786429615_5620098408356930722_n.png', '2022-03-06 18:38:33'),
(5, 'Ponnagyun To Sittway', 'Japan', 'Mg Kyaw Soe', '2022-03-08', '2022-03-24', '12:30:00', 2, 10, 12000, 'ေနာကိက်ေက ခုံမရ', 'fc36c55df3a78b8352c8816ed2abad45.jpg', '2022-03-08 13:10:23'),
(6, 'Rayhub To MakyaeMyaing', 'Toyota', 'Japan', '2022-03-10', '2022-03-04', '11:30:00', 1, 20, 1500, 'To Myo', '6dfd81a17e8a926a3f6eb34421879d3b.jpg', '2022-03-09 03:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`, `img`) VALUES
(33, 'check-list-icon-business-concept-flat-design-vector-13328386.jpg', 'check-list-icon-business-concept-flat-design-vector-13328386.jpg'),
(34, 'Picture1.jpg', 'Picture1.jpg'),
(35, 'Picture2.jpg', 'Picture2.jpg'),
(36, 'Picture2.jpg', 'Picture2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `id` int(11) DEFAULT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `p_ name` varchar(255) NOT NULL,
  `d_date` date NOT NULL,
  `d_day` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `t_price` int(11) NOT NULL,
  `p_number` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
