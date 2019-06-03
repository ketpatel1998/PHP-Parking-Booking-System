-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2019 at 01:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_tbl`
--

CREATE TABLE `booked_tbl` (
  `id` int(3) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `place` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slot` varchar(10) NOT NULL,
  `time_hours` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `starttime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL,
  `entrytime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_tbl`
--

INSERT INTO `booked_tbl` (`id`, `regno`, `place`, `name`, `slot`, `time_hours`, `email`, `phone`, `starttime`, `endtime`, `entrytime`) VALUES
(1, 'GJ-01-1455', 'Piksole Building, Ahmedabad', '', 'p10', '3', '', 0, '0', '0', '2019-03-08 15:26:01'),
(2, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p28', '2', 'ket.patel1998@gmail.', 9825997896, '0', '0', '2019-03-08 15:26:01'),
(3, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p55', '5', 'ket.patel1998@gmail.', 9825997896, '0', '0', '2019-03-08 15:26:01'),
(4, 'GJ-01-0007', 'Piksole Building, Ahmedabad', 'komos', 'p52', '5', 'komos@kom.com', 0, '0', '0', '2019-03-08 15:26:01'),
(5, 'GJ-01-0007', 'Piksole Building, Ahmedabad', 'komos', 'p34', '3', 'komos@kom.com', 0, '0', '0', '2019-03-08 15:26:01'),
(6, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p60', '3', 'ket.patel1998@gmail.', 9825997896, '0', '0', '2019-03-08 15:26:01'),
(7, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p38', '0', 'ket.patel1998@gmail.', 9825997896, '01:23', '01:24', '2019-03-08 18:54:17'),
(8, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p20', '0', 'ket.patel1998@gmail.', 9825997896, '01:41', '01:42', '2019-03-08 20:32:09'),
(9, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p6', '0', 'ket.patel1998@gmail.', 9825997896, '05:33', '19:34', '2019-03-08 20:33:10'),
(10, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p27', '0', 'ket.patel1998@gmail.', 9825997896, '05:34', '17:35', '2019-03-08 20:36:31'),
(11, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p9', '0', 'ket.patel1998@gmail.', 9825997896, '08:37', '08:51', '2019-03-08 20:37:35'),
(12, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p25', '0', 'ket.patel1998@gmail.', 9825997896, '05:38', '05:39', '2019-03-08 20:46:46'),
(13, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p31', '0', 'ket.patel1998@gmail.', 9825997896, '17:48', '17:50', '2019-03-08 20:47:17'),
(14, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p6', '0', 'ket.patel1998@gmail.', 9825997896, '05:47', '06:48', '2019-03-08 20:47:58'),
(15, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p3', '0', 'ket.patel1998@gmail.', 9825997896, '17:49', '17:50', '2019-03-08 20:48:59'),
(16, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p11', '0', 'ket.patel1998@gmail.', 9825997896, '05:51', '06:52', '2019-03-08 20:49:59'),
(17, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p23', '0', 'ket.patel1998@gmail.', 9825997896, '05:52', '05:53', '2019-03-08 20:50:51'),
(18, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p5', '0', 'ket.patel1998@gmail.', 9825997896, '05:53', '18:54', '2019-03-08 20:52:04'),
(19, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p18', '0', 'ket.patel1998@gmail.', 9825997896, '05:53', '05:55', '2019-03-08 20:52:23'),
(20, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p10', '0', 'ket.patel1998@gmail.', 9825997896, '05:54', '05:56', '2019-03-08 20:52:47'),
(21, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p15', '0', 'ket.patel1998@gmail.', 9825997896, '05:57', '06:58', '2019-03-08 20:53:06'),
(22, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p2', '0', 'ket.patel1998@gmail.', 9825997896, '05:55', '05:57', '2019-03-08 20:53:25'),
(23, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p29', '0', 'ket.patel1998@gmail.', 9825997896, '05:54', '17:56', '2019-03-08 20:53:41'),
(24, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p11', '0', 'ket.patel1998@gmail.', 9825997896, '17:54', '18:55', '2019-03-08 20:54:29'),
(25, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p1', '0', 'ket.patel1998@gmail.', 9825997896, '06:55', '06:57', '2019-03-08 20:54:52'),
(26, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p3', '0', 'ket.patel1998@gmail.', 9825997896, '05:55', '05:59', '2019-03-08 20:55:12'),
(27, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p8', '0', 'ket.patel1998@gmail.', 9825997896, '06:56', '07:58', '2019-03-08 20:55:53'),
(28, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p5', '0', 'ket.patel1998@gmail.', 9825997896, '18:51', '19:59', '2019-03-08 21:02:01'),
(29, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p23', '0', 'ket.patel1998@gmail.', 9825997896, '06:03', '07:04', '2019-03-08 21:02:40'),
(30, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p24', '0', 'ket.patel1998@gmail.', 9825997896, '06:05', '06:06', '2019-03-08 21:04:36'),
(31, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p32', '0', 'ket.patel1998@gmail.', 9825997896, '10:33', '10:35', '2019-03-09 13:33:07'),
(32, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p10', '0', 'ket.patel1998@gmail.', 9825997896, ':', '11:07', '2019-03-09 14:04:46'),
(33, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p2', '0', 'ket.patel1998@gmail.', 9825997896, ':', '08:05', '2019-03-09 14:06:29'),
(34, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p14', '0', 'ket.patel1998@gmail.', 9825997896, '0:1', '11:13', '2019-03-09 14:10:21'),
(35, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p7', '1', 'ket.patel1998@gmail.', 9825997896, '11:13', '12:13', '2019-03-09 14:16:53'),
(36, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p9', '0', 'ket.patel1998@gmail.', 9825997896, '10:12', '10:15', '2019-03-09 05:14:00'),
(37, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p18', '0', 'ket.patel1998@gmail.', 9825997896, '14:23', '14:24', '2019-03-09 05:20:03'),
(38, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p26', '0:1', 'ket.patel1998@gmail.', 9825997896, '15:23', '15:24', '2019-03-09 05:21:58'),
(39, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p42', '0:2', 'ket.patel1998@gmail.', 9825997896, '16:21', '16:23', '2019-03-09 07:20:03'),
(40, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p22', '0:2', 'ket.patel1998@gmail.', 9825997896, '13:45', '13:47', '2019-03-09 08:14:36'),
(41, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p10', '0:1', 'ket.patel1998@gmail.', 9825997896, '13:59', '14:00', '2019-03-09 08:28:35'),
(42, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p12', '1:0', 'ket.patel1998@gmail.', 9825997896, '10:30', '11:30', '2019-03-17 04:27:45'),
(43, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p32', '0:1', 'ket.patel1998@gmail.', 9825997896, '10:00', '10:01', '2019-03-17 04:28:59'),
(44, 'GJ-01-1455', 'Piksole Building, Ahmedabad', 'ket patel', 'p45', '0:3', 'ket.patel1998@gmail.', 9825997896, '11:12', '11:15', '2019-03-17 04:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `slots_tbl`
--

CREATE TABLE `slots_tbl` (
  `id` int(3) NOT NULL,
  `slot_id` varchar(5) NOT NULL,
  `slot_link` varchar(5) NOT NULL,
  `slot_status` int(1) NOT NULL,
  `time_hours` varchar(10) NOT NULL,
  `starttime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL,
  `timestampentry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots_tbl`
