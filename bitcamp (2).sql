-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 03:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `aaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `aaid`) VALUES
(1, 'by planting them', 1),
(1, 'by hand', 2),
(2, '30 degree', 3),
(2, '35 degree', 4),
(3, 'rice', 5),
(3, 'wheat', 6),
(4, 'Amit', 7),
(4, 'Snehal', 8),
(1, 'by using new and modern technologies', 9);

-- --------------------------------------------------------

--
-- Table structure for table `bulk`
--

CREATE TABLE `bulk` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulk`
--

INSERT INTO `bulk` (`id`, `image`, `name`, `price`) VALUES
(12, 'B1', 'BULK 1', 400),
(13, 'B2', 'BULK 2', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `compare_meds`
--

CREATE TABLE `compare_meds` (
  `id` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `cures` varchar(200) NOT NULL,
  `power` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare_meds`
--

INSERT INTO `compare_meds` (`id`, `image`, `name`, `cures`, `power`, `price`) VALUES
(1, 1, 'm1', 'c1', 100, 1000),
(2, 2, 'm2', 'c2', 200, 2000),
(3, 3, 'm3', 'c3', 300, 300),
(4, 4, 'm4', 'c1', 100, 500),
(5, 5, 'm5', 'c1', 100, 600);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg`
--

CREATE TABLE `doctor_reg` (
  `did` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `field` varchar(100) NOT NULL,
  `exp` int(11) NOT NULL,
  `charges` int(11) NOT NULL,
  `hosp` varchar(300) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_reg`
--

INSERT INTO `doctor_reg` (`did`, `name`, `aadhar`, `contact`, `field`, `exp`, `charges`, `hosp`, `rating`) VALUES
(1, 'abhi', 123, 123, '123', 123, 123, '', 123),
(2, '123123', 123123, 123, '123', 123, 123, '123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `employee_reg`
--

CREATE TABLE `employee_reg` (
  `id` int(11) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `skills` varchar(400) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_reg`
--

INSERT INTO `employee_reg` (`id`, `aadhar`, `name`, `age`, `contact`, `skills`, `salary`) VALUES
(4, 0, '', 0, 0, '', 0),
(1, 1, 'Abhi', 1, 1, 'farming,handlooming,mechanic,No', 10),
(2, 12, 'NANA', 12, 12, 'Farming,Handloom,Sab', 2232323),
(3, 338, 'Aditi', 11, 123, 'Mechanic,Gauti', 100000),
(5, 123123, 'asd123123', 132, 123, 'Farming,Handloom,Mechanic, 123', 123);

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `image`, `name`, `price`) VALUES
(8, 'E1', 'EQUIP 1', 1000),
(10, 'E2', 'EQUIP 2', 400);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `image`, `name`, `price`) VALUES
(17, 'm1', 'MED1', 200),
(18, 'M2', 'MED2', 1000),
(19, 'M3', 'MED3', 500);

-- --------------------------------------------------------

--
-- Table structure for table `med_loc`
--

CREATE TABLE `med_loc` (
  `mid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `med_loc`
--

INSERT INTO `med_loc` (`mid`, `name`) VALUES
(1, 'Med1'),
(2, 'Med2'),
(3, 'Med3'),
(4, 'Med4'),
(5, 'Med5');

-- --------------------------------------------------------

--
-- Table structure for table `patient_main_data`
--

CREATE TABLE `patient_main_data` (
  `pid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `diseases` varchar(4000) NOT NULL,
  `date` varchar(4000) NOT NULL,
  `treatment` varchar(4000) NOT NULL,
  `documents` varchar(3000) NOT NULL,
  `cost` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_main_data`
--

INSERT INTO `patient_main_data` (`pid`, `name`, `aadhar`, `contact`, `diseases`, `date`, `treatment`, `documents`, `cost`) VALUES
(1, 'abhi', 123, 123, 'nana:::rj:::abhi', '10/10/10:::11/11/11:::12/12/12', 'T1:::T2:::T#', 'nana:::rj:::abhi', '1000:::1000:::100000'),
(2, 'nana', 3451, 1234, 'Nausia:::Malaria:::Nageria', '10/10/10:::11/11/11:::12/12/12', 'aditi:::chavi:::gauti', 'aditi:::chavi:::gauti', '1000:::1000:100000'),
(3, 'Abhi', 208934, 234, 'Nausia:::Malaria:::Nageria', '10/10/10:::11/11/11:::12/12/12', 'TRIP:::NO TRIP:::HOME', 'rj:::nana:::aditi', '1000:::1000:100000');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reg`
--

CREATE TABLE `patient_reg` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_reg`
--

INSERT INTO `patient_reg` (`pid`, `name`, `aadhar`, `contact`) VALUES
(1, 'abhi', 123, 123),
(2, 'nana', 3451, 1234),
(3, 'rj', 208934, 234);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`) VALUES
(1, 'How to grow crops'),
(2, 'What is current weather'),
(3, 'whose price is higher, rice or wheat?'),
(4, 'What is your name'),
(5, 'what is ur name'),
(6, 'Where can i find the cheapest wax for making candles?');

-- --------------------------------------------------------

--
-- Table structure for table `shop_loc`
--

CREATE TABLE `shop_loc` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_loc`
--

INSERT INTO `shop_loc` (`id`, `image`, `name`, `price`, `location`) VALUES
(1, '123', '123', 123, '123'),
(2, '123123', '123123', 123123, '123123'),
(3, '123', 'asdasd', 123, 'med1'),
(4, '354', '345', 354, 'med2'),
(5, '354354', '345345', 345345345, 'med3'),
(6, '13523445', '34562562345', 34562345, 'med2'),
(7, 'ads', 'asd', 900909, 'med3'),
(8, 'asdasd', 'adsa', 98098, 'med3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aaid`);

--
-- Indexes for table `bulk`
--
ALTER TABLE `bulk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_meds`
--
ALTER TABLE `compare_meds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `employee_reg`
--
ALTER TABLE `employee_reg`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `med_loc`
--
ALTER TABLE `med_loc`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `patient_main_data`
--
ALTER TABLE `patient_main_data`
  ADD PRIMARY KEY (`aadhar`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `patient_reg`
--
ALTER TABLE `patient_reg`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `shop_loc`
--
ALTER TABLE `shop_loc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bulk`
--
ALTER TABLE `bulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `compare_meds`
--
ALTER TABLE `compare_meds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `doctor_reg`
--
ALTER TABLE `doctor_reg`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee_reg`
--
ALTER TABLE `employee_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `med_loc`
--
ALTER TABLE `med_loc`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_reg`
--
ALTER TABLE `patient_reg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shop_loc`
--
ALTER TABLE `shop_loc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
