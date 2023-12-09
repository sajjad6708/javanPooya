-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 06:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `javanpooya_kashan`
--

-- --------------------------------------------------------

--
-- Table structure for table `commotidy`
--

CREATE TABLE `commotidy` (
  `id` int(6) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `productName` varchar(35) NOT NULL,
  `count` int(6) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `source` varchar(50) NOT NULL,
  `driver` varchar(50) NOT NULL,
  `pelakNumber` varchar(15) NOT NULL,
  `time` varchar(6) NOT NULL,
  `description` text NOT NULL,
  `attachment` text NOT NULL,
  `user` varchar(35) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commotidy`
--

INSERT INTO `commotidy` (`id`, `status`, `productName`, `count`, `unit`, `source`, `driver`, `pelakNumber`, `time`, `description`, `attachment`, `user`, `date`) VALUES
(3, 1, 'دینام', 2, 'عدد', 'بخشیان', 'جوشقانی', '11ب432ایران23', '11:11', 'متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه متن نمونه ', '', 'سجاد دشتبان', '۱۴۰۲-۸-۲۸'),
(4, 1, 'sasa', 12, 'dfd', 'dfdfd', 'dfgfd', '22efd', '12:13', 'efee', '', 'سجاد دشتبان', '۱۴۰۲-۹-۱۴');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(6) NOT NULL,
  `fullName` varchar(35) NOT NULL,
  `entry` int(6) NOT NULL,
  `end` int(6) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `visited` varchar(50) NOT NULL,
  `equipment` varchar(50) NOT NULL,
  `user` varchar(35) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `fullName`, `entry`, `end`, `reason`, `visited`, `equipment`, `user`, `date`) VALUES
(5, 'هاشمی', 12, 13, 'کاری', 'صدئقی', 'ندارد', 'سجاد دشتبان', '۱۴۰۲-۸-۲۶'),
(6, 'حمید شمسایی', 12, 14, 'تایید فاکتور', 'مهندس صابری', 'ندارد', 'سجاد دشتبان', '۱۴۰۲-۸-۲۸'),
(7, 'خانم وکیلی', 9, 11, 'شخصی', 'مهندس دشتبان ', 'ندارد', 'سجاد دشتبان', '۱۴۰۲-۸-۲۸');

-- --------------------------------------------------------

--
-- Table structure for table `personel`
--

CREATE TABLE `personel` (
  `ID` int(10) NOT NULL,
  `NationalCode` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `PersonalCode` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `IndexCode` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Family` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Father` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Post` varchar(10) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Shift` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `User` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `DateRegister` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `personel`
--

INSERT INTO `personel` (`ID`, `NationalCode`, `PersonalCode`, `IndexCode`, `Name`, `Family`, `Father`, `Post`, `Shift`, `User`, `DateRegister`) VALUES
(25, '45521145', '1234', '6545454', 'سجاد', 'عامری', ' هادی', 'sr', 'B', 'مولایی', '2023-04-20'),
(24, '45455555', '98413', '41552555', 'باقر', 'باقری', 'حسین', 'sr', 'B', 'مولایی', '2023-04-25'),
(23, '53553', '98414', '535355', 'حسن', 'موری', 'جواد', 'ba', 'B', 'مولایی', '2023-04-20'),
(22, '1234567890', '98415', '4545458', 'حسن', 'حسنی', 'علی', 'ba', 'A', 'مولایی', '2023-04-20'),
(21, '1250475708', '98416', '1250475708', 'علی', 'علیمی', 'حسن', 'ba', 'A', 'مولایی', '2023-04-20'),
(26, '1234543346', '1122', '1223', 'سهیل', 'ارامی', 'علی', 'fn', 'A', 'سجاد', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `NationalCode` varchar(10) NOT NULL,
  `Name` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `Family` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `PassWord` varchar(20) NOT NULL,
  `Pages` text NOT NULL,
  `Shifts` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `NationalCode`, `Name`, `Family`, `UserName`, `PassWord`, `Pages`, `Shifts`) VALUES
(1, '1250475708', 'سجاد', 'دشتبان', 'sajjad', '123456', 'p1 p2 p4', 'A,B,C'),
(2, '1250475708', 'قاسم', 'مولایی', 'ali', '123456', 'P1 ,P2', 'A,B,C');

-- --------------------------------------------------------

--
-- Table structure for table `vacation`
--

CREATE TABLE `vacation` (
  `id` int(6) NOT NULL,
  `fullName` varchar(60) NOT NULL,
  `personelCode` int(6) NOT NULL,
  `post` varchar(25) NOT NULL,
  `shift` varchar(1) NOT NULL,
  `sarshift` varchar(30) NOT NULL,
  `entry` varchar(6) NOT NULL,
  `end` varchar(6) NOT NULL,
  `user` varchar(6) NOT NULL,
  `date` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vacation`
--

INSERT INTO `vacation` (`id`, `fullName`, `personelCode`, `post`, `shift`, `sarshift`, `entry`, `end`, `user`, `date`) VALUES
(9, 'علی علیمی', 98416, 'ba', 'A', 'سجاد-عامری', '15:10', '14:30', 'سجاد د', '۱۴۰۲-۸-۲۰'),
(10, 'علی علیمی', 98416, 'ba', 'A', 'سجاد-عامری', '12:00', '10:00', 'سجاد د', '۱۴۰۲-۸-۲۰'),
(11, 'علی علیمی', 98416, 'ba', 'A', ' ', '22:20', '20:50', 'سجاد د', '۱۴۰۲-۸-۲۵'),
(12, 'علی علیمی', 98416, 'ba', 'A', 'سجاد-عامری', '17:11', '15:30', 'سجاد د', '۱۴۰۲-۸-۲۸'),
(13, 'علی علیمی', 98416, 'ba', 'A', 'سجاد-عامری', '23:30', '22:40', 'سجاد د', '۱۴۰۲-۸-۲۸'),
(14, 'علی علیمی', 98416, 'ba', 'A', 'سجاد-عامری', ':', ':', 'سجاد د', '۱۴۰۲-۹-۱۴');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commotidy`
--
ALTER TABLE `commotidy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commotidy`
--
ALTER TABLE `commotidy`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personel`
--
ALTER TABLE `personel`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
