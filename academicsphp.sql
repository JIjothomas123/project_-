-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 02:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academicsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_mark`
--

CREATE TABLE `add_mark` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `maxmark` varchar(20) NOT NULL,
  `assesment` varchar(20) NOT NULL,
  `subject1` varchar(20) NOT NULL,
  `subject2` varchar(20) NOT NULL,
  `subject3` varchar(20) NOT NULL,
  `subject4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_mark`
--

INSERT INTO `add_mark` (`id`, `name`, `batch`, `maxmark`, `assesment`, `subject1`, `subject2`, `subject3`, `subject4`) VALUES
(1, 'ashiq', 'jsd', '100', '1', '99', '99', '99', '99'),
(2, 'ashiq', 'jsd', '100', '1', '99', '99', '99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `s_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`s_id`, `name`, `dob`, `email`, `gender`, `phoneno`, `qualification`, `batch`, `username`, `password`) VALUES
(1, 'ashiq', '17/091996', 'ashiq@gmail.com', 'male', '12345678', 'b.tech', 'jsd', 'ashiq', 'ashiq123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `ad_faculty`
--

CREATE TABLE `ad_faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_faculty`
--

INSERT INTO `ad_faculty` (`id`, `name`, `email`, `phone`, `qualification`, `batch`, `username`, `password`) VALUES
(1, 'amitha', 'amitha@gmail.com', '1234567890', 'b.tech', 'jsd', 'amitha', 'amitha123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `hour1` varchar(20) NOT NULL,
  `hour2` varchar(20) NOT NULL,
  `hour3` varchar(20) NOT NULL,
  `hour4` varchar(20) NOT NULL,
  `hour5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `name`, `batch`, `date`, `hour1`, `hour2`, `hour3`, `hour4`, `hour5`) VALUES
(1, 'ashiq', 'jsd', '12/12/2020', 'on', 'on', 'on', 'on', 'on'),
(2, 'ashiq', 'jsd', '12/13/2020', 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `fac_leave`
--

CREATE TABLE `fac_leave` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Leaveid` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_leave`
--

INSERT INTO `fac_leave` (`id`, `name`, `Leaveid`, `reason`, `status`) VALUES
(1, 'amitha', '1', 'casual', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `stu_leave`
--

CREATE TABLE `stu_leave` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `leaveid` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_leave`
--

INSERT INTO `stu_leave` (`id`, `name`, `leaveid`, `reason`, `status`) VALUES
(1, 'ashiq', '2', 'nothing', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_mark`
--
ALTER TABLE `add_mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ad_faculty`
--
ALTER TABLE `ad_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fac_leave`
--
ALTER TABLE `fac_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_leave`
--
ALTER TABLE `stu_leave`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_mark`
--
ALTER TABLE `add_mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ad_faculty`
--
ALTER TABLE `ad_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fac_leave`
--
ALTER TABLE `fac_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stu_leave`
--
ALTER TABLE `stu_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