--

INSERT INTO `slots_tbl` (`id`, `slot_id`, `slot_link`, `slot_status`, `time_hours`, `starttime`, `endtime`, `timestampentry`) VALUES
(1, 'p1', 'a1', 0, '', '0', '0', '2019-03-08 15:23:01'),
(2, 'p2', 'a2', 0, '0:03', '0', '0', '2019-03-08 15:23:01'),
(3, 'p3', 'a3', 0, '', '0', '0', '2019-03-08 15:23:01'),
(4, 'p4', 'a4', 0, '', '0', '0', '2019-03-08 15:23:01'),
(7, 'p5', 'a5', 1, '01:08', '18:51', '19:59', '2019-03-08 15:23:01'),
(8, 'p6', 'a6', 0, '', '0', '0', '2019-03-08 15:23:01'),
(9, 'p7', 'a7', 0, '1:0', '0', '0', '2019-03-08 15:23:01'),
(10, 'p8', 'a8', 0, '', '0', '0', '2019-03-08 15:23:01'),
(11, 'p9', 'a9', 0, '0:3', '0', '0', '2019-03-08 15:23:01'),
(12, 'p10', 'a10', 0, '0:1', '0', '0', '2019-03-08 15:23:01'),
(13, 'p11', 'a11', 0, '', '0', '0', '2019-03-08 15:23:01'),
(14, 'p12', 'a12', 1, '1:0', '10:30', '11:30', '2019-03-08 15:23:01'),
(15, 'p13', 'a13', 0, '', '0', '0', '2019-03-08 15:23:01'),
(16, 'p14', 'a14', 0, '0:1', '0', '0', '2019-03-08 15:23:01'),
(17, 'p15', 'a15', 0, '', '0', '0', '2019-03-08 15:23:01'),
(18, 'p16', 'a16', 0, '', '0', '0', '2019-03-08 15:23:01'),
(19, 'p17', 'a17', 0, '', '0', '0', '2019-03-08 15:23:01'),
(20, 'p18', 'a18', 1, '0:1', '14:23', '14:24', '2019-03-08 15:23:01'),
(21, 'p19', 'a19', 0, '', '0', '0', '2019-03-08 15:23:01'),
(22, 'p20', 'a20', 0, '', '0', '0', '2019-03-08 15:23:01'),
(23, 'p21', 'a21', 0, '', '0', '0', '2019-03-08 15:23:01'),
(24, 'p22', 'a22', 0, '0:2', '0', '0', '2019-03-08 15:23:01'),
(25, 'p23', 'a23', 0, '', '0', '0', '2019-03-08 15:23:01'),
(26, 'p24', 'a24', 0, '0:01', '0', '0', '2019-03-08 15:23:01'),
(27, 'p25', 'a25', 0, '', '0', '0', '2019-03-08 15:23:01'),
(28, 'p26', 'a26', 1, '0:1', '15:23', '15:24', '2019-03-08 15:23:01'),
(29, 'p27', 'a27', 0, '', '0', '0', '2019-03-08 15:23:01'),
(30, 'p28', 'a28', 0, '', '0', '0', '2019-03-08 15:23:01'),
(32, 'p30', 'a30', 0, '', '0', '0', '2019-03-08 15:23:01'),
(33, 'p41', 'a41', 0, '', '0', '0', '2019-03-08 15:23:01'),
(34, 'p40', 'a40', 0, '', '0', '0', '2019-03-08 15:23:01'),
(35, 'p39', 'a39', 0, '', '0', '0', '2019-03-08 15:23:01'),
(36, 'p38', 'a38', 0, '', '0', '0', '2019-03-08 15:23:01'),
(37, 'p37', 'a37', 0, '', '0', '0', '2019-03-08 15:23:01'),
(38, 'p36', 'a36', 0, '', '0', '0', '2019-03-08 15:23:01'),
(39, 'p35', 'a35', 0, '', '0', '0', '2019-03-08 15:23:01'),
(40, 'p34', 'a34', 0, '', '0', '0', '2019-03-08 15:23:01'),
(41, 'p33', 'a33', 0, '', '0', '0', '2019-03-08 15:23:01'),
(42, 'p32', 'a32', 1, '0:1', '10:00', '10:01', '2019-03-08 15:23:01'),
(43, 'p31', 'a31', 0, '', '0', '0', '2019-03-08 15:23:01'),
(44, 'p42', 'a42', 1, '0:2', '16:21', '16:23', '2019-03-08 15:23:01'),
(45, 'p43', 'a43', 0, '', '0', '0', '2019-03-08 15:23:01'),
(46, 'p44', 'a44', 0, '', '0', '0', '2019-03-08 15:23:01'),
(47, 'p45', 'a45', 1, '0:3', '11:12', '11:15', '2019-03-08 15:23:01'),
(48, 'p46', 'a46', 0, '', '0', '0', '2019-03-08 15:23:01'),
(49, 'p47', 'a47', 0, '', '0', '0', '2019-03-08 15:23:01'),
(50, 'p48', 'a48', 0, '', '0', '0', '2019-03-08 15:23:01'),
(51, 'p49', 'a49', 0, '', '0', '0', '2019-03-08 15:23:01'),
(52, 'p50', 'a50', 0, '', '0', '0', '2019-03-08 15:23:01'),
(53, 'p51', 'a51', 0, '', '0', '0', '2019-03-08 15:23:01'),
(54, 'p52', 'a52', 0, '', '0', '0', '2019-03-08 15:23:01'),
(55, 'p53', 'a53', 0, '', '0', '0', '2019-03-08 15:23:01'),
(56, 'p54', 'a54', 0, '', '0', '0', '2019-03-08 15:23:01'),
(57, 'p55', 'a55', 0, '', '0', '0', '2019-03-08 15:23:01'),
(58, 'p56', 'a56', 0, '', '0', '0', '2019-03-08 15:23:01'),
(59, 'p57', 'a57', 0, '', '0', '0', '2019-03-08 15:23:01'),
(60, 'p58', 'a58', 0, '', '0', '0', '2019-03-08 15:23:01'),
(61, 'p59', 'a59', 0, '', '0', '0', '2019-03-08 15:23:01'),
(62, 'p60', 'a60', 0, '', '0', '0', '2019-03-08 15:23:01'),
(63, 'p61', 'a61', 0, '', '0', '0', '2019-03-08 15:23:01'),
(64, 'p62', 'a62', 0, '', '0', '0', '2019-03-08 15:23:01'),
(65, 'p29', 'a29', 0, '', '0', '0', '2019-03-09 13:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(3) NOT NULL,
  `reg_no` varchar(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `reg_no`, `name`, `email`, `phone`, `password`) VALUES
(1, 'GJ-01-1455', 'ket patel', 'ket.patel1998@gmail.', 9825997896, 'hello'),
(3, 'GJ-01-1450', 'jk', 'ket.patel1998@gmail.', 2323, 'm'),
(11, 'GJ-01-1451', 'Kunj', 'kunj.patel1998@gmail', 7622334589, 'ku'),
(12, 'GJ-01-1415', 'Nihar', 'nihar@gm.com', 1112223331, 'u'),
(13, 'GJ-01-0007', 'komos', 'komos@kom.com', 0, 'haha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_tbl`
--
ALTER TABLE `booked_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots_tbl`
--
ALTER TABLE `slots_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slot_id` (`slot_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_tbl`
--
ALTER TABLE `booked_tbl`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `slots_tbl`
--
ALTER TABLE `slots_tbl`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
