-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 05:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'harshal ', 'harshal40@gmail.com', 'harshal');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int(11) NOT NULL,
  `c_name` text COLLATE utf8_bin NOT NULL,
  `c_desc` text COLLATE utf8_bin NOT NULL,
  `c_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `c_img` text COLLATE utf8_bin NOT NULL,
  `c_duration` text COLLATE utf8_bin NOT NULL,
  `c_price` int(11) NOT NULL,
  `c_org_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`, `c_desc`, `c_author`, `c_img`, `c_duration`, `c_price`, `c_org_price`) VALUES
(1, 'react java script', 'i want to learn this bcoz this is very trending language ', 'geeky shows ', '../image/courseimages/f.jpg', '30 days', 200, 300),
(2, 'node.js ', 'if you lean react js language you need to learn the node.js and node js is the librarary of java script', 'geeky show', '../image/courseimages/m.jpg', '28days', 350, 400),
(3, 'wordpress', 'framework language', 'thapatect', '../image/courseimages/3.jpg', '1 month abv', 500, 800);

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_pass` varchar(60) COLLATE utf8_bin NOT NULL,
  `stu_occ` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_img` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'sonal', 'sonal@gmail.com', 'sonal', '', '0'),
(2, 'hari', 'hari67@gmail.com', 'hari', '', '0'),
(3, 'rahul', 'rahul12@gmail.com', 'rahul', '', '0'),
(4, 'rohit', 'rohit12@gmail.com', 'rahul', '', '0'),
(5, 'rohan', 'rohan33@gmail.com', 'rohan', '', '0'),
(11, 'ronit', 'ronit@gmail.com', 'efjrnienvknsvkfnkdnj', '', '0'),
(17, 'alia', 'alia@gmail.com', 'asdfh', '', ''),
(18, 'meenal', 'meenal@gmail.com', 'hjhhhh', '', ''),
(20, 'rita', 'rita@gmail.com', 'asdfg', '', ''),
(21, 'kunal', 'kunal@gmail.com', '123456', '', ''),
(22, 'sohib', 'sohib123@gail.com', 'sohib', '', ''),
(23, 'amit', 'amit@gmail.com', 'amit', '', ''),
(24, 'bcd', 'bcd@gmail.com', 'bccc', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
