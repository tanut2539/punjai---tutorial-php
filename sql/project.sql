-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 06:39 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_admin`
--

CREATE TABLE `tab_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_user` varchar(25) NOT NULL,
  `admin_password` varchar(25) NOT NULL,
  `admin_fname` varchar(50) NOT NULL,
  `admin_lname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_admin`
--

INSERT INTO `tab_admin` (`admin_id`, `admin_user`, `admin_password`, `admin_fname`, `admin_lname`) VALUES
(1, 'admin', '1234', 'ปัญใจ', 'สร้างบุญ');

-- --------------------------------------------------------

--
-- Table structure for table `tab_donate`
--

CREATE TABLE `tab_donate` (
  `donate_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` char(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  `items` varchar(250) DEFAULT NULL,
  `money` int(7) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_donate`
--

INSERT INTO `tab_donate` (`donate_id`, `name`, `email`, `phone`, `details`, `items`, `money`, `status`) VALUES
(2, 'อาริยะ สุทธิแสง', 'arriya.suthi@hotmail.com', '0976113165', 'บริจาคทั้งเงินและสิ่งของ', 'ผ้าห่ม + ชุดกันหนาว(เด็ก)', 5000, 0),
(3, 'อรอริณ จริญาณิณ', 'onarin.jarinya@onarin.com', '0944172781', 'บริจาคทั้งเงินและสิ่งของ', 'น้ำดื่ม,เครื่องนุ่งห่ม,ขนม', 15000, 0),
(4, 'อินทร ประเสริฐ', 'inthorn.parsert@outlook.com', '0993316664', 'บริจาคเงิน', '', 25000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_admin`
--
ALTER TABLE `tab_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tab_donate`
--
ALTER TABLE `tab_donate`
  ADD PRIMARY KEY (`donate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_admin`
--
ALTER TABLE `tab_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tab_donate`
--
ALTER TABLE `tab_donate`
  MODIFY `donate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
